<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <link rel="stylesheet" href="//unpkg.com/grapesjs/dist/css/grapes.min.css">
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="content-management" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Content Management">
            <!-- Add the "Open Blocks" icon inside the navbar -->
            <x-slot name="navbarIcons">
                <div class="navbar-nav">
                    <a class="nav-link" href="#" title="Open Blocks" onclick="editor.runCommand('open-blocks')">
                        <i class="fa fa-th-large"></i>
                    </a>
                </div>
            </x-slot>
        </x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-9">
                    <div id="grapesjs-container"></div>
                </div>
                <div class="col-lg-3">
                    <div id="blocks-container"></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <!-- <div class="card-header">
                            <h5 class="mb-0">Content</h5>
                        </div> -->
                        <div class="card-body">
                        <form id="save-form" action="{{ route('content.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="grapesjsData" id="grapesjsDataInput">
                            <input type="hidden" name="grapesjsCss" id="grapesjsCssInput">
                            <input type="hidden" name="grapesjsJs" id="grapesjsJsInput">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Additional Scripts -->
    <script src="//unpkg.com/grapesjs"></script>
    <script src="//unpkg.com/grapesjs-blocks-basic"></script>
    <script src="//unpkg.com/grapesjs-preset-webpage"></script>
    <script src="//unpkg.com/grapesjs-preset-newsletter"></script>
    <script src="//unpkg.com/grapesjs-preset-email"></script>

    <!-- Additional Stylesheets -->
    <link rel="stylesheet" href="//unpkg.com/grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="//unpkg.com/grapesjs-preset-newsletter/dist/grapesjs-preset-newsletter.min.css">
    <link rel="stylesheet" href="//unpkg.com/grapesjs-preset-email/dist/grapesjs-preset-email.min.css">

    <style>
        #grapesjs-container {
            height: calc(100vh - 100px);
        }
        #blocks-container {
            height: calc(100vh - 100px);
            border-left: 1px solid #ddd;
            padding: 15px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editor = grapesjs.init({
                container: '#grapesjs-container',
                storageManager: {
                    type: 'local',
                    autoload: true,
                    autosave: true,
                    stepsBeforeSave: 1
                },
                plugins: ['gjs-blocks-basic', 'grapesjs-preset-webpage', 'grapesjs-preset-newsletter', 'grapesjs-preset-email'],
                blockManager: {
                    appendTo: '#blocks-container',
                },
                panels: {
                    defaults: [
                        {
                            id: 'panel-switcher',
                            el: '.panel__switcher',
                            buttons: [
                                {
                                    id: 'show-style',
                                    active: true,
                                    label: 'Styles',
                                    command: 'show-styles',
                                    className: 'fa fa-cog',
                                },
                                {
                                    id: 'show-layers',
                                    active: true,
                                    label: 'Layers',
                                    command: 'show-layers',
                                    className: 'fa fa-bars',
                                },
                                {
                                    id: 'show-traits',
                                    active: true,
                                    label: 'Traits',
                                    command: 'show-traits',
                                    className: 'fa fa-cog',
                                },
                            ],
                        },
                    ],
                },
                canvas: {
                    styles: [
                        'https://unpkg.com/grapesjs/dist/css/grapes.min.css',
                        'https://unpkg.com/grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.css',
                        'https://unpkg.com/grapesjs-preset-newsletter/dist/grapesjs-preset-newsletter.min.css',
                        'https://unpkg.com/grapesjs-preset-email/dist/grapesjs-preset-email.min.css',
                    ],
                },
                assetManager: {
                    assets: [
                        {
                            type: 'image',
                            src: 'https://via.placeholder.com/350x250',
                            height: 350,
                            width: 250,
                        },
                    ],
                },
                storageManager: {
                    id: 'gjs-', // Prefix identifier that will be used for storing data in the local storage
                    autosave: true, // Store data automatically
                    autoload: true, // Autoload stored data on init
                    stepsBeforeSave: 1, // Steps before saving the whole data
                },
            });
            
            // Save the GrapesJS data, CSS, and JS on form submission
            const saveForm = document.getElementById('save-form');
            saveForm.addEventListener('submit', function() {
                const grapesjsData = editor.getHtml();
                const grapesjsCss = editor.getCss();
                const grapesjsJs = editor.getJs();

                document.getElementById('grapesjsDataInput').value = JSON.stringify(grapesjsData);
                document.getElementById('grapesjsCssInput').value = grapesjsCss;
                document.getElementById('grapesjsJsInput').value = grapesjsJs;
            });
        });
    </script>
</x-page-template>
        