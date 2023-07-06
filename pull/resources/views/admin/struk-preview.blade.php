@extends('/admin.layouts.mainlayouts')
@section('title', 'Preview')
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
    <div class="row mb-4 layout-spacing layout-top-spacing">
            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="widget-content widget-content-area ecommerce-create-section">
                    <div>
                        <p class="inv-created-date mt-sm-3 mt-3 mb-sm-5 mb-5" style="text-align: center;">
                            <span class="inv-title" style="font-size: 24px">
                                Order Details
                            </span>
                        </p>
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <p class="inv-created-date mt-sm-4 mt-3" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Invoice :
                                    </span>
                                    <span class="inv-date">
                                        #{{ $orders->id }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Order Date :
                                    </span>
                                    <span class="inv-date">
                                        {{ $orders->order_date }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Name :
                                    </span>
                                    <span class="inv-date">
                                        {{ $orders->users->name }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Email :
                                    </span>
                                    <span class="inv-date">
                                        {{ $orders->users->email }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Design :
                                    </span>
                                    <span class="inv-date">
                                        {{ $orders->designs->name }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Description :
                                    </span>
                                    <span class="inv-date">
                                        {{ $orders->designs->description }}
                                    </span>
                                </p>
                                <p class="inv-due-date" style="padding-left: 70px;">
                                    <span class="inv-title">
                                        Price :
                                    </span>
                                    <span class="inv-date">
                                        Rp. {{ $orders->designs->price }}
                                    </span>
                                </p>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-end">
                                <img src="{{ asset('/storage/photo/'.$orders->designs->photo) }}" alt="" style="width: 210px; height: 250px; object-fit: cover;border-radius: 20px; border: 5px solid #1b2e4b; margin-right: 50px">
                            </div>
                        </div>
                        <p class="inv-due-date mt-5" style="text-align: center">
                            <span class="inv-title">
                               Payment Confirm
                            </span>
                        </p>
                        <p class="inv-due-date mb-5" style="text-align: center">
                            <img src="{{ asset('/storage/struk/'.$orders->struk) }}" alt="" style="width: 300px; border-radius: 20px; border: 5px solid #1b2e4b">
                        </p>
                    </div>
                    <div class="struk-image">

                    </div>

                </div>
            </div>

            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area ecommerce-create-section">
                            {{-- button add --}}
                            <div class="col-sm-12 mt-3 mb-4">
                                <a href="{{route('approve', $orders->id)}}" class="btn btn-success w-100 my-3">
                                    Approve
                                </a>
                                <a href="{{route('reject', $orders->id)}}" class="btn btn-danger w-100 my-3">
                                    Reject
                                </a>
                                <a href="mailto:{{ $orders->users->email }}?subject=Enigma%20Design&body=Thank%20you%20for%20trusting%20us%20to%20be%20your%20partner.%0D%0A%0D%0AOpen%20this%20link%20Google%20Drive%20to%20get%20your%20design%0D%0A%5B%20%5D%0D%0A%0D%0AWe%20are%20waiting%20for%20the%20next%20purchase" class="btn btn-primary w-100 my-3">
                                    Send to Email
                                </a>
                                <a href="/admin.invoice-list" class="btn btn-dark w-100 my-3">
                                    Back to Orders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
