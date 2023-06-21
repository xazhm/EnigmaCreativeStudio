<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />
    <title>
      Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template
    </title>
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

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link
      href="assets/src/plugins/src/apex/apexcharts.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/assets/css/light/components/list-group.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/assets/css/light/dashboard/dash_2.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/src/assets/css/dark/components/list-group.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/assets/css/dark/dashboard/dash_2.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  </head>
  <body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
      <div class="loader">
        <div class="loader-content">
          <div class="spinner-grow align-self-center"></div>
        </div>
      </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
      <header class="header navbar navbar-expand-sm expand-header">
        <ul class="navbar-item theme-brand flex-row text-center">
          <li class="nav-item theme-text">
            <a href="/admin.dashboard" class="nav-link"> E N I G M A </a>
          </li>
        </ul>

        <div class="search-animated toggle-search">
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
            class="feather feather-search"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <form
            class="form-inline search-full form-inline search"
            role="search"
          >
            <div class="search-bar">
              <input
                type="text"
                class="form-control search-form-control ml-lg-auto"
                placeholder="Search..."
              />
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
                class="feather feather-x search-close"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </div>
          </form>
          <span class="badge badge-secondary">Ctrl + /</span>
        </div>

        <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">
          <li class="nav-item dropdown language-dropdown">
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle"
              id="language-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="assets/src/assets/img/1x1/us.svg"
                class="flag-width"
                alt="flag"
              />
            </a>
            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="language-dropdown"
            >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/us.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;English</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/tr.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Turkish</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/br.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Portuguese</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/in.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Hindi</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/de.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;German</span></a
              >
            </div>
          </li>

          <li class="nav-item theme-toggle-item">
            <a href="javascript:void(0);" class="nav-link theme-toggle">
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
                class="feather feather-moon dark-mode"
              >
                <path
                  d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
                ></path>
              </svg>
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
                class="feather feather-sun light-mode"
              >
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
              </svg>
            </a>
          </li>

          <li class="nav-item dropdown notification-dropdown">
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle"
              id="notificationDropdown"
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
                class="feather feather-bell"
              >
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg
              ><span class="badge badge-success"></span>
            </a>

            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="notificationDropdown"
            >
              <div class="drodpown-title message">
                <h6 class="d-flex justify-content-between">
                  <span class="align-self-center">Messages</span>
                  <span class="badge badge-primary">9 Unread</span>
                </h6>
              </div>
              <div class="notification-scroll">
                <div class="dropdown-item">
                  <div class="media server-log">
                    <img
                      src="assets/src/assets/img/profile-16.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Kara Young</h6>
                        <p class="">1 hr ago</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media">
                    <img
                      src="assets/src/assets/img/profile-15.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Daisy Anderson</h6>
                        <p class="">8 hrs ago</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media file-upload">
                    <img
                      src="assets/src/assets/img/profile-21.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Oscar Garner</h6>
                        <p class="">14 hrs ago</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="drodpown-title notification mt-2">
                  <h6 class="d-flex justify-content-between">
                    <span class="align-self-center">Notifications</span>
                    <span class="badge badge-secondary">16 New</span>
                  </h6>
                </div>

                <div class="dropdown-item">
                  <div class="media server-log">
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
                      class="feather feather-server"
                    >
                      <rect
                        x="2"
                        y="2"
                        width="20"
                        height="8"
                        rx="2"
                        ry="2"
                      ></rect>
                      <rect
                        x="2"
                        y="14"
                        width="20"
                        height="8"
                        rx="2"
                        ry="2"
                      ></rect>
                      <line x1="6" y1="6" x2="6" y2="6"></line>
                      <line x1="6" y1="18" x2="6" y2="18"></line>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Server Rebooted</h6>
                        <p class="">45 min ago</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media file-upload">
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
                      class="feather feather-file-text"
                    >
                      <path
                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                      ></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                      <line x1="16" y1="13" x2="8" y2="13"></line>
                      <line x1="16" y1="17" x2="8" y2="17"></line>
                      <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Kelly Portfolio.pdf</h6>
                        <p class="">670 kb</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media">
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
                      class="feather feather-heart"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                      ></path>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Licence Expiring Soon</h6>
                        <p class="">8 hrs ago</p>
                      </div>

                      <div class="icon-status">
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
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li
            class="nav-item dropdown user-profile-dropdown order-lg-0 order-1"
          >
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle user"
              id="userProfileDropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="avatar-container">
                <div class="avatar avatar-sm avatar-indicators avatar-online">
                  <img
                    alt="avatar"
                    src="assets/src/assets/img/profile-30.png"
                    class="rounded-circle"
                  />
                </div>
              </div>
            </a>

            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="userProfileDropdown"
            >
              <div class="user-profile-section">
                <div class="media mx-auto">
                  <div class="emoji me-2">&#x1F44B;</div>
                  <div class="media-body">
                    <h5>Shaun Park</h5>
                    <p>Project Leader</p>
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <a href="user-profile">
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
                    class="feather feather-user"
                  >
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Profile</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="app-mailbox">
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
                    class="feather feather-inbox"
                  >
                    <polyline
                      points="22 12 16 12 14 15 10 15 8 12 2 12"
                    ></polyline>
                    <path
                      d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"
                    ></path>
                  </svg>
                  <span>Inbox</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="auth-boxed-lockscreen">
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
                    class="feather feather-lock"
                  >
                    <rect
                      x="3"
                      y="11"
                      width="18"
                      height="11"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <span>Lock Screen</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="auth-boxed-signin">
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
                    class="feather feather-log-out"
                  >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  <span>Log Out</span>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
          <div class="navbar-nav theme-brand flex-row text-center">
            <div class="nav-logo">
              <div class="nav-item theme-logo">
                <a href="./admin.dashboard">
                  <img
                    src="assets/src/assets/img/logo.svg"
                    class="navbar-logo"
                    alt="logo"
                  />
                </a>
              </div>
              <div class="nav-item theme-text">
                <a href="./admin.dashboard" class="nav-link"> CORK </a>
              </div>
            </div>
            <div class="nav-item sidebar-toggle">
              <div class="btn-toggle sidebarCollapse">
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
                  class="feather feather-chevrons-left"
                >
                  <polyline points="11 17 6 12 11 7"></polyline>
                  <polyline points="18 17 13 12 18 7"></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="shadow-bottom"></div>
          <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
              <a
                href="#dashboard"
                data-bs-toggle="collapse"
                aria-expanded="true"
                class="dropdown-toggle"
              >
                <div class="">
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
                    class="feather feather-home"
                  >
                    <path
                      d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                    ></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Dashboard</span>
                </div>
                <div>
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
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled show"
                id="dashboard"
                data-bs-parent="#accordionExample"
              >
                <li class="active">
                  <a href="./admin.dashboard"> Sales </a>
                </li>
              </ul>
            </li>

            <li class="menu menu-heading">
              <div class="heading">
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
                  class="feather feather-minus"
                >
                  <line x1="5" y1="12" x2="19" y2="12"></line></svg
                ><span>APPLICATIONS</span>
              </div>
            </li>
            <li class="menu">
              <a
                href="#apps"
                data-bs-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
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
                    class="feather feather-cpu"
                  >
                    <rect
                      x="4"
                      y="4"
                      width="16"
                      height="16"
                      rx="2"
                      ry="2"
                    ></rect>
                    <rect x="9" y="9" width="6" height="6"></rect>
                    <line x1="9" y1="1" x2="9" y2="4"></line>
                    <line x1="15" y1="1" x2="15" y2="4"></line>
                    <line x1="9" y1="20" x2="9" y2="23"></line>
                    <line x1="15" y1="20" x2="15" y2="23"></line>
                    <line x1="20" y1="9" x2="23" y2="9"></line>
                    <line x1="20" y1="14" x2="23" y2="14"></line>
                    <line x1="1" y1="9" x2="4" y2="9"></line>
                    <line x1="1" y1="14" x2="4" y2="14"></line>
                  </svg>
                  <span>Apps</span>
                </div>
                <div>
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
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled"
                id="apps"
                data-bs-parent="#accordionExample"
              >
                <li>
                  <a
                    href="#invoice"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    class="dropdown-toggle collapsed"
                    >Invoice
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
                      class="feather feather-chevron-right"
                    >
                      <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                  </a>
                  <ul
                    class="collapse list-unstyled sub-submenu"
                    id="invoice"
                    data-bs-parent="#apps"
                  >
                    <li>
                      <a href="./app-invoice-list"> List </a>
                    </li>
                    <li>
                      <a href="./app-invoice-preview"> Preview </a>
                    </li>
                    <li>
                      <a href="./app-invoice-add"> Add </a>
                    </li>
                    <li>
                      <a href="./app-invoice-edit"> Edit </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#ecommerce"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    class="dropdown-toggle collapsed"
                    >Ecommerce
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
                      class="feather feather-chevron-right"
                    >
                      <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                  </a>
                  <ul
                    class="collapse list-unstyled sub-submenu"
                    id="ecommerce"
                    data-bs-parent="#apps"
                  >
                    <li>
                      <a href="./app-ecommerce-product-shop"> Shop </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product"> Product </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-list"> List </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-add"> Create </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-edit"> Edit </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="menu">
              <a
                href="./charts-apex"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
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
                    class="feather feather-pie-chart"
                  >
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                  </svg>
                  <span>Charts</span>
                </div>
              </a>
            </li>

            <li class="menu">
              <a
                href="#authentication"
                data-bs-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
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
                    class="feather feather-lock"
                  >
                    <rect
                      x="3"
                      y="11"
                      width="18"
                      height="11"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <span>Authentication</span>
                </div>
                <div>
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
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled"
                id="authentication"
                data-bs-parent="#accordionExample"
              >
                <li>
                  <a href="./auth-boxed-signin" target="_blank">
                    Sign In
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-signup" target="_blank">
                    Sign Up
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-lockscreen" target="_blank">
                    Unlock
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-password-reset" target="_blank">
                    Reset
                  </a>
                </li>
                <li>
                  <a
                    href="./auth-boxed-2-step-verification"
                    target="_blank"
                  >
                    2 Step
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signin" target="_blank">
                    Sign In Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signup" target="_blank">
                    Sign Up Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-lockscreen" target="_blank">
                    Unlock Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-password-reset" target="_blank">
                    Reset Cover
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
        <div class="layout-px-spacing">
          <div class="middle-content container-xxl p-0">
            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
              <div class="breadcrumbs-container" data-page-heading="Sales">
                <header class="header navbar navbar-expand-sm">
                  <a
                    href="javascript:void(0);"
                    class="btn-toggle sidebarCollapse"
                    data-placement="bottom"
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
                      class="feather feather-menu"
                    >
                      <line x1="3" y1="12" x2="21" y2="12"></line>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                  </a>
                  <div class="d-flex breadcrumb-content">
                    <div class="page-header">
                      <div class="page-title"></div>

                      <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                          </li>
                          <li
                            class="breadcrumb-item active"
                            aria-current="page"
                          >
                            Sales
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <ul
                    class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown"
                  >
                    <li class="nav-item more-dropdown">
                      <div class="dropdown custom-dropdown-icon">
                        <a
                          class="dropdown-toggle btn"
                          href="#"
                          role="button"
                          id="customDropdown"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span>Settings</span>
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
                            class="feather feather-chevron-down custom-dropdown-arrow"
                          >
                            <polyline points="6 9 12 15 18 9"></polyline>
                          </svg>
                        </a>

                        <div
                          class="dropdown-menu dropdown-menu-right"
                          aria-labelledby="customDropdown"
                        >
                          <a
                            class="dropdown-item"
                            data-value="Settings"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>'
                            href="javascript:void(0);"
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
                              class="feather feather-settings"
                            >
                              <circle cx="12" cy="12" r="3"></circle>
                              <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                              ></path>
                            </svg>
                            Settings
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Mail"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>'
                            href="javascript:void(0);"
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
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Mail
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Print"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>'
                            href="javascript:void(0);"
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
                              class="feather feather-printer"
                            >
                              <polyline points="6 9 6 2 18 2 18 9"></polyline>
                              <path
                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"
                              ></path>
                              <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            Print
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Download"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>'
                            href="javascript:void(0);"
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
                              class="feather feather-download"
                            >
                              <path
                                d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                              ></path>
                              <polyline points="7 10 12 15 17 10"></polyline>
                              <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Download
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Share"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>'
                            href="javascript:void(0);"
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
                              class="feather feather-share-2"
                            >
                              <circle cx="18" cy="5" r="3"></circle>
                              <circle cx="6" cy="12" r="3"></circle>
                              <circle cx="18" cy="19" r="3"></circle>
                              <line
                                x1="8.59"
                                y1="13.51"
                                x2="15.42"
                                y2="17.49"
                              ></line>
                              <line
                                x1="15.41"
                                y1="6.51"
                                x2="8.59"
                                y2="10.49"
                              ></line>
                            </svg>
                            Share
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </header>
              </div>
            </div>
            <!--  END BREADCRUMBS  -->

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
                          <tr>
                            <td>
                              <div class="td-content customer-name">
                                <img
                                  src="assets/src/assets/img/profile-11.jpeg"
                                  alt="avatar"
                                /><span>Sonia Shaw</span>
                              </div>
                            </td>
                            <td>
                              <div class="td-content product-brand text-danger">
                                Watch
                              </div>
                            </td>
                            <td>
                              <div class="td-content product-invoice">
                                #76844
                              </div>
                            </td>
                            <td>
                              <div class="td-content pricing">
                                <span class="">$110.00</span>
                              </div>
                            </td>
                            <td>
                              <div class="td-content">
                                <span class="badge badge-success">Paid</span>
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
          </div>
        </div>

        <!--  END CONTENT AREA  -->
      </div>
      <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="assets/layouts/vertical-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="assets/src/assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  </body>
</html>
