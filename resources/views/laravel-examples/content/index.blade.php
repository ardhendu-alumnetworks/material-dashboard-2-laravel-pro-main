<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="content-management" activeSubitem="">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Content Management"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Content</h5>
                        </div>
                        <div class="card-body">
        <form method="POST" action="{{ route('contents') }}">
            @csrf

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control tinymce-editor" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
                    </div>
                </div>
            </div>
        </div>           
    </main>
    <script src="https://cdn.tiny.cloud/1/9379lda8937aqo6bgnrlufp3e3h871q3w6tylicr9lv8pcmy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </textarea>
    <script>
            tinymce.init({
                selector: 'textarea.tinymce-editor',
                plugins: 'advlist autolink lists link image paste',
                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                paste_data_images: true,
                paste_as_text: false,
                paste_preprocess: function(plugin, args) {
                    var clipboardData = args.clipboardData;
                    if (clipboardData && clipboardData.items && clipboardData.items.length) {
                        var images = [];
                        for (var i = 0; i < clipboardData.items.length; i++) {
                            var item = clipboardData.items[i];
                            if (item.type.indexOf('image') !== -1) {
                                var file = item.getAsFile();
                                images.push(file);
                            }
                        }
                        if (images.length > 0) {
                            args.preventDefault();
                            uploadImages(images);
                        }
                    }
                }
            });

            function uploadImages(images) {
                for (var i = 0; i < images.length; i++) {
                    var image = images[i];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imgHtml = '<img src="' + e.target.result + '" style="display: block; margin: 0 auto; text-align: center;">';
                        tinymce.activeEditor.insertContent(imgHtml);
                    };
                    reader.readAsDataURL(image);
                }
            }
        </script>   
</x-page-template>