<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Design Detail</title>
    <link rel="stylesheet" href="/assets/css/product-detail.css" />
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
      </div>
      <!-- / row -->
    </header>

    <div class="product-main">
      <div class="wrapper">
        <div class="card">
          <div class="image-placeholder">
            <img src="{{ asset('/storage/photo/'.$designs->photo) }}" alt="" />
          </div>
        </div>
        <div class="section2">
          <div class="left-section">
            <div class="product-detail">
              <div class="title">
                {{ $designs->name }}
              </div>
              <div class="other-detail">
                <div class="price"><h3>{{ $designs->price }}</h3></div>
                <div class="author"><h3>ENIGMA STUDIO</h3></div>
                <div class="last-update">
                    <h3>Last Update : <br>{{ $designs->updated_at }}</h3>
                </div>
              </div>
            </div>
            <div class="description">
              <p>
                {{ $designs->description }} <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio vitae natus sequi tempora qui. Sapiente, a. Magni iste, nesciunt minus doloremque labore enim totam omnis illum minima fugiat laborum.

              </p>
            </div>
          </div>
          <div class="right-section">
            <div class="sidebar">
                <div class="first-section">


                    <button class="raise" id="cta" onclick="window.location.href='cart'">Buy Design</button>
                </div>
                <div class="second-section">
                  <div class="sort">

                    <section class="check-menu checklist">
                      <ul>
                        <li>
                          <h3>- Category -</h3>
                        </li>
                        <li>
                          <h3>{{ $designs->categories->name }}</h3>
                        </li>
                      </ul>
                    </section>
                  </div class="sort">

                </div>
              </div>
            <div class="cta"></div>
            <div class="product-category"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="/assets/js/catalog.js"></script>
  </body>
</html>
