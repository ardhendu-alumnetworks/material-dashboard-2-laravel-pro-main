<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="user-management" activeSubitem="">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="User Management"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Add User</h5>
                            <p>Create new user</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('users') }}">Back to list</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('add.user') }}" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">

                                    <div class="avatar avatar-xl position-relative preview">
                                        <img src="{{ asset('assets') }}/img/placeholder.jpg" alt="avatar"
                                            class="w-100 rounded-circle shadow-sm" id="file-ip-1-preview">
                                        <label for="file-input"
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" aria-hidden="true" data-bs-original-title="Select Image"
                                                aria-label="Select Image"></i><span class="sr-only">Select Image</span>
                                        </label>
                                        <input type="file" name='picture' id="file-input"
                                            onchange="showPreview(event);">
                                    </div>
                                    @error('picture')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">

                                    <label for="exampleInputname">Name</label>
                                    <input type="name" name='name' class="form-control border border-2 p-2" id="exampleInputname" placeholder="Enter name"  value='{{ old('name') }}'>
                                    @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for="exampleInputemail">Email</label>
                                    <input type="name" name='email' class="form-control border border-2 p-2" id="exampleInputemail" placeholder="Enter name" value='{{ old('email') }}'>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for='role_id'>Roles</label>
                                    <select class="form-select border border-2 p-2" name="role_id"
                                        data-style="select-with-transition" title="" data-size="100" id="role">
                                        <option value="">-</option>
                                        @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : ''}}>{{ $role->name }}
                                                </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for="examplePassword">Password</label>
                                    <input type="password" name='password' class="form-control border border-2 p-2" id="examplePassword" placeholder="Enter password">
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for="examplePassword2">Confirm Password</label>
                                    <input type="password" name='password_confirmation' class="form-control border border-2 p-2" id="examplePassword2" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-dark mt-3">Add user</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

    </script>
    @endpush

</x-page-template>
