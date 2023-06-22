<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Trendy Store</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand">
          <img src="images/logo-new.png" alt="Logo" /> Trendy Store
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="categories.html" class="nav-link">Categories</a>
            </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <li class="nav-item">
              <a href="Register.html" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                href="login.html"
                class="btn btn-success nav-link px-4 text white"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                  <li data-target="#storeCarousel" data-slide-to="3"></li>
                  <li data-target="#storeCarousel" data-slide-to="4"></li>
                 
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="images/hero.jpg"
                      alt="Carousel image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/promo1.jpeg"
                      alt="Carousel image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/promo2.jpeg"
                      alt="Carousel image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/promo3.jpeg"
                      alt="Carousel image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/promo4.jpeg"
                      alt="Carousel image"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/jeans.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Celana</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/white-short-sleeve-t-shirt.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Baju</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/cap.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Topi</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/shoes.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Sepatu</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/school-bag.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Tas</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/watch.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">aksesoris</p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Products</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/boots.jpg')"
                  ></div>
                </div>
                <div class="products-text">Boots</div>
                <div class="product-price">Rp350.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/topi\ baseball\ hitam.jpg')"
                  ></div>
                </div>
                <div class="products-text">Topi BaseBall Hitam</div>
                <div class="product-price">Rp52.500</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/rolex.jpg')"
                  ></div>
                </div>
                <div class="products-text">Rolex</div>
                <div class="product-price">Rp150.000.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/clutch.jpeg')"
                  ></div>
                </div>
                <div class="products-text">Clutch Bag</div>
                <div class="product-price">Rp210.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/rok\ sage\ green.jpg')"
                  ></div>
                </div>
                <div class="products-text">Rok Sage Green</div>
                <div class="product-price">Rp52.500</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="detail.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('images/hoodie\ wibu.jpg')"
                  ></div>
                </div>
                <div class="products-text">Hoodie Wibu</div>
                <div class="product-price">Rp122.500</div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">Trendy Store. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/libraries/jquery/jquery.slim.min.js"></script>
    <script src="/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>
