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
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/details.css" />
  <!-- BS Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!--  -->
  <title>MyPharm</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/img/Frame 32.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
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
            <a class="nav-link active text-primary" aria-current="page" href="<?= base_url('after_shop') ?>">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url('artikel') ?>">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <div class="d-flex flex-wrap align-items-center justify-content-start">
          <form class="me-3">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
          </form>
          <?php if ($this->session->has_userdata('email')) { ?>
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/upload/') . $this->session->userdata('foto'); ?> " alt="profile pic" width="32" height="32" class="rounded-circle" />
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
          <a class="btn btn-labeled btn-primary mx-2" href="<?= base_url('after_cart'); ?>">
            <i class="bi bi-cart3" style="font-size: 17px; margin-right:4px;"></i>
            Cart
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- tittle -->
  <div class="page-tittle-overlap bg-dark pt-2">
    <div class="container d-lg-flex justify-content-start py-1 py-lg-2">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a style=" font-family: 'Poppins',sans-serif; color: #52b788;" href="#">
                <i> </i>Home</a></li>
            <li class="breadcrumb-item"><a style="font-family: 'Poppins',sans-serif; color: #52b788;" href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="font-family: 'Poppins',sans-serif;">Product Details</a></li>
          </ol>
        </nav>
        </nav>
      </div>
    </div>
  </div>
  <!-- tittle end -->
  <div class="container">
    <div class="py-3 mb-5">
      <div class="px-lg-1">
        <div class="row">
          <?= $this->session->flashdata('message'); ?>
          <h4 class="mt-3">Product Details</h4>
          <!-- Gallery -->
          <div class="col-lg-6 pe-lg-4 pe-md-3 pt-lg-4">
            <div class="product-gallery">
              <div class="product-gallery-preview order-sm-2">
                <div class="product-gallery-preview-item card-border" id="first">
                  <img src="<?= base_url('assets/upload/product/') . $detail->gambar ?>" alt="product image" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <div class="product-details ms-auto pb-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 style="font-size: 24px;"><?= $detail->nama_product; ?> by <a class="store" href="#" style="font-size: 24px;"><?= $detail->firstname . " " . $detail->lastname; ?></a></h5>
                <a href="#review">
              </div>
              <div class="star-rating" style="align-items: center; justify-content: center;">
                <?php if ($jumlah > 0) { ?>
                  <?php $avgr = $avg->rating / $jumlah; ?>
                  <?php if (is_float($avgr)) { ?>
                    <?php for ($i = 0; $i < $avgr - 1; $i++) : ?>
                      <i class="bi-star-fill"></i>
                    <?php endfor; ?>
                  <?php } else { ?>
                    <?php for ($i = 0; $i < $avgr; $i++) : ?>
                      <i class="bi-star-fill"></i>
                    <?php endfor; ?>
                  <?php } ?>
                  <?php $sisa = 5 - $avgr; ?>
                  <?php if ($sisa > 0) { ?>
                    <?php for ($i = 0; $i < $sisa; $i++) : ?>
                      <i class="bi bi-star"></i>
                    <?php endfor; ?>
                  <?php } ?>
                <?php } else { ?>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                <?php } ?>
                <span class="d-inline-block fs-sm text-body ms-1 mt-1" style="font-family: 'Poppins', sans-serif;
                   font-weight: 500;"><?= $jumlah; ?> Reviews</span>
              </div>
              </a>
            </div>
            <div class="mb-3">
              <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 700">Rp <?= $detail->harga_product; ?> <s class="text-muted" style="font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600">3.456.212</s>
                <span class="badge badge-blue text-uppercase badge-shadow align-middle ms-2">New</span>
                <span class="badge badge-green badge-shadow text-uppercase align-middle">30% Off</span>
              </p>
            </div>
            <?php if ($detail->stok > 0) { ?>
              <div class="mb-4">
                <span class="iconify" data-icon="majesticons:check-line" data-inline="false" style="font-size: 18px; color: #0cbd70;"></span>
                <span style="font-family:'Poppins',sans-serif; font-size: 14px; color: #0cbd70; font-weight: 600;">In Stock : <?= $detail->stok; ?></span>
              </div>
            <?php } else { ?>
              <div class="mb-4">
                <span class="iconify" data-icon="emojione-v1:cross-mark" data-inline="false" style="font-size: 11px; color: red;"></span>
                <span style=" font-family:'Poppins',sans-serif; font-size: 14px; color: red; font-weight: 600;">out of stock</span>
              </div>
            <?php } ?>
            <div class="mb-3">
              <div class="mb-3 align-items-center">
                <h6>Product Description :</h6>
                <p>
                  <?= $detail->product_deskripsi; ?> </p>
              </div>
              <div class="d-flex justify-content-between pb-1">
                <label class="form-label" for="product-capsules">Capsules:</label>
              </div>
              <select class="form-select py-2" style="font-family: 'Poppins',sans-serif;" id="product-size">
                <option value>Capsules</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
              </select>
            </div>
            <form class="mb-grid-gutter" action="<?= base_url('detail/addcart') ?>" method="POST">
              <div class="mb-3 d-flex align-items-center">
                <input type="hidden" name="id" value="<?= $detail->id_product ?>">
                <input type="hidden" name="price" value="<?= $detail->harga_product ?>">
                <input type="hidden" name="nama" value="<?= $detail->nama_product  ?>">
                <input type="hidden" name="toko" value="<?= $detail->firstname . " " . $detail->lastname ?>">
                <input type="hidden" name="gambar" value="<?= $detail->gambar ?>">
                <input type="hidden" name="redirect" value="http://127.0.0.1/my_pharmfi/detail/index/<?= $detail->id_product ?>">
                <input type="number" class=" form-control form-control-xs" style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty" required />
                <button type="submit" onclick="see()" id="toast" class="btn btn-primary btn-shadow d-block px-4" style="margin-right: 1rem;"><i class="bi bi-cart2 me-2" style="font-size: 18px;"></i></span>Add to cart</button>
                <button type="submit" class="btn btn-outline-primary btn-shadow d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="bi bi-heart"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Description and others -->
  <div class="border-top my-lg-3 py-5">
    <div class="container pt-md-2" id="reviews">
      <div class="row pb-3">
        <div class="col-lg-5 col-md-5">
          <h2 class="h3 mb-4"><?= $jumlah; ?> Reviews</h2>
          <div class="star-rating me-2">
            <?php if ($jumlah > 0) { ?>
              <?php $avgr = $avg->rating / $jumlah; ?>
              <?php if (is_float($avgr)) { ?>
                <?php for ($i = 0; $i < $avgr - 1; $i++) : ?>
                  <i class="bi-star-fill"></i>
                <?php endfor; ?>
              <?php } else { ?>
                <?php for ($i = 0; $i < $avgr; $i++) : ?>
                  <i class="bi-star-fill"></i>
                <?php endfor; ?>
              <?php } ?>
              <?php $sisa = 5 - $avgr; ?>
              <?php if ($sisa > 0) { ?>
                <?php for ($i = 0; $i < $sisa; $i++) : ?>
                  <i class="bi bi-star"></i>
                <?php endfor; ?>
              <?php } ?>
            <?php } else { ?>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
            <?php } ?>
          </div>
          <span class="d-inline-block align-middle" style="font-family: 'Poppins',sans-serif;"> <?php if ($jumlah > 0) echo floor($avgr) ?> Average Rating</span>
        </div>
        <div class="col-lg-7 col-md-7">
          <div class="d-flex align-items-center mb-2">
            <div class="text-nowrap me-3">
              <span class="d-inline-block align-middle text-muted">5</span>
              <i class="bi bi-star-fill fs-xs ms-1"></i>
            </div>
            <div class="w-100">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span class="text-muted ms-3">7</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="text-nowrap me-3">
              <span class="d-inline-block align-middle text-muted">4</span>
              <i class="bi bi-star-fill fs-xs ms-1"></i>
            </div>
            <div class="w-100">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-teal" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span class="text-muted ms-3">7</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="text-nowrap me-3">
              <span class="d-inline-block align-middle text-muted">3</span>
              <i class="bi bi-star-fill fs-xs ms-1"></i>
            </div>
            <div class="w-100">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span class="text-muted ms-3">5</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="text-nowrap me-3">
              <span class="d-inline-block align-middle text-muted">2</span>
              <i class="bi bi-star-fill fs-xs ms-1"></i>
            </div>
            <div class="w-100">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span class="text-muted ms-3">3</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="text-nowrap me-3">
              <span class="d-inline-block align-middle text-muted">1</span>
              <i class="bi bi-star-fill fs-xs ms-1"></i>
            </div>
            <div class="w-100">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span class="text-muted ms-3">1</span>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <!-- review list -->
        <div class="col-md-7">
          <div class="d-flex justify-content-start pb-5">
            <div class="d-flex align-items-center flex-nowrap">
              <label class=" fs-md text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                Filter :
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange active">All(102)</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange">Newest(40)</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange">Oldest</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange text-center"><i class="star-rating-icon bi-star-fill" style="font-size: 17px; margin-right: 3px;"></i>5</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange text-center"><i class="star-rating-icon bi-star-fill" style="font-size: 17px; margin-right: 3px;"></i>4</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange text-center"><i class="star-rating-icon bi-star-fill" style="font-size: 17px; margin-right: 3px;"></i>3</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange text-center"><i class="star-rating-icon bi-star-fill" style="font-size: 17px; margin-right: 3px;"></i>2</a>
                <a role="button" type="button" href="#" class="fs-sm ms-2 btn btn-orange text-center"><i class="star-rating-icon bi-star-fill" style="font-size: 17px; margin-right: 3px;"></i>1</a>

            </div>
          </div>
          <!-- Review -->
          <?php foreach ($review as $rev) { ?>
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="d-flex align-items-center me-4 pe-2">
                  <img class="rounded-circle" width="50" src="<?= base_url('assets'); ?>/img/1500-Foto01.jpg" alt="">
                  <div class="ps-3">
                    <h6 class="fs-sm mb-0"><?= $rev->firstname . " " . $rev->lastname; ?></h6>
                    <span class="fs-ms text-muted"> 1 week ago</span>
                  </div>
                </div>
                <div class="star-rating">
                  <?php for ($i = 0; $i < $rev->rating; $i++) : ?>
                    <i class="star-rating-icon bi-star-fill"></i>
                  <?php endfor; ?>
                  <?php $sisa = 5 - $rev->rating; ?>
                  <?php if ($sisa > 0) { ?>
                    <?php for ($i = 0; $i < $sisa; $i++) : ?>
                      <i class="star-rating-icon bi-star"></i>
                    <?php endfor; ?>
                  <?php } ?>
                  <div class="fs-ms text-muted">Test</div>
                </div>

              </div>
              <p class="fs-md"><?= $rev->review; ?></p>
              <div class="text-nowrap">
                <button class="btn-like" type="button"><i class="bi-hand-thumbs-up"></i>15</button>
                <button class="btn-like" type="button"><i class="bi-hand-thumbs-down"></i>2</button>
              </div>
            </div>
          <?php } ?>
        </div>
        <!-- Collapsed End -->
        <div class="col-lg-5 px-3 col-md-5 mt-2  mt-md-0 pt-md-0">
          <div class="bg-light p-3 rounded-3">
            <h3 class="h4 mb-4 pt-2">Write a review</h3>
            <form class="needs-validation" method="POST" action="<?= base_url('detail/tambahreview/') . $detail->id_product ?>">
              <div class="mb-3">
                <label class="form-label" for="review-rating" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500;">
                  Rating
                  <span class="text-danger">*</span>
                </label>
                <select class="form-select" required id="review-rating " name="rating">
                  <option>Choose Rating</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                </select>
                <?= form_error('rating', ' <small class="text-danger">', '</small>') ?>
                <div class="invalid-feedback">Please choose your rating</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="review-text" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500;">
                  Your Review
                  <span class="text-danger">*</span>
                </label>
                <textarea class="form-control" id="review-text" required rows="6" name="review"></textarea>
                <?= form_error('review', ' <small class="text-danger">', '</small>') ?>
                <div class="invalid-feedback">Please write a review</div>
              </div>
              <button class="mt-3 mb-2 p-2 btn btn-primary btn-shadow d-block w-100" type="submit" name="submitR">Submit a Review</button>
              <!-- toast -->
              <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
                <div id="Toast" class="toast bg-success hide align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body text-white">
                      Added to cart
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close">
                    </button>
                  </div>
                </div>
              </div>
              <!--  -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Desc end -->
  <!-- another product start-->
  <!-- blmjdi -->
  <!-- end -->

  <!-- Footer Start -->
  <section id="footer">
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md pt-5">
          <img class="mb-2" src="<?= base_url('assets'); ?>/img/Logo Navbar.png" width="180" height="auto" alt="" />
          <small class="d-block mb-3 text-muted">&copy; 2019–2021</small>
        </div>
        <div class="col-6 col-md pt-5">
          <h5>Contact Info</h5>
          <ul class="list-unstyled text-small">
            <li class="list-item" href="#">Call Us Free - 24/7</li>
            <li style="color: #3682f4; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700" class="list-item mt-1" href="#">3200 421 000</li>
            <li class="list-item" href="#">221 Makassar Road, Street 46, Makassar</li>
          </ul>
        </div>
        <div class="col-6 col-md pt-5">
          <h5>Information</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">About Us</a></li>
            <li><a class="link-secondary" href="#">My Account</a></li>
            <li><a class="link-secondary" href="#">Privacy Policies</a></li>
            <li><a class="link-secondary" href="#">Terms & Conditions</a></li>
            <li><a class="link-secondary" href="#">Customer Service</a></li>
          </ul>
        </div>
        <div class="col-6 col-md pt-5">
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
  <!-- Script -->
  <script src="<?= base_url('assets'); ?>/js/bootstrap.bundle.js" />
  </script>
  <script src="<?= base_url('assets'); ?>/js/index.js" />
  </script>
  <script src="<?= base_url('assets/js/libary.js') ?>"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
</body>

</html>