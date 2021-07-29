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
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/style.css" />
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/login.css" />

  <title>MyPharm-Login</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets'); ?> /img/Frame 32.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
  <section class="form my-5">
    <div class="container">
      <div class="row align-items-center g-0">
        <div class="col-lg-6">
          <img src=" <?= base_url('assets'); ?> /img/Login.png" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 px-5 pt-5">
          <?= $this->session->flashdata('message'); ?>
          <h1 style="font-size: 38px; font-family: 'Mulish', sans-serif; font-weight: 700" class="py-2">Login</h1>
          <h4 style="color: #c3c3c3; font-size: 18px; font-family: 'Mulish', sans-serif; font-weight: 600" class="pb-4">Buy Medicine Made Easy</h4>
          <form method="post" action="<?= base_url('auth'); ?>">
            <div class="form-row">
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" placeholder="contoh@yahoo.com" id="email" value="<?= set_value('email'); ?>" class="form-control rounded-3" name="email" />
                <?= form_error('email', ' <small class="text-danger">', '</small>') ?>
              </div>
            </div>
            <div class="form-row">
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" placeholder="minimun 8 characters" class="form-control rounded-3" name="Password">
                <?= form_error('Password', ' <small class="text-danger">', '</small>') ?>
              </div>
            </div>
            <div class="form-row">
              <div class="mb-2">
                <input type="checkbox" name="connected" class="form-check-input" />
                <label for="connected" class="form-check-label">Remember Me</label>
              </div>
              <div class="form">
                <div class="d-grid my-4">
                  <button type="submit" class="btn btn-primary rounded-3">Login</button>
                </div>
              </div>
              <div class="form">
                <div class="row text-center">
                  <div style="color: #c2c2c2; font-size: 16px; font-family: 'Mulish', sans-serif">Or Sign in With</div>
                </div>
                <div class="form" style="margin: 24px">
                  <div class="d-grid">
                    <a class="btn btn-outline-primary rounded-3"><span class="iconify" data-inline="false" data-icon="grommet-icons:google" style="margin-right: 8px; font-size: 24px"></span> Sign in with Google</a>
                  </div>
                </div>
              </div>
            </div>
            <p>Don't have an account? <a href="<?= base_url('auth/register'); ?>">Create an Account</a></p>
            <p>Forgot your password? <a href="#">Click Here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>