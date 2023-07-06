@extends('admin.layouts.mainlayouts')
@section('title', 'Order List')
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
                <th>Order Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Design</th>
                <th>Status</th>
                <th>Price</th>
                <th>Date</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                <tr>
                <td class="checkbox-column">{{ $loop->iteration }}</td>
                <td>
                    <a href="./app-invoice-preview.html">
                        <span class="inv-number">#{{ $item->id }}</span>
                    </a>
                </td>
                <td>
                    <div class="d-flex">
                        <p class="align-self-center mb-0 user-name">
                            {{ $item->users->name }}
                        </p>
                    </div>
                </td>
                <td>
                    <span class="inv-email">
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
                        class="feather feather-mail"
                        >
                        <path
                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                        ></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                            {{ $item->users->email }}
                    </span>
                </td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame me-2 rounded-circle">
                            <img
                            alt="avatar"
                            class="img-fluid rounded-circle"
                            src="{{ asset('/storage/photo/'.$item->designs->photo) }}"
                            />
                        </div>
                        <p class="align-self-center mb-0 user-name">
                            {{ $item->designs->name }}
                        </p>
                        </div>
                </td>
                <td>
                    @if ($item->status == 'paid')
                    <span class="badge badge-light-success inv-status">
                        Paid
                    </span>
                    @elseif ($item->status == 'pending')
                    <span class="badge badge-light-warning inv-status">
                        Pending
                    </span>
                    @else
                    <span class="badge badge-light-danger inv-status">
                        Rejected
                    </span>
                    @endif
                </td>
                <td><span class="inv-amount">Rp. {{ $item->designs->price }} </span></td>
                <td>
                    <span class="inv-date"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-calendar"
                    >
                        <rect
                        x="3"
                        y="4"
                        width="18"
                        height="18"
                        rx="2"
                        ry="2"
                        ></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                        {{ $item->order_date }}
                    </span>
                </td>
                <td>
                    {{-- views --}}
                    <a class="badge badge-light-primary text-start me-2 action-view" href="/admin.struk-preview/{{ $item->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-money-bill">
                            <path d="M20 6H4C2.89543 6 2 6.89543 2 8V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V8C22 6.89543 21.1046 6 20 6ZM8 16H4V14H8V16ZM14 16H10V14H14V16ZM20 16H16V14H20V16ZM8 12H4V10H8V12ZM14 12H10V10H14V12ZM20 12H16V10H20V12ZM8 8H4V7H8V8ZM14 8H10V7H14V8ZM20 8H16V7H20V8Z" />
                          </svg>
                    </a>

                    {{-- approve --}}
                    <a
                    class="badge badge-light-success text-start me-2 action-edit"
                    href="{{route('approve', $item->id)}}"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M9 12l2 2 4-4" />
                      </svg>
                    </a>

                    {{-- reject --}}
                    <a
                    class="badge badge-light-danger text-start action-delete"
                    href="{{route('reject', $item->id)}}"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="8" y1="8" x2="16" y2="16" />
                        <line x1="8" y1="16" x2="16" y2="8" />
                      </svg>
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
    <script src="assets/src/assets/js/apps/invoice-list-2.js"></script>

@endsection
