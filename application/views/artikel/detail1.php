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
          <h2 class="mt-3">Tips Ampuh untuk Menghilangkan Rasa Ngantuk</h2>
          <div class="tag-container d-flex ">
            <button class="tag py-2 px-2 me-2">GANGGUAN TIDUR</button>
          </div>
          <!-- Gallery -->
          <div class="col-lg-12 pe-lg-4 pe-md-3  pt-lg-4 align-center d-flex justify-content-center">
            <div class="product-gallery">
              <div class="product-gallery-preview order-sm-2 ">
                <div class="product-gallery-preview-item pb-4 " id="first">
                  <img src="<?= base_url('assets/img/cek1.jpeg') ?>" alt="product image" />
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p>“Nyatanya, bukan hanya mengonsumsi secangkir kopi saja lho yang bisa menghilangkan rasa kantuk. Kamu bahkan bisa mengusirnya hanya dengan melakukan beberapa langkah sederhana.”

              Salah satu langkah mujarab untuk menghilangkan rasa kantuk adalah dengan mencukupi waktu tidur. Idealnya, orang dewasa harus mencukupi waktu tidur selama 7–9 jam setiap malam jika tidak ingin kantuk menyerang di siang hari. Lantas, bagaimana jika kantuk datang di siang hari? Berikut ini beberapa langkah sederhana untuk menghilangkan rasa ngantuk:
              <br>
              1. Tidur Siang <br> <br>
              tidur siang yang cukup
              Untuk mendapatkan manfaatnya, pastikan tidur siang dilakukan di bawah jam 3 sore. Jika lebih dari itu, jam tidur malam bisa saja terganggu. Jangan lupa untuk setel alarm agar kamu bisa melanjutkan kegiatan setelahnya.
              <br><br>
              2. Minum Air Putih
              <br><br>
              minum air putih
              Lelah menjadi salah satu pemicu kantuk. Penyebabnya sendiri karena tubuh yang tidak terhidrasi dengan baik. Untuk menghilangkan rasa ngantuk, disarankan untuk mengonsumsi cukup air putih untuk menormalkan sel-sel tubuh, sehingga metabolisme pun dapat berjalan dengan lancar.
              <br><br>
              3. Mencuci Muka
              <br><br>
              mencuci muka
              Mencuci muka dengan air dingin menjadi tips menghilangkan rasa ngantuk selanjutnya. Kamu bisa melakukan cara ini sesering mungkin untuk menghilangkan rasa lelah pada mata dan membangkitkan kembali semangat untuk beraktivitas.
              <br><br>
              4. Sarapan Pagi
              <br><br>
              sarapan pagi
              Seperti ulasan sebelumnya, lelah menjadi salah satu pemicu kantuk. Saat kamu melewatkan sarapan pada pagi hari, bukan hanya rasa lapar yang datang lebih cepat. Kamu pun lebih mudah lelah karena kehabisan energi, sehingga rasa kantuk pun datang.
              <br><br>
              5. Camilan Sehat<br><br>

              cemilan sehat
              Rasa lapar berlebihan yang menjadi pemicu kantuk dapat diatasi dengan mengonsumsi camilan sehat, seperti buah-buahan. Buah yang direkomendasikan, yaitu pisang, alpukat, apel, pir, dan lain-lain. Sebaiknya hindari buah citrus (buah yang memiliki rasa asam).
              <br><br>
              6. Olahraga Ringan<br><br>

              olahraga ringan
              Olahraga mampu meningkatkan kualitas tidur di malam hari, sehingga rasa cemas dan stres pun dapat dicegah. Jika sudah memiliki kualitas tidur yang baik, kamu pun akan terhindar dari rasa kantuk saat siang hari.
              <br><br>

              Jika beberapa langkah tersebut tidak efektif untuk menghilangkan rasa ngantuk, cobalah untuk mengonsumsi minuman berkafein, seperti kopi dan teh. Namun, jika kamu mengidap gangguan kesehatan yang mengharuskan untuk membatasi asupan kafein, diskusikan terlebih dulu dengan dokter sebelum mengonsumsinya, ya.

              <br><br>
              Referensi: <br>
              Johnston Health Care. Diakses pada 2021. 6 Benefits of Drinking Water. <br>
              Northwestern Medicine. Diakses pada 2021. 7 Ways to Wake Up Without Coffee. <br>
              WebMD. Diakses pada 2021. How to Stay Awake Naturally. <br>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Description and others -->

  <div class="row pt-4">
    <!-- review list -->
    <div class="col-md-7">


      </p>

    </div>
    <!-- Collapsed End -->


    <!--  -->


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