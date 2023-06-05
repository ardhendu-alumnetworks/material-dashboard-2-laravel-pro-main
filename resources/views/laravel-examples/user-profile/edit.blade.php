<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <x-auth.navbars.sidebar activePage='laravel-examples' activeItem='user-profile' activeSubitem=''>
    </x-auth.navbars.sidebar>
    <main class="main-content">
        <x-auth.navbars.navs.auth pageTitle='User Profile'></x-auth.navbars.navs.auth>
        <div class="container-fluid my-3 py-3">
            <div class="row mb-5">
                <div class="col-lg-12 mt-lg-0 mt-4">
                    <!-- Card Profile -->
                    <div class="card card-body" id="profile">
                        <div class="row justify-content-center align-items-center">
                            @error('picture')
                            <p class='text-danger'>{{ $message }} </p>
                            @enderror
                            <div class="col-sm-auto col-4">
                                <form method="POST" action="{{ route('user.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="avatar avatar-xl position-relative preview">
                                        @if (auth()->user()->picture)
                                        <img src="/storage/{{(auth()->user()->picture)}}" alt="avatar"
                                            class="w-100 rounded-circle shadow-sm" id="file-ip-1-preview">
                                        @else
                                        <img src="{{ asset('assets') }}/img/default-avatar.png" alt="avatar"
                                            class="w-100 rounded-circle shadow-sm" id="file-ip-1-preview">
                                        @endif
                                        <label for="file-input"
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" aria-hidden="true" data-bs-original-title="Edit Image"
                                                aria-label="Edit Image"></i><span class="sr-only">Edit Image</span>
                                        </label>
                                        <input type="file" name='picture' id="file-input"
                                            onchange="showPreview(event);">
                                    </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        {{ auth()->user()->name }}
                                    </h5>
                                    <p class="mb-0 font-weight-normal text-sm">
                                        CEO / Co-Founder
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                <label class="form-check-label mb-0">
                                    <small id="profileVisibility">
                                        Switch to invisible
                                    </small>
                                </label>
                                <div class="form-check form-switch ms-2 my-auto">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23"
                                        checked onchange="visible()">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-success alert-dismissible text-white mt-3" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (Session::has('demo'))
                    <div class="row">
                        <div class="alert alert-danger alert-dismissible text-white mt-3" role="alert">
                            <span class="text-sm">{{ Session::get('demo') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif
                    <!-- Card Basic Info -->
                    <div class="card mt-4" id="basic-info">
                        <div class="card-header">
                            <h5>Basic Info</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6">

                                    <div class="input-group input-group-static">
                                        <label>Name</label>
                                        <input type="text" name='name' class="form-control" placeholder="Alec"
                                            value='{{ old('name', auth()->user()->name) }}'>
                                    </div>
                                    @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-6">

                                    <div class="input-group input-group-static">
                                        <label>Email</label>
                                        <input type="email" name='email' class="form-control"
                                            placeholder="example@email.com"
                                            value="{{ old('email', auth()->user()->email)}}">
                                    </div>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">

                                    <div class="input-group input-group-static">
                                        <label>Your location</label>
                                        <input type="text" name='location' class="form-control" placeholder="Sydney, A"
                                            value="{{ old('location', auth()->user()->location) }}">
                                    </div>
                                    @error('location')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-6">

                                    <div class="input-group input-group-static">
                                        <label>Phone Number</label>
                                        <input type="number" name='phone' class="form-control"
                                            placeholder="+40 735 631 620"
                                            value="{{ old('phone', auth()->user()->phone) }}">
                                    </div>
                                    @error('phone')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type='submit' class="btn bg-gradient-dark btn-sm mt-6 mb-0">Save
                                        Changes</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- Card Change Password -->
                    <div class="card mt-4" id="password">
                        <div class="card-header">
                            <h5>Change Password</h5>
                            @if (session('error'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('error') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            @elseif (session('success'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('success') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="card-body pt-0">
                            <form method="POST" action="{{ route('password.change') }}">
                                @csrf

                                <div class="input-group input-group-outline">
                                    <label class="form-label">Current password</label>
                                    <input type="password" name='old_password' class="form-control">
                                </div>
                                @error('old_password')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror

                                <div class="input-group input-group-outline mt-4">
                                    <label class="form-label">New password</label>
                                    <input type="password" name='password' class="form-control">
                                </div>
                                @error('password')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                <div class="input-group input-group-outline mt-4">
                                    <label class="form-label">Confirm New password</label>
                                    <input type="password" name='password_confirmation' class="form-control">
                                </div>
                                <button class="btn bg-gradient-dark btn-sm mt-6 mb-0">Update password</button>
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
    <!-- Kanban scripts -->
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
