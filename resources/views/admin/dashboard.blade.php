@extends('admin.layouts.mainlayouts')
@section('title', 'Dashboard')
@section('content')
    <div class="row layout-top-spacing">
        <div
        class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing"
        >
        <div class="widget widget-chart-one">
            <div class="widget-heading">
            <h5 class="">Revenue</h5>
            <div class="task-action">
                <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    id="renvenue"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
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
                    class="feather feather-more-horizontal"
                    >
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </a>
                <div
                    class="dropdown-menu left"
                    aria-labelledby="renvenue"
                    style="will-change: transform"
                >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >Weekly</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >Monthly</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >Yearly</a
                    >
                </div>
                </div>
            </div>
            </div>

            <div class="widget-content">
            <div id="revenueMonthly"></div>
            </div>
        </div>
        </div>

        <div
        class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing"
        >
        <div class="widget widget-three">
            <div class="widget-heading">
            <h5 class="">Summary</h5>

            <div class="task-action">
                <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    id="summary"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
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
                    class="feather feather-more-horizontal"
                    >
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </a>

                <div
                    class="dropdown-menu left"
                    aria-labelledby="summary"
                    style="will-change: transform"
                >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >View Report</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >Edit Report</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    >Mark as Done</a
                    >
                </div>
                </div>
            </div>
            </div>
            <div class="widget-content">
            <div class="order-summary">
                <div class="summary-list">
                <div class="w-icon">
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
                    class="feather feather-shopping-bag"
                    >
                    <path
                        d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"
                    ></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </div>
                <div class="w-summary-details">
                    <div class="w-summary-info">
                    <h6>Income</h6>
                    <p class="summary-count">$92,600</p>
                    </div>

                    <div class="w-summary-stats">
                    <div class="progress">
                        <div
                        class="progress-bar bg-gradient-secondary"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="90"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        ></div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="summary-list">
                <div class="w-icon">
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
                    class="feather feather-tag"
                    >
                    <path
                        d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"
                    ></path>
                    <line x1="7" y1="7" x2="7" y2="7"></line>
                    </svg>
                </div>
                <div class="w-summary-details">
                    <div class="w-summary-info">
                    <h6>Profit</h6>
                    <p class="summary-count">$37,515</p>
                    </div>

                    <div class="w-summary-stats">
                    <div class="progress">
                        <div
                        class="progress-bar bg-gradient-success"
                        role="progressbar"
                        style="width: 65%"
                        aria-valuenow="65"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        ></div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="summary-list">
                <div class="w-icon">
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
                    class="feather feather-credit-card"
                    >
                    <rect
                        x="1"
                        y="4"
                        width="22"
                        height="16"
                        rx="2"
                        ry="2"
                    ></rect>
                    <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                </div>
                <div class="w-summary-details">
                    <div class="w-summary-info">
                    <h6>Expenses</h6>
                    <p class="summary-count">$55,085</p>
                    </div>

                    <div class="w-summary-stats">
                    <div class="progress">
                        <div
                        class="progress-bar bg-gradient-warning"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        ></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div
        class="col-xl col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing"
        >
        <div class="widget widget-table-two">
            <div class="widget-heading">
            <h5 class="">Recent Orders</h5>
            </div>

            <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th><div class="th-content">Customer</div></th>
                    <th><div class="th-content">Product</div></th>
                    <th><div class="th-content">Invoice</div></th>
                    <th>
                        <div class="th-content th-heading">Price</div>
                    </th>
                    <th><div class="th-content">Status</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="td-content customer-name">
                        <img
                            src="assets/src/assets/img/profile-13.jpeg"
                            alt="avatar"
                        /><span>Luke Ivory</span>
                        </div>
                    </td>
                    <td>
                        <div
                        class="td-content product-brand text-primary"
                        >
                        Headphone
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-invoice">
                        #46894
                        </div>
                    </td>
                    <td>
                        <div class="td-content pricing">
                        <span class="">$56.07</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content">
                        <span class="badge badge-success">Paid</span>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td>
                        <div class="td-content customer-name">
                        <img
                            src="assets/src/assets/img/profile-7.jpeg"
                            alt="avatar"
                        /><span>Andy King</span>
                        </div>
                    </td>
                    <td>
                        <div
                        class="td-content product-brand text-warning"
                        >
                        Nike Sport
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-invoice">
                        #76894
                        </div>
                    </td>
                    <td>
                        <div class="td-content pricing">
                        <span class="">$88.00</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content">
                        <span class="badge badge-primary">Shipped</span>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="td-content customer-name">
                        <img
                            src="assets/src/assets/img/profile-10.jpeg"
                            alt="avatar"
                        /><span>Laurie Fox</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-brand text-danger">
                        Sunglasses
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-invoice">
                        #66894
                        </div>
                    </td>
                    <td>
                        <div class="td-content pricing">
                        <span class="">$126.04</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content">
                        <span class="badge badge-success">Paid</span>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="td-content customer-name">
                        <img
                            src="assets/src/assets/img/profile-5.jpeg"
                            alt="avatar"
                        /><span>Ryan Collins</span>
                        </div>
                    </td>
                    <td>
                        <div
                        class="td-content product-brand text-warning"
                        >
                        Sport
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-invoice">
                        #89891
                        </div>
                    </td>
                    <td>
                        <div class="td-content pricing">
                        <span class="">$108.09</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content">
                        <span class="badge badge-primary">Shipped</span>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="td-content customer-name">
                        <img
                            src="assets/src/assets/img/profile-4.jpeg"
                            alt="avatar"
                        /><span>Irene Collins</span>
                        </div>
                    </td>
                    <td>
                        <div
                        class="td-content product-brand text-primary"
                        >
                        Speakers
                        </div>
                    </td>
                    <td>
                        <div class="td-content product-invoice">
                        #75844
                        </div>
                    </td>
                    <td>
                        <div class="td-content pricing">
                        <span class="">$84.00</span>
                        </div>
                    </td>
                    <td>
                        <div class="td-content">
                        <span class="badge badge-danger">Pending</span>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>

        <div
        class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing"
        >
        <div class="widget widget-activity-four">
            <div class="widget-heading">
            <h5 class="">Recent Activities</h5>
            </div>

            <div class="widget-content">
            <div class="mt-container-ra mx-auto">
                <div class="timeline-line">
                <div class="item-timeline timeline-primary">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p><span>Updated</span> Server Logs</p>
                    <span class="badge">Pending</span>
                    <p class="t-time">Just Now</p>
                    </div>
                </div>

                <div class="item-timeline timeline-success">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Send Mail to
                        <a href="javascript:void(0);">HR</a> and
                        <a href="javascript:void(0);">Admin</a>
                    </p>
                    <span class="badge">Completed</span>
                    <p class="t-time">2 min ago</p>
                    </div>
                </div>

                <div class="item-timeline timeline-danger">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Backup <span>Files EOD</span></p>
                    <span class="badge">Pending</span>
                    <p class="t-time">14:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-dark">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Collect documents from
                        <a href="javascript:void(0);">Sara</a>
                    </p>
                    <span class="badge">Completed</span>
                    <p class="t-time">16:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-warning">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Conference call with
                        <a href="javascript:void(0);">Marketing Manager</a
                        >.
                    </p>
                    <span class="badge">In progress</span>
                    <p class="t-time">17:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-secondary">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Rebooted Server</p>
                    <span class="badge">Completed</span>
                    <p class="t-time">17:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-warning">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Send contract details to Freelancer</p>
                    <span class="badge">Pending</span>
                    <p class="t-time">18:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-dark">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Kelly want to increase the time of the project.
                    </p>
                    <span class="badge">In Progress</span>
                    <p class="t-time">19:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-success">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Server down for maintanence</p>
                    <span class="badge">Completed</span>
                    <p class="t-time">19:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-secondary">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Malicious link detected</p>
                    <span class="badge">Block</span>
                    <p class="t-time">20:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-warning">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Rebooted Server</p>
                    <span class="badge">Completed</span>
                    <p class="t-time">23:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-primary">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p><span>Updated</span> Server Logs</p>
                    <span class="badge">Pending</span>
                    <p class="t-time">Just Now</p>
                    </div>
                </div>

                <div class="item-timeline timeline-success">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Send Mail to
                        <a href="javascript:void(0);">HR</a> and
                        <a href="javascript:void(0);">Admin</a>
                    </p>
                    <span class="badge">Completed</span>
                    <p class="t-time">2 min ago</p>
                    </div>
                </div>

                <div class="item-timeline timeline-danger">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>Backup <span>Files EOD</span></p>
                    <span class="badge">Pending</span>
                    <p class="t-time">14:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-dark">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Collect documents from
                        <a href="javascript:void(0);">Sara</a>
                    </p>
                    <span class="badge">Completed</span>
                    <p class="t-time">16:00</p>
                    </div>
                </div>

                <div class="item-timeline timeline-warning">
                    <div
                    class="t-dot"
                    data-original-title=""
                    title=""
                    ></div>
                    <div class="t-text">
                    <p>
                        Conference call with
                        <a href="javascript:void(0);">Marketing Manager</a
                        >.
                    </p>
                    <span class="badge">In progress</span>
                    <p class="t-time">17:00</p>
                    </div>
                </div>
                </div>
            </div>

            <div class="tm-action-btn">
                <button class="btn">
                <span>View All</span>
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
                    class="feather feather-arrow-right"
                >
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
