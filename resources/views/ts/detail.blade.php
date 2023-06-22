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
          <img src="images/logo-new.png" alt="Logo" />
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
                  src="images/Reza.jpeg"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, Sahla
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
                <img src="images/icon_cart_empty.svg" alt="" />
              </a>
            </li>
          </ul>

          <!-- Dekstop Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link"> Hi, Sahla</a>
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
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Rok Sage Green</h1>
                <div class="owner">By Salama Fashion</div>
                <div class="price">Rp 115.000</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3"
                  >Tambah keranjang</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Rok sage green adalah salah satu bawahan yang sering
                  digunakan untuk para wanita agar terlihat lebih fresh. 
                  Warna hijau sendiri merupakan suatu warna netral. 
                </p>
                <p>
                  Beli Uniqlo Rok Warna Sage Green di Palembang,Indonesia. 
                  Dapatkan penawaran menarik di Gaun & Rok Chat untuk Beli.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Costumer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media my-4">
                    <img
                      src="images/customer-review-1.png"
                      class="mr-3 rounded circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Fatma</h5>
                      TRoknya bagus, pengiriman cepat dan bahannya lembut.
                      I love it!
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="images/customer-review-2.png"
                      class="mr-3 rounded circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Alqa12</h5>
                      Saya sangat suka dengan roknya, warnanya juga sesuai dengan gambar.
                      Pengirimannya dua hari sampai dan itu memuaskan. 
                      Bintang berbicara
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="images/customer-review-3.png"
                      class="mr-3 rounded circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Tia</h5>
                      Barangnya bagus dan suka..
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">2021 Copyright Ade Saputra. All Rights Reserved.</p>
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
    <script src="libraries/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "images/Rok-1.jpg",
            },
            {
              id: 2,
              url: "images/rok-2.jpg",
            },
            {
              id: 3,
              url: "images/rok-3.jpg",
            },
            {
              id: 4,
              url: "images/rok-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    <script src="script/navbar-scroll.js"></script>
  </body>
</html>
