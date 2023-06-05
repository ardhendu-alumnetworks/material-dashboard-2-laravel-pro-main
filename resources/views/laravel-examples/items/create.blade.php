<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="item-management" activeSubitem="">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Item Management"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Add Item</h5>
                            <p>Create new item</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('items') }}">Back to list</a>
                        </div>
                        <div class="card-body">
                            <form method='POST' action='{{ route('add.item') }}'
                                class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                @csrf

                                <div class="avatar avatar-xxl position-relative">
                                    <div class="position-relative preview">
                                        <label for="file-input"
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" aria-hidden="true" data-bs-original-title="Select Image"
                                                aria-label="Select Image"></i><span class="sr-only">Select Image</span>
                                        </label>
                                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <img src="{{ asset('assets') }}/img/placeholder.jpg" alt="avatar"
                                                id="file-ip-1-preview"></span>

                                        <input type="file" name='picture' id="file-input" onchange="showPreview(event);"
                                            >
                                            @error('picture')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                    </div>

                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for="exampleInputname">Name</label>
                                    <input type="name" name='name' class="form-control border border-2 p-2"
                                        id="exampleInputname" placeholder="Enter name" value={{ old('name') }}>
                                        @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for='category_id'>Category</label>
                                    <select class="form-select border border-2 p-2" name="category_id"
                                        data-style="select-with-transition" title="" data-size="100" id="category_id">
                                        <option value="">-</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 mt-2 col-md-6">
                                    <label for="description">Description</label>
                                    <textarea class="editor-content" id="editor" name="description">
                                        {!! old('description') !!}
                                       </textarea>
                                       @error('description')
                                       <p class='text-danger inputerror'>{{ $message }} </p>
                                       @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label>Tags</label>
                                    <select class="col-12 border border-5" name="tags[]"
                                        data-style="select-with-transition" multiple title="-" data-size="7"
                                        id="choices-tags">
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ in_array($tag->id, old('tags') ?: []) ? 'selected' : '' }}>
                                            {{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Item Status</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value='published'
                                            id="published" {{ old('status') == 'published' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="published">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="draft"
                                            value='draft' {{ old('status') == 'draft' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="draft">
                                            Draft
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="archive"
                                            value='archive' {{ old('status') == 'archive' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="archive">
                                            Archive
                                        </label>
                                    </div>
                                    @error('status')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-check form-switch col-12 col-md-6 mt-3">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Show on
                                        homepage</label>
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                        name="homepage" value='1' {{ old('homepage') == 1 ? ' checked' : '' }}>
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label> Item Options</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name='options[]'
                                            id="flexCheckFirst"
                                            {{ old('options') && in_array( '1', old('options')) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckFirst">
                                            First
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" name='options[]'
                                            id="flexCheckSecond"
                                            {{ old('options') && in_array( '2', old('options')) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckSecond">
                                            Second
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" name='options[]'
                                            id="flexCheckThird"
                                            {{ old('options') && in_array( '3', old('options')) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckThird">
                                            Third
                                        </label>
                                    </div>
                                    @error('options')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">

                                    <label for="exampleDate">Date</label>
                                    <input type="date" name="date" class="datetimepicker form-control border border-2 p-2"
                                        id="exampleDate" value="{{ old('date') }}">
                                        @error('date')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                                <button type="submit" class="btn btn-dark mt-3">Add Item</button>
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
    <script src="{{ asset('assets') }}/js/plugins/choices.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
    <script>
        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            }); // flatpickr
        }

    </script>
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

    <script>
        if (document.getElementById('choices-tags')) {
            var tags = document.getElementById('choices-tags');
            const example = new Choices(tags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 7,
                removeItemButton: true,
                addItems: true
            });
        }

    </script>
    <script>
        $(document).ready(function () {
            $(".article-form").on("submit", function (e) {
                let quillEditor = new Quill('.editor-content');
                let value = $('.editor-content > div.ql-editor').html();
                if (quillEditor.getLength() > 1) {
                    $(this).append("<textarea name='description' style='display:none'>" + value +
                        "</textarea>");
                }
            });
        });

        $(document).ready(function () {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {})
                .catch(error => {});

        });

    </script>
    @endpush
</x-page-template>
