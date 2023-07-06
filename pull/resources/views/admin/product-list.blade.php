@extends('admin.layouts.mainlayouts')
@section('title', 'Product List')
@section('content')

    <link rel="icon" type="image/x-icon" href="assets/src/assets/img/favicon.ico" />
    <link
      href="assets/layouts/vertical-dark-menu/css/light/loader.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/dark/loader.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="assets/layouts/vertical-dark-menu/loader.js"></script>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:400,600,700"
      rel="stylesheet"
    />
    <link
      href="assets/src/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/light/plugins.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/dark/plugins.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/src/table/datatable/datatables.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/css/light/table/datatable/dt-global_style.css"
    />
    <link
      href="assets/src/assets/css/light/apps/invoice-list.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/css/dark/table/datatable/dt-global_style.css"
    />
    <link
      href="assets/src/assets/css/dark/apps/invoice-list.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--  END CUSTOM STYLE FILE  -->

    <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table
            id="invoice-list"
            class="table dt-table-hover"
            style="width: 100%"
            >
            <thead>
                <tr>
                <th class="checkbox-column">Record no.</th>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designs as $item)
                <tr>
                <td class="checkbox-column">
                    {{ $loop->iteration }}
                </td>
                <td>
                    <a href="/admin.app-invoice-preview">
                        <span class="inv-number">#{{ $item->id }}</span>
                    </a>
                </td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame me-2 rounded-circle">
                            <img
                            alt="avatar"
                            class="img-fluid rounded-circle"
                            src="{{ asset('/storage/photo/'.$item->photo) }}"
                            />
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex">
                        <p class="align-self-center mb-0 user-name">
                            {{ $item->name }}
                        </p>
                    </div>
                </td>
                <td>
                    <span class="inv-email">{{ $item->description }}</span>
                </td>
                <td>
                    <span class="inv-email">{{ $item->categories->name }}</span>
                </td>
                <td>
                    <span class="inv-amount">Rp. {{ $item->price }}</span>
                </td>
                <td>
                    <a
                    class="badge badge-light-primary text-start me-2 action-edit"
                    href="/admin.product-edit/{{$item->slug}}"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-edit-3"
                    >
                        <path d="M12 20h9"></path>
                        <path
                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                        ></path></svg>
                    </a>
                    <a
                    class="badge badge-light-danger text-start action-delete"
                    href="#"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-trash"
                    >
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path
                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                        ></path></svg>
                    </a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper mt-0">
          <div class="footer-section f-section-1">
            <p class="">
              Copyright © <span class="dynamic-year">2023</span>
              <a target="_blank" href="/index">
                ENIGMA
              </a>, All rights reserved.
            </p>
          </div>
        </div>
        <!--  END FOOTER  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/global/vendors.min.js"></script>
    <script src="assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="assets/layouts/vertical-dark-menu/app.js"></script>
    <script src="assets/src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/table/datatable/datatables.js"></script>
    <script src="assets/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assets/src/assets/js/apps/invoice-list.js"></script>

@endsection
