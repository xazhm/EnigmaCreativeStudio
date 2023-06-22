<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Enigma Catalog</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
  />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
  />
    <link rel="stylesheet" href="{{ asset('assets/css/catalog.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  </head>
  <body>

    <header class="main_h sticky">

      <div class="row">
          <a class="logo" href="index.html">ENIGMA</a>

          <div class="mobile-toggle">
              <span></span>
              <span></span>
              <span></span>
          </div>

          <nav>
              <ul>
                <li><a href="/catalog">Store</a></li>
                <li><a href="/design-request">Request</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
          </nav>

      </div> <!-- / row -->

  </header>

    <div class="wrapper">
      <div class="sidebar">
        <div class="first-section">
          <div class="search-input">
            <input
              id="input"
              class="input-holder"
              type="input"
              placeholder="Search"
            />
          </div>
          <div class="min-price">
            <input
              id="min-price"
              class="input-holder"
              type="input"
              placeholder="Minimal Price"
            />
          </div>
          <div class="max-price">
            <input
              id="max-price"
              class="input-holder"
              type="input"
              placeholder="Maximal Price Price"
            />
          </div>

          <div class="sort-by">
            <div class="sort">
              <section class="check-menu checklist">
                <ul>
                  <li>
                    <div class="checkbox">
                      <div class="check">
                        <input type="checkbox" name="task_03" />
                        <div class="ripple-container">
                          <div class="check-off"></div>
                          <div class="check-on"><i class="fa fa-check"></i></div>
                          <div class="check-ripple"></div>
                        </div>
                      </div>
                      <div class="label">
                        <mark>Ascending</mark>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox">
                      <div class="check">
                        <input type="checkbox" name="task_03" />
                        <div class="ripple-container">
                          <div class="check-off"></div>
                          <div class="check-on"><i class="fa fa-check"></i></div>
                          <div class="check-ripple"></div>
                        </div>
                      </div>
                      <div class="label">
                        <mark>Descending</mark>
                      </div>
                    </div>
                  </li>

                </ul>
              </section>
            </div class="sort">
          </div>
        </div>
        <div class="second-section">
          <div class="sort">
            <h1>Category</h1>
            <section class="check-menu checklist">
              <ul>
                <li>
                  <div class="checkbox">
                    <div class="check">
                      <input type="checkbox" name="task_03" />
                      <div class="ripple-container">
                        <div class="check-off"></div>
                        <div class="check-on"><i class="fa fa-check"></i></div>
                        <div class="check-ripple"></div>
                      </div>
                    </div>
                    <div class="label">
                      <mark>Vector Graphic</mark>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <div class="check">
                      <input type="checkbox" name="task_03" />
                      <div class="ripple-container">
                        <div class="check-off"></div>
                        <div class="check-on"><i class="fa fa-check"></i></div>
                        <div class="check-ripple"></div>
                      </div>
                    </div>
                    <div class="label">
                      <mark>Animation</mark>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <div class="check">
                      <input type="checkbox" name="task_04" />
                      <div class="ripple-container">
                        <div class="check-off"></div>
                        <div class="check-on"><i class="fa fa-check"></i></div>
                        <div class="check-ripple"></div>
                      </div>
                    </div>
                    <div class="label">
                      <mark>Logo Design</mark>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <div class="check">
                      <input type="checkbox" name="task_04" />
                      <div class="ripple-container">
                        <div class="check-off"></div>
                        <div class="check-on"><i class="fa fa-check"></i></div>
                        <div class="check-ripple"></div>
                      </div>
                    </div>
                    <div class="label">
                      <mark>Texture Pack</mark>
                    </div>
                  </div>
                </li>
              </ul>
            </section>
          </div class="sort">
          <button>Apply Filter</button>
        </div>
      </div>

      <!-- Main -->
      <div class="box-container">
        @foreach ($designs as $item)
        <div class="catalog">
        <a href="/product-detail/{{$item->slug}}" class="link-catalog">
          <div id="card">
            <img src="{{ asset('/storage/photo/'.$item->photo) }}" alt="" />
          </div>
          <div class="card-title"><h4>{{ $item->name }}</h4></div>
          <div class="card-interaction">
            <h4>Rp. {{ $item->price }}</h4>
            <svg width="102" height="32" viewBox="0 0 102 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Vector" d="M87.9106 1.41063C87.1316 0.63156 85.8684 0.63156 85.0894 1.41063C84.3108 2.18921 84.3102 3.45136 85.0881 4.23063L89.7297 8.88058C91.617 10.7713 90.2779 14 87.6065 14H2C0.895428 14 0 14.8954 0 16C0 17.1046 0.895431 18 2 18H87.6065C90.2779 18 91.617 21.2288 89.7297 23.1194L85.0881 27.7694C84.3102 28.5486 84.3108 29.8108 85.0894 30.5894C85.8684 31.3684 87.1316 31.3684 87.9106 30.5894L100.379 18.1213C101.55 16.9497 101.55 15.0503 100.379 13.8787L87.9106 1.41063Z" fill="#DFB279"/>
              </svg>
          </div>
          </a>
        </div>
        @endforeach
      </div>



      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="assets/js/catalog.js"></script>
  </body>
</html>
