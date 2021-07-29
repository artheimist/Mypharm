<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- CSS Saya -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/cart.css" />

  <title>MyPharm-Cart</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/img/Frame 32.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body class="bg-light">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="<?= base_url('assets'); ?>/img/Logo Navbar.png" alt="" width="115" height="50" /> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="#" href="<?= base_url('afterlogin'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('after_shop'); ?>">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url('artikel') ?>">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
        <div class="d-flex flex-wrap align-items-center justify-content-start">
          <form class="me-3">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
          </form>
          <?php if ($this->session->has_userdata('email')) { ?>
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/upload/') . $this->session->userdata('foto'); ?> " alt="profile pic" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Daftar Transaksi</a></li>
                <li><a class="dropdown-item" href="#">Order History</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Sign out</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <a class="btn btn-primary mx-2" href="<?= base_url('auth/register'); ?>">Sign Up</a>
            <a class="btn btn-outline-primary" href="<?= base_url('auth'); ?>">Login</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <section id="cartpage">
    <div class="container py-5">
      <div class="row">
        <div class="col py-4">
          <h1 style="font-family: 'Poppins', sans-serif;">Your Cart</h1>
        </div>
      </div>
      <div class="row g-3 g-lg-1">
        <!-- barang -->
        <div class="col">
          <div class="bg-white cart-item-list p-2 mb-1">
            <?php foreach ($this->cart->contents() as $item) { ?>
              <div class="cart-item pb-2">
                <a href="#" class="cart-item-image mt-3"><img src="<?= base_url('assets/upload/product/'); ?><?= $item['gambar'] ?>" alt="image" /></a>
                <div class="cart-item-body">
                  <div class="row">
                    <div class="col-10">
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <h5 class="cart-item-tittle pt-3"><?= $item['name']; ?></h5>
                          <small class="cart-item-subtittle"><?= $item['toko']; ?></small>
                          <ul class="cart-item-meta">
                            <li style="color: #3682f4">Rp <?= $item['price']; ?></li><br />
                            <input type="number" class="form-control form-control-xs mt-3" style="width: 112px;" value="<?= $item['qty'] ?>" min="1" readonly />
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-2 text-end mt-3">
                      <div class="cart-item-options">
                        <form action="<?= base_url('detail/removecart/') . $item['rowid'] ?>" method="POST">
                          <input type="hidden" name="qty1" value="<?= $item['qty'] ?>">
                          <button type="submit" class="btn-close" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove item" onclick=""></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php } ?>
          </div>
        </div>
        <aside class="col-lg-4">
          <div class="bg-white">
            <h2 class="py-3 ps-3 mb-3 text-uppercase" style="font-family: 'Poppins', sans-serif; font-weight: 500 ">Order total</h2>
            <ul class="list-group list-group-minimal mb-3">
              <?php foreach ($this->cart->contents() as $item) { ?>
                <li class="list-group-item d-flex justify-content-between align-items-center" style="border: 0">
                  <?= $item['name']; ?>
                  <span><?= $item['price']; ?></span>
                </li>
              <?php } ?>
              <li class="list-group-item d-flex justify-content-between align-items-center border-bottom" style="border: 0; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500">
                Total
                <span><?= $this->cart->total(); ?></span>
              </li>
              <li>
                <a class="btn btn-primary btn-block rounded-0 text-uppercase" style="margin: 24px; padding: 16px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 500">
                  Proceed to checkout
                </a>
              </li>
            </ul>
        </aside>
      </div>
      <div class="col-12 col-md-7">
        <!-- kupon -->
        <form class="mb-7 mb-md-0">
          <label class="fw-regular mb-3" style="font-size: 18px; font-family: 'Poppins', sans-serif;
            font-weight: 500;" for="carCouponCode">
            Promo code :
          </label>
          <div class="row form-row">
            <div class="col">
              <input class="form-control form-control-sm rounded-0" id="cartCouponCode" type="text" placeholder="Enter promo code">
            </div>
            <div class="col-auto">
              <button class="btn btn-sm btn-primary" type="submit">Apply</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </section>

  <!-- Footer Start -->
  <section id="footer">
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="<?= base_url('assets'); ?>/img/Logo Navbar.png" width="180" height="auto" alt="" />
          <small class="d-block mb-3 text-muted">&copy; 2019–2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Contact Info</h5>
          <ul class="list-unstyled text-small">
            <li class="list-item" href="#">Call Us Free - 24/7</li>
            <li style="color: #3682f4; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700" class="list-item mt-1" href="#">3200 421 000</li>
            <li class="list-item" href="#">221 Makassar Road,<br />Street 46, Makassar</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Information</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">About Us</a></li>
            <li><a class="link-secondary" href="#">My Account</a></li>
            <li><a class="link-secondary" href="#">Privacy Policies</a></li>
            <li><a class="link-secondary" href="#">Terms & Conditions</a></li>
            <li><a class="link-secondary" href="#">Customer Service</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Quick Action</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Special Offers</a></li>
            <li><a class="link-secondary" href="#">Payment Method</a></li>
            <li><a class="link-secondary" href="#">Terms of Use</a></li>
            <li><a class="link-secondary" href="#">Track Your Order</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </section>
  <!-- Footer End -->
  <script src="<?= base_url('assets/js/libary.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
</body>

</html>