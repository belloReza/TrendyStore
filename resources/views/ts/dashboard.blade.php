<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">

    <title>Trendy Store</title>
  </head>
  <body>
      <div class="page-dashboard">
          <div class="d-flex" id="wrapper" data-aos="fade-right">
              <div class="border-right" id="sidebar-wrapper">
                  <div class="sidebar-heading text-center">
                      <img src="images/logo-new.png" alt="" class="my-4">
                  </div> 
                  <div class="list-group list-group-flush">
                    <a href="dashboard.html" class="list-group-item list-group-action active">Dashboard</a>
                    <a href="dashboard-product.html" class="list-group-item list-group-action">My Products</a>
                    <a href="dashboard-transactions.html" class="list-group-item list-group-action">Transactions</a>
                    <a href="dashboard-settings.html" class="list-group-item list-group-action">Setting</a>
                    <a href="dashboard-account.html" class="list-group-item list-group-action">Account</a>
                    <a href="index.html" class="list-group-item list-group-action">Sign Out</a>
                  </div>
              </div>

              <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
                  <div class="container-fluid">
                    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                          <span class="navbar-toggle-icon"></span>
                      </button>
                      
                      
                      <!-- DESKTOP -->   
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav d-none d-lg-flex ml-auto">
                              <li class="nav-item dropdown">
                                  <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                      <img src="images/download.jpg" alt="" class="rounded-circle mr-2 profile-picture">
                                      Halo, Sahla
                                  </a>
                                  <div class="dropdown-menu">
                                      <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                                      <a href="dashboard-account.html" class="dropdown-item">Settings</a>
                                      <div class="dropdown-divider"></div>
                                      <a href="/" class="dropdown-item">Logout</a>
                                  </div>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link d-line-block-mt-2">
                                      <img src="images/icon_cart.svg" alt="">
                                      <div class="cart-badge">3</div>
                                  </a>
                              </li>
                          </ul>
          
                          <!-- Mobile Menu -->
                          <ul class="navbar-nav d-block d-lg-none">
                              <li class="nav-item">
                                  <a href="#" class="nav-link"> HI, Sahla</a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link d-inline-block">Cart</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>


              <!--Section Mode-->
              <div class="section-content section-dashboard-home">
                  <div class="container-fluid">
                      <div class="dashboard-heading">
                          <h2 class="dashboard">Dashboard</h2>
                          <p class="dashboard-subtitle">Look what you made today</p>
                      </div>
                      <div class="dashboard-content">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="card mb-2">
                                      <div class="card-body">
                                          <div class="dashboard-card-title">Customer</div>
                                          <div class="dashboard-card-subtitle">14.600</div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">Revenue</div>
                                        <div class="dashboard-card-subtitle">Rp 35.000.600</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">Transaction</div>
                                        <div class="dashboard-card-subtitle">40</div>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="row mt-3">
                              <div class="col-12 mt-2">
                                  <h5 class="mb-3">Recent Transaction</h5>
                                  
                                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="images/topilogo.jpg" alt="">
                                            </div>
                                            <div class="col-md-4">Topi Baseball</div>
                                            <div class="col-md-3">Reza Andrea</div>
                                            <div class="col-md-2">5 Februari, 2023</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="images/dashboard-arrow-rig.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                  </a>

                                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="images/dashboard-icon-product2.png" alt="">
                                            </div>
                                            <div class="col-md-4">Chanel Parfume</div>
                                            <div class="col-md-3">Laura Choutte</div>
                                            <div class="col-md-2">3 Januari, 2021</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="images/dashboard-arrow-right.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                  </a>

                                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="images/dashboard-icon-product3.png" alt="">
                                            </div>
                                            <div class="col-md-4">YSL Sing Bag</div>
                                            <div class="col-md-3">Michael Dam</div>
                                            <div class="col-md-2">3 Januari, 2021</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="images/dashboard-arrow-right.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                  </a>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="libraries/jquery/jquery.slim.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#menu-toggle").click(function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        })
    </script>
  </body>
</html>
