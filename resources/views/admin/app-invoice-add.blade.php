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
      Invoice Add | CORK - Multipurpose Bootstrap Dashboard Template
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

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link
      href="assets/src/plugins/src/flatpickr/flatpickr.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="assets/src/plugins/src/filepond/filepond.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css"
    />

    <link
      href="assets/src/plugins/css/light/filepond/custom-filepond.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/plugins/css/light/flatpickr/custom-flatpickr.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/assets/css/light/apps/invoice-add.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/src/plugins/css/dark/filepond/custom-filepond.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/plugins/css/dark/flatpickr/custom-flatpickr.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/src/assets/css/dark/apps/invoice-add.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--  END CUSTOM STYLE FILE  -->
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
          <li class="nav-item theme-logo">
            <a href="index.html">
              <img
                src="assets/src/assets/img/logo2.svg"
                class="navbar-logo"
                alt="logo"
              />
            </a>
          </li>
          <li class="nav-item theme-text">
            <a href="index.html" class="nav-link"> CORK </a>
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
                <a href="user-profile.html">
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
                <a href="app-mailbox.html">
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
                <a href="auth-boxed-lockscreen.html">
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
                <a href="auth-boxed-signin.html">
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
      <div class="cs-overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
          <div class="navbar-nav theme-brand flex-row text-center">
            <div class="nav-logo">
              <div class="nav-item theme-logo">
                <a href="./index.html">
                  <img
                    src="assets/src/assets/img/logo.svg"
                    class="navbar-logo"
                    alt="logo"
                  />
                </a>
              </div>
              <div class="nav-item theme-text">
                <a href="./index.html" class="nav-link"> CORK </a>
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
                  <a href="./index2.html"> Sales </a>
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
                      <a href="./app-invoice-list.html"> List </a>
                    </li>
                    <li>
                      <a href="./app-invoice-preview.html"> Preview </a>
                    </li>
                    <li>
                      <a href="./app-invoice-add.html"> Add </a>
                    </li>
                    <li>
                      <a href="./app-invoice-edit.html"> Edit </a>
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
                      <a href="./app-ecommerce-product-shop.html"> Shop </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product.html"> Product </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-list.html"> List </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-add.html"> Create </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-edit.html"> Edit </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="menu">
              <a
                href="./charts-apex.html"
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
                  <a href="./auth-boxed-signin.html" target="_blank">
                    Sign In
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-signup.html" target="_blank">
                    Sign Up
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-lockscreen.html" target="_blank">
                    Unlock
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-password-reset.html" target="_blank">
                    Reset
                  </a>
                </li>
                <li>
                  <a
                    href="./auth-boxed-2-step-verification.html"
                    target="_blank"
                  >
                    2 Step
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signin.html" target="_blank">
                    Sign In Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signup.html" target="_blank">
                    Sign Up Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-lockscreen.html" target="_blank">
                    Unlock Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-password-reset.html" target="_blank">
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
              <div class="breadcrumbs-container" data-page-heading="Analytics">
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
                          <li class="breadcrumb-item"><a href="#">App</a></li>
                          <li class="breadcrumb-item">
                            <a href="#">Invoice</a>
                          </li>
                          <li
                            class="breadcrumb-item active"
                            aria-current="page"
                          >
                            Add
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

            <div class="row invoice layout-top-spacing layout-spacing">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="doc-container">
                  <div class="row">
                    <div class="col-xl-9">
                      <div class="invoice-content">
                        <div class="invoice-detail-body">
                          <div class="invoice-detail-title">
                            <div class="invoice-logo">
                              <div class="profile-image">
                                <!-- // The classic file input element we'll enhance
                                                            // to a file pond, we moved the configuration
                                                            // properties to JavaScript -->

                                <div class="img-uploader-content">
                                  <input
                                    type="file"
                                    class="filepond"
                                    name="filepond"
                                    accept="image/png, image/jpeg, image/gif"
                                  />
                                </div>
                              </div>
                            </div>

                            <div class="invoice-title">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Invoice Label"
                                value="Invoice Label"
                              />
                            </div>
                          </div>

                          <div class="invoice-detail-header">
                            <div class="row justify-content-between">
                              <div class="col-xl-5 invoice-address-company">
                                <h4>From:-</h4>

                                <div class="invoice-address-company-fields">
                                  <div class="form-group row">
                                    <label
                                      for="company-name"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Name</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="company-name"
                                        placeholder="Business Name"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="company-email"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Email</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="company-email"
                                        placeholder="name@company.com"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="company-address"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Address</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="company-address"
                                        placeholder="XYZ Street"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="company-phone"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Phone</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="company-phone"
                                        placeholder="(123) 456 789"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-5 invoice-address-client">
                                <h4>Bill To:-</h4>

                                <div class="invoice-address-client-fields">
                                  <div class="form-group row">
                                    <label
                                      for="client-name"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Name</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="client-name"
                                        placeholder="Client Name"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="client-email"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Email</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="client-email"
                                        placeholder="name@company.com"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="client-address"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Address</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="client-address"
                                        placeholder="XYZ Street"
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label
                                      for="client-phone"
                                      class="col-sm-3 col-form-label col-form-label-sm"
                                      >Phone</label
                                    >
                                    <div class="col-sm-9">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="client-phone"
                                        placeholder="(123) 456 789"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="invoice-detail-terms">
                            <div class="row justify-content-between">
                              <div class="col-md-3">
                                <div class="form-group mb-4">
                                  <label for="number">Invoice Number</label>
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    id="number"
                                    placeholder="#0001"
                                  />
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group mb-4">
                                  <label for="date">Invoice Date</label>
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    id="date"
                                    placeholder="Add date picker"
                                  />
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group mb-4">
                                  <label for="due">Due Date</label>
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    id="due"
                                    placeholder="None"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="invoice-detail-items">
                            <div class="table-responsive">
                              <table class="table item-table">
                                <thead>
                                  <tr>
                                    <th class=""></th>
                                    <th>Description</th>
                                    <th class="">Rate</th>
                                    <th class="">Qty</th>
                                    <th class="text-right">Amount</th>
                                    <th class="text-center">Tax</th>
                                  </tr>
                                  <tr
                                    aria-hidden="true"
                                    class="mt-3 d-block table-row-hidden"
                                  ></tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="delete-item-row">
                                      <ul class="table-controls">
                                        <li>
                                          <a
                                            href="javascript:void(0);"
                                            class="delete-item"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title=""
                                            data-original-title="Delete"
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
                                              class="feather feather-x-circle"
                                            >
                                              <circle
                                                cx="12"
                                                cy="12"
                                                r="10"
                                              ></circle>
                                              <line
                                                x1="15"
                                                y1="9"
                                                x2="9"
                                                y2="15"
                                              ></line>
                                              <line
                                                x1="9"
                                                y1="9"
                                                x2="15"
                                                y2="15"
                                              ></line></svg
                                          ></a>
                                        </li>
                                      </ul>
                                    </td>
                                    <td class="description">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        placeholder="Item Description"
                                      />
                                      <textarea
                                        class="form-control"
                                        placeholder="Additional Details"
                                      ></textarea>
                                    </td>
                                    <td class="rate">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        placeholder="Price"
                                      />
                                    </td>
                                    <td class="text-right qty">
                                      <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        placeholder="Quantity"
                                      />
                                    </td>
                                    <td class="text-right amount">
                                      <span class="editable-amount"
                                        ><span class="currency">$</span>
                                        <span class="amount">100.00</span></span
                                      >
                                    </td>
                                    <td class="text-center tax">
                                      <div class="n-chk">
                                        <div
                                          class="form-check form-check-primary form-check-inline me-0 mb-0"
                                        >
                                          <input
                                            class="form-check-input inbox-chkbox contact-chkbox"
                                            type="checkbox"
                                          />
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                            <button class="btn btn-dark additem">
                              Add Item
                            </button>
                          </div>

                          <div class="invoice-detail-total">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row invoice-created-by">
                                  <label
                                    for="payment-method-account"
                                    class="col-sm-3 col-form-label col-form-label-sm"
                                    >Account #:</label
                                  >
                                  <div class="col-sm-9">
                                    <input
                                      type="text"
                                      class="form-control form-control-sm"
                                      id="payment-method-account"
                                      placeholder="Bank Account Number"
                                    />
                                  </div>
                                </div>

                                <div class="form-group row invoice-created-by">
                                  <label
                                    for="payment-method-bank-name"
                                    class="col-sm-3 col-form-label col-form-label-sm"
                                    >Bank Name:</label
                                  >
                                  <div class="col-sm-9">
                                    <input
                                      type="text"
                                      class="form-control form-control-sm"
                                      id="payment-method-bank-name"
                                      placeholder="Insert Bank Name"
                                    />
                                  </div>
                                </div>

                                <div class="form-group row invoice-created-by">
                                  <label
                                    for="payment-method-code"
                                    class="col-sm-3 col-form-label col-form-label-sm"
                                    >SWIFT code:</label
                                  >
                                  <div class="col-sm-9">
                                    <input
                                      type="text"
                                      class="form-control form-control-sm"
                                      id="payment-method-code"
                                      placeholder="Insert Code"
                                    />
                                  </div>
                                </div>

                                <div class="form-group row invoice-created-by">
                                  <label
                                    for="payment-method-country"
                                    class="col-sm-3 col-form-label col-form-label-sm"
                                    >Country:</label
                                  >
                                  <div class="col-sm-9">
                                    <select
                                      name="country_code"
                                      class="form-select country_code form-control-sm"
                                      id="payment-method-country"
                                    >
                                      <option value="">Choose Country</option>
                                      <option value="United States">
                                        United States
                                      </option>
                                      <option value="United Kingdom">
                                        United Kingdom
                                      </option>
                                      <option value="Canada">Canada</option>
                                      <option value="Australia">
                                        Australia
                                      </option>
                                      <option value="Germany">Germany</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Denmark">Denmark</option>
                                      <option value="Norway">Norway</option>
                                      <option value="New-Zealand">
                                        New Zealand
                                      </option>
                                      <option value="Afghanistan">
                                        Afghanistan
                                      </option>
                                      <option value="Albania">Albania</option>
                                      <option value="Algeria">Algeria</option>
                                      <option value="American-Samoa">
                                        Andorra
                                      </option>
                                      <option value="Angola">Angola</option>
                                      <option value="Antigua Barbuda">
                                        Antigua &amp; Barbuda
                                      </option>
                                      <option value="Argentina">
                                        Argentina
                                      </option>
                                      <option value="Armenia">Armenia</option>
                                      <option value="Aruba">Aruba</option>
                                      <option value="Austria">Austria</option>
                                      <option value="Azerbaijan">
                                        Azerbaijan
                                      </option>
                                      <option value="Bahamas">Bahamas</option>
                                      <option value="Bahrain">Bahrain</option>
                                      <option value="Bangladesh">
                                        Bangladesh
                                      </option>
                                      <option value="Barbados">Barbados</option>
                                      <option value="Belarus">Belarus</option>
                                      <option value="Belgium">Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda">Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia">Bolivia</option>
                                      <option value="Bosnia">
                                        Bosnia &amp; Herzegovina
                                      </option>
                                      <option value="Botswana">Botswana</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British">
                                        British Virgin Islands
                                      </option>
                                      <option value="Brunei">Brunei</option>
                                      <option value="Bulgaria">Bulgaria</option>
                                      <option value="Burkina">
                                        Burkina Faso
                                      </option>
                                      <option value="Burundi">Burundi</option>
                                      <option value="Cambodia">Cambodia</option>
                                      <option value="Cameroon">Cameroon</option>
                                      <option value="Cape">Cape Verde</option>
                                      <option value="Cayman">
                                        Cayman Islands
                                      </option>
                                      <option value="Central-African">
                                        Central African Republic
                                      </option>
                                      <option value="Chad">Chad</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Colombia">Colombia</option>
                                      <option value="Comoros">Comoros</option>
                                      <option value="Costa-Rica">
                                        Costa Rica
                                      </option>
                                      <option value="Croatia">Croatia</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czechia">Czechia</option>
                                      <option value="Côte">
                                        Côte d’Ivoire
                                      </option>
                                      <option value="Djibouti">Djibouti</option>
                                      <option value="Dominica">Dominica</option>
                                      <option value="Dominican">
                                        Dominican Republic
                                      </option>
                                      <option value="Ecuador">Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El-Salvador">
                                        El Salvador
                                      </option>
                                      <option value="Equatorial-Guinea">
                                        Equatorial Guinea
                                      </option>
                                      <option value="Eritrea">Eritrea</option>
                                      <option value="Estonia">Estonia</option>
                                      <option value="Ethiopia">Ethiopia</option>
                                      <option value="Fiji">Fiji</option>
                                      <option value="Finland">Finland</option>
                                      <option value="France">France</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Grenada">Grenada</option>
                                      <option value="Guatemala">
                                        Guatemala
                                      </option>
                                      <option value="Guernsey">Guernsey</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                      </option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Honduras">Honduras</option>
                                      <option value="Hong-Kong">
                                        Hong Kong SAR China
                                      </option>
                                      <option value="Hungary">Hungary</option>
                                      <option value="Iceland">Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia">
                                        Indonesia
                                      </option>
                                      <option value="Iran">Iran</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland">Ireland</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Jamaica">Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhstan">
                                        Kazakhstan
                                      </option>
                                      <option value="Kenya">Kenya</option>
                                      <option value="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                      </option>
                                      <option value="Laos">Laos</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon">Lebanon</option>
                                      <option value="Lesotho">Lesotho</option>
                                      <option value="Liberia">Liberia</option>
                                      <option value="Libya">Libya</option>
                                      <option value="Liechtenstein">
                                        Liechtenstein
                                      </option>
                                      <option value="Lithuania">
                                        Lithuania
                                      </option>
                                      <option value="Luxembourg">
                                        Luxembourg
                                      </option>
                                      <option value="Macedonia">
                                        Macedonia
                                      </option>
                                      <option value="Madagascar">
                                        Madagascar
                                      </option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Malaysia">Malaysia</option>
                                      <option value="Maldives">Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Mauritania">
                                        Mauritania
                                      </option>
                                      <option value="Mauritius">
                                        Mauritius
                                      </option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Moldova">Moldova</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia">Mongolia</option>
                                      <option value="Montenegro">
                                        Montenegro
                                      </option>
                                      <option value="Morocco">Morocco</option>
                                      <option value="Mozambique">
                                        Mozambique
                                      </option>
                                      <option value="Myanmar">
                                        Myanmar (Burma)
                                      </option>
                                      <option value="Namibia">Namibia</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherlands">
                                        Netherlands
                                      </option>
                                      <option value="Nicaragua">
                                        Nicaragua
                                      </option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria">Nigeria</option>
                                      <option value="North-Korea">
                                        North Korea
                                      </option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan">Pakistan</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Palestinian">
                                        Palestinian Territories
                                      </option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua">
                                        Papua New Guinea
                                      </option>
                                      <option value="Paraguay">Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Philippines">
                                        Philippines
                                      </option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal">Portugal</option>
                                      <option value="Puerto">
                                        Puerto Rico
                                      </option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Romania">Romania</option>
                                      <option value="Russia">Russia</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="Réunion">Réunion</option>
                                      <option value="Samoa">Samoa</option>
                                      <option value="San-Marino">
                                        San Marino
                                      </option>
                                      <option value="Saudi-Arabia">
                                        Saudi Arabia
                                      </option>
                                      <option value="Senegal">Senegal</option>
                                      <option value="Serbia">Serbia</option>
                                      <option value="Seychelles">
                                        Seychelles
                                      </option>
                                      <option value="Sierra-Leone">
                                        Sierra Leone
                                      </option>
                                      <option value="Singapore">
                                        Singapore
                                      </option>
                                      <option value="Slovakia">Slovakia</option>
                                      <option value="Slovenia">Slovenia</option>
                                      <option value="Solomon-Islands">
                                        Solomon Islands
                                      </option>
                                      <option value="Somalia">Somalia</option>
                                      <option value="South-Africa">
                                        South Africa
                                      </option>
                                      <option value="South-Korea">
                                        South Korea
                                      </option>
                                      <option value="Spain">Spain</option>
                                      <option value="Sri-Lanka">
                                        Sri Lanka
                                      </option>
                                      <option value="Sudan">Sudan</option>
                                      <option value="Suriname">Suriname</option>
                                      <option value="Swaziland">
                                        Swaziland
                                      </option>
                                      <option value="Switzerland">
                                        Switzerland
                                      </option>
                                      <option value="Syria">Syria</option>
                                      <option value="Sao-Tome-and-Principe">
                                        São Tomé &amp; Príncipe
                                      </option>
                                      <option value="Tajikistan">
                                        Tajikistan
                                      </option>
                                      <option value="Tanzania">Tanzania</option>
                                      <option value="Thailand">Thailand</option>
                                      <option value="Timor-Leste">
                                        Timor-Leste
                                      </option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad-and-Tobago">
                                        Trinidad &amp; Tobago
                                      </option>
                                      <option value="Tunisia">Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan">
                                        Turkmenistan
                                      </option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine">Ukraine</option>
                                      <option value="UAE">
                                        United Arab Emirates
                                      </option>
                                      <option value="Uruguay">Uruguay</option>
                                      <option value="Uzbekistan">
                                        Uzbekistan
                                      </option>
                                      <option value="Vanuatu">Vanuatu</option>
                                      <option value="Venezuela">
                                        Venezuela
                                      </option>
                                      <option value="Vietnam">Vietnam</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="totals-row">
                                  <div
                                    class="invoice-totals-row invoice-summary-subtotal"
                                  >
                                    <div class="invoice-summary-label">
                                      Subtotal
                                    </div>

                                    <div class="invoice-summary-value">
                                      <div class="subtotal-amount">
                                        <span class="currency">$</span
                                        ><span class="amount">0.00</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div
                                    class="invoice-totals-row invoice-summary-total"
                                  >
                                    <div class="invoice-summary-label">
                                      Discount
                                    </div>

                                    <div class="invoice-summary-value">
                                      <div class="total-amount">
                                        <span class="currency">$</span
                                        ><span>0.00</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div
                                    class="invoice-totals-row invoice-summary-tax"
                                  >
                                    <div class="invoice-summary-label">Tax</div>

                                    <div class="invoice-summary-value">
                                      <div class="tax-amount">
                                        <span>0%</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div
                                    class="invoice-totals-row invoice-summary-balance-due"
                                  >
                                    <div class="invoice-summary-label">
                                      Total
                                    </div>

                                    <div class="invoice-summary-value">
                                      <div class="balance-due-amount">
                                        <span class="currency">$</span
                                        ><span>0.00</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="invoice-detail-note">
                            <div class="row">
                              <div class="col-md-12 align-self-center">
                                <div class="form-group row invoice-note">
                                  <label
                                    for="invoice-detail-notes"
                                    class="col-sm-12 col-form-label col-form-label-sm"
                                    >Notes:</label
                                  >
                                  <div class="col-sm-12">
                                    <textarea
                                      class="form-control"
                                      id="invoice-detail-notes"
                                      placeholder='Notes - For example, "Thank you for doing business with us"'
                                      style="height: 88px"
                                    ></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3">
                      <div class="invoice-actions">
                        <div class="invoice-action-currency">
                          <div class="form-group mb-0">
                            <label>Currency</label>
                            <div
                              class="dropdown selectable-dropdown invoice-select"
                            >
                              <a
                                id="currencyDropdown"
                                href="javascript:void(0);"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                ><img
                                  src="assets/src/assets/img/flag-us.svg"
                                  class="flag-width"
                                  alt="flag" />
                                <span class="selectable-text"
                                  >USD - US Dollar</span
                                >
                                <span class="selectable-arrow"
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
                                    class="feather feather-chevron-down"
                                  >
                                    <polyline
                                      points="6 9 12 15 18 9"
                                    ></polyline></svg></span
                              ></a>
                              <div
                                class="dropdown-menu"
                                aria-labelledby="currencyDropdown"
                              >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-us.svg"
                                  data-value="USD - US Dollar"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-us.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  USD - US Dollar</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-gbp.svg"
                                  data-value="GBP - British Pound"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-gbp.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  GBP - British Pound</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-idr.svg"
                                  data-value="IDR - Indonesian Rupiah"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-idr.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  IDR - Indonesian Rupiah</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-inr.svg"
                                  data-value="INR - Indian Rupee"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-inr.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  INR - Indian Rupee</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-brl.svg"
                                  data-value="BRL - Brazilian Real"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-brl.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  BRL - Brazilian Real</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-de.svg"
                                  data-value="EUR - Germany (Euro)"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-de.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  EUR - Germany (Euro)</a
                                >
                                <a
                                  class="dropdown-item"
                                  data-img-value="assets/src/assets/img/flag-try.svg"
                                  data-value="TRY - Turkish Lira"
                                  href="javascript:void(0);"
                                  ><img
                                    src="assets/src/assets/img/flag-try.svg"
                                    class="flag-width"
                                    alt="flag"
                                  />
                                  TRY - Turkish Lira</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="invoice-action-tax">
                          <h5>Tax</h5>

                          <div class="invoice-action-tax-fields">
                            <div class="row">
                              <div class="col-6">
                                <div class="form-group mb-0">
                                  <label>Type</label>

                                  <div
                                    class="dropdown selectable-dropdown invoice-tax-select"
                                  >
                                    <a
                                      id="taxTypeDropdown"
                                      href="javascript:void(0);"
                                      class="dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                      <span class="selectable-text">None</span>
                                      <span class="selectable-arrow"
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
                                          class="feather feather-chevron-down"
                                        >
                                          <polyline
                                            points="6 9 12 15 18 9"
                                          ></polyline></svg></span
                                    ></a>
                                    <div
                                      class="dropdown-menu"
                                      aria-labelledby="taxTypeDropdown"
                                    >
                                      <a
                                        class="dropdown-item"
                                        data-value="Deducted"
                                        href="javascript:void(0);"
                                        >Deducted</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        data-value="Per Item"
                                        href="javascript:void(0);"
                                        >Per Item</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        data-value="On Total"
                                        href="javascript:void(0);"
                                        >On Total</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        data-value="None"
                                        href="javascript:void(0);"
                                        >None</a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-6">
                                <div
                                  class="form-group mb-0 tax-rate-deducted"
                                  style="display: none"
                                >
                                  <label for="rate1">Rate (%)</label>
                                  <input
                                    type="number"
                                    class="form-control input-rate"
                                    id="rate1"
                                    placeholder="Rate"
                                    value="10"
                                  />
                                </div>

                                <div
                                  class="form-group mb-0 tax-rate-per-item"
                                  style="display: none"
                                >
                                  <label for="rate2">Rate (%)</label>
                                  <input
                                    type="number"
                                    class="form-control input-rate"
                                    id="rate2"
                                    placeholder="Rate"
                                    value="5"
                                  />
                                </div>

                                <div
                                  class="form-group mb-0 tax-rate-on-total"
                                  style="display: none"
                                >
                                  <label for="rate3">Rate (%)</label>
                                  <input
                                    type="number"
                                    class="form-control input-rate"
                                    id="rate3"
                                    placeholder="Rate"
                                    value="25"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="invoice-action-discount">
                          <h5>Discount</h5>

                          <div class="invoice-action-discount-fields">
                            <div class="row">
                              <div class="col-6">
                                <div class="form-group mb-0">
                                  <label>Type</label>

                                  <div
                                    class="dropdown selectable-dropdown invoice-discount-select"
                                  >
                                    <a
                                      id="discountDropdown"
                                      href="javascript:void(0);"
                                      class="dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                      <span class="selectable-text">None</span>
                                      <span class="selectable-arrow"
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
                                          class="feather feather-chevron-down"
                                        >
                                          <polyline
                                            points="6 9 12 15 18 9"
                                          ></polyline></svg></span
                                    ></a>
                                    <div
                                      class="dropdown-menu"
                                      aria-labelledby="discountDropdown"
                                    >
                                      <a
                                        class="dropdown-item"
                                        data-value="Percent"
                                        href="javascript:void(0);"
                                        >Percent</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        data-value="Flat Amount"
                                        href="javascript:void(0);"
                                        >Flat Amount</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        data-value="None"
                                        href="javascript:void(0);"
                                        >None</a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-6">
                                <div
                                  class="form-group mb-0 discount-amount"
                                  style="display: none"
                                >
                                  <label for="ratet1">Amount</label>
                                  <input
                                    type="number"
                                    class="form-control input-rate"
                                    id="ratet1"
                                    placeholder="Rate"
                                    value="25"
                                  />
                                </div>

                                <div
                                  class="form-group mb-0 discount-percent"
                                  style="display: none"
                                >
                                  <label for="ratet2">Percent</label>
                                  <input
                                    type="number"
                                    class="form-control input-rate"
                                    id="ratet2"
                                    placeholder="Rate"
                                    value="10"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="invoice-actions-btn">
                        <div class="invoice-action-btn">
                          <div class="row">
                            <div class="col-xl-12 col-md-4">
                              <a
                                href="javascript:void(0);"
                                class="btn btn-primary btn-send"
                                >Send Invoice</a
                              >
                            </div>
                            <div class="col-xl-12 col-md-4">
                              <a
                                href="./app-invoice-preview.html"
                                class="btn btn-secondary btn-preview"
                                >Preview</a
                              >
                            </div>
                            <div class="col-xl-12 col-md-4">
                              <a
                                href="javascript:void(0);"
                                class="btn btn-success btn-download"
                                >Save</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
              Copyright © <span class="dynamic-year">2022</span>
              <a target="_blank" href="https://designreset.com/cork-admin/"
                >DesignReset</a
              >, All rights reserved.
            </p>
          </div>
          <div class="footer-section f-section-2">
            <p class="">
              Coded with
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
            </p>
          </div>
        </div>
        <!--  END FOOTER  -->
      </div>
      <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/global/vendors.min.js"></script>
    <script src="assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="assets/layouts/vertical-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="assets/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="assets/src/plugins/src/flatpickr/flatpickr.js"></script>
    <script src="assets/src/assets/js/apps/invoice-add.js"></script>
  </body>
</html>