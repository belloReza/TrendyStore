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
          <img src="images/logo.jpg" alt="Logo" />
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
          </ul>

          <!-- Deskstop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="images/bayu.jpeg"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, alalala
              </a>
              <div class="dropdown-menu">
                <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                <a href="dashboard-account.html" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-line-block-mt-2">
                <img src="images/icon_cart.svg" alt="" />
                <div class="cart-badge">3</div>
              </a>
            </li>
          </ul>

          <!-- Dekstop Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link"> Hi, Alalala</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderlesss table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Nama &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/product-card-1.png"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Jam Tangan</div>
                      <div class="product-subtitle">by Rolex</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp 1.150.000</div>
                      <div class="product-subtitle">Idr</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="/images/rok sage green.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rok Sage Green</div>
                      <div class="product-subtitle">by Ria Ricis</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp 115.000</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="/images/topi baseball hitam.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Topi</div>
                      <div class="product-subtitle">by Clara Clark</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp 145.000</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 classs="mb-4">Shopping Details</h2>
            </div>
          </div>
          <div class="row" mb-2 data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Alamat 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="jalan boboiboy galaxy "
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Alamat 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  name="addressTwo"
                  value="RT05 RW05"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Provinsi</label>
                <select name="province" id="Province" class="form-control">
                  <option value="Jawa">Jawa</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">Kota</label>
                <select name="city" id="city" class="form-control">
                  <option value="Jakarta">Jakarta</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Kode Pos</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  value="55555"
                />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Kecamatan</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">No. Handphone</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  value="0210000555"
                />
              </div>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-tittle">Rp 40.000</div>
              <div class="product-subtitle">Country Tax></div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-tittle">Rp 20.000</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-tittle">Rp 30.000</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-tittle text-successs">Rp 470.000</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="/success.html"
                class="btn btn-success mt-4 px-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">2023 Copyright Trendy Store. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="libraries/jquery/jquery.slim.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="script/navbar-scroll.js"></script>
  </body>
</html>
