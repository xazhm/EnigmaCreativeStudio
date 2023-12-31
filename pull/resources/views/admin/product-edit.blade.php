@extends('/admin.layouts.mainlayouts')
@section('title', 'Edit Design')
@section('content')
    <link rel="icon" type="image/x-icon" href="/assets/src//assets/img/favicon.ico" />
    <link
    href="/assets/layouts/vertical-dark-menu/css/light/loader.css"
    rel="stylesheet"
    type="text/css"
    />
    <link
    href="/assets/layouts/vertical-dark-menu/css/dark/loader.css"
    rel="stylesheet"
    type="text/css"
    />
    <script src="/assets/layouts/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:400,600,700"
    rel="stylesheet"
    />
    <link
    href="/assets/src/bootstrap/css/bootstrap.min.css"
    rel="stylesheet"
    type="text/css"
    />
    <link
    href="/assets/layouts/vertical-dark-menu/css/light/plugins.css"
    rel="stylesheet"
    type="text/css"
    />
    <link
    href="/assets/layouts/vertical-dark-menu/css/dark/plugins.css"
    rel="stylesheet"
    type="text/css"
    />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link
    rel="stylesheet"
    href="/assets/src/plugins/src/filepond/filepond.min.css"
    />
    <link
    rel="stylesheet"
    href="/assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src/plugins/src/tagify/tagify.css"
    />

    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src//assets/css/light/forms/switches.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src/plugins/css/light/editors/quill/quill.snow.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src/plugins/css/light/tagify/custom-tagify.css"
    />
    <link
    href="/assets/src/plugins/css/light/filepond/custom-filepond.css"
    rel="stylesheet"
    type="text/css"
    />

    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src//assets/css/dark/forms/switches.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src/plugins/css/dark/editors/quill/quill.snow.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="/assets/src/plugins/css/dark/tagify/custom-tagify.css"
    />
    <link
    href="/assets/src/plugins/css/dark/filepond/custom-filepond.css"
    rel="stylesheet"
    type="text/css"
    />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link
    rel="stylesheet"
    href="/assets/src//assets/css/light/apps/ecommerce-create.css"
    />
    <link
    rel="stylesheet"
    href="/assets/src//assets/css/dark/apps/ecommerce-create.css"
    />
    <form action="/admin.product-edit/{{ $designs->slug }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row mb-4 layout-spacing layout-top-spacing">
            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="widget-content widget-content-area ecommerce-create-section">
                    {{-- input name design --}}
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label>Name</label>
                            <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            placeholder="Product Name"
                            value="{{ $designs->name }}"
                            />
                        </div>
                    </div>

                    {{-- input desc design --}}
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label>Description</label>
                            <input
                            type="text"
                            name="description"
                            id="description"
                            class="form-control"
                            placeholder="Design Description"
                            value="{{ $designs->description }}"
                            />
                        </div>
                    </div>
                    {{-- input gambar design --}}
                    <div class="col-md-8">
                        <label for="product-images">Upload Images</label>
                        <div class="multiple-file-upload">
                            <input
                                type="file"
                                class="filepond file-upload form-control"
                                name="image"
                                id="image"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area ecommerce-create-section">
                            <div class="row">
                            {{-- input harga design --}}
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="price">Price</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                    value="{{ $designs->price }}"
                                    placeholder="In Rupiah"
                                />
                            </div>
                            {{-- input category design --}}
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="categories">Category</label>
                                <select class="form-select" id="categories" name="categories">
                                    <option value="{{ $designs->id }}" disabled>Current: {{ $designs->categories->name }}</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            {{-- button add --}}
                            <div class="col-sm-12 mt-3 mb-4">
                                <button type="submit" class="btn btn-success w-100">
                                    Edit Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">
                Copyright © <span class="dynamic-year">2023</span>
                <a target="_blank" href="/index">
                    ENIGMA
                </a>, All rights reserved.
            </p>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="/assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="/assets/layouts/vertical-dark-menu/app.js"></script>
    <script src="/assets/src/plugins/src/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/assets/src/plugins/src/editors/quill/quill.js"></script>
    <script src="/assets/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="/assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script src="/assets/src/plugins/src/tagify/tagify.min.js"></script>

    <script src="/assets/src//assets/js/apps/ecommerce-create.js"></script>

@endsection
