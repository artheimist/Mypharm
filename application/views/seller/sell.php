<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
  <meta name="author" content="AdminKit" />
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

  <link href="<?= base_url('assets/app.css') ?>" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
          <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.html"> <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span> </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="sell.html"> <i class="align-middle" data-feather="arrow-up"></i> <span class="align-middle">Sell</span> </a>
          </li>
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

        <form class="d-none d-sm-inline-block">
          <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="Search…" aria-label="Search" />
            <button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
          </div>
        </form>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="bell"></i>
                  <span class="indicator">4</span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">4 New Notifications</div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-danger" data-feather="alert-circle"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Update completed</div>
                        <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                        <div class="text-muted small mt-1">30m ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-warning" data-feather="bell"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Lorem ipsum</div>
                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-primary" data-feather="home"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Login from 192.186.1.8</div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-success" data-feather="user-plus"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">New connection</div>
                        <div class="text-muted small mt-1">Christina accepted your request.</div>
                        <div class="text-muted small mt-1">14h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a href="#" class="text-muted">Show all notifications</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="message-square"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                <div class="dropdown-menu-header">
                  <div class="position-relative">4 New Messages</div>
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" />
                      </div>
                      <div class="col-10 pl-2">
                        <div class="text-dark">Vanessa Tucker</div>
                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                        <div class="text-muted small mt-1">15m ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris" />
                      </div>
                      <div class="col-10 pl-2">
                        <div class="text-dark">William Harris</div>
                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason" />
                      </div>
                      <div class="col-10 pl-2">
                        <div class="text-dark">Christina Mason</div>
                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                        <div class="text-muted small mt-1">4h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman" />
                      </div>
                      <div class="col-10 pl-2">
                        <div class="text-dark">Sharon Lessman</div>
                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a href="#" class="text-muted">Show all messages</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>
              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="<?= base_url('assets/upload/') . $this->session->userdata('foto'); ?>" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark"><?= $this->session->userdata('firstname') . $this->session->userdata('lastname'); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content">
        <div class="container-fluid p-0">
          <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
              <h3><strong>Sell</strong> Your Product</h3>
            </div>
            <div class="col-auto ml-auto text-right mt-n1">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                  <li class="breadcrumb-item"><a href="#">Sell</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Upload</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-12">
              <?= $this->session->flashdata('message'); ?>
              <!--ini yg diubah controller seller-->
              <div class="card">
                <div class="card-body">
                  <form action="<?= base_url('Seller/tambah_product') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label class="form-label">Product Name</label>
                      <input type="text" class="form-control" name="product_name" placeholder="Product Name" />
                      <?= form_error('product_name', ' <small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Price</label>
                      <input type="text" class="form-control" placeholder="Price" name="product_price">
                      <?= form_error('product_price', ' <small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Stok</label>
                      <input type="number" class="form-control" placeholder="Stok" name="stok">
                      <?= form_error('stok', ' <small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Description</label>
                      <textarea class="form-control" placeholder="Description" rows="1" name="product_deskripsi"></textarea>
                      <?= form_error('product_deskripsi', ' <small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label w-100">Input your product image</label>
                      <input type="file" name="userfile">
                      <p class="form-text mt-3 text-muted" style="font-size: 13px">250x250px for better resolution</p>
                      <p class="form-text mt-1 text-muted" style="font-size: 13px">Format : .jpg, .png</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-left">
            </div>
            <div class="col-6 text-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Support</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Help Center</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="<?= base_url('assets/js/app.js') ?>"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
      var gradient = ctx.createLinearGradient(0, 0, 0, 225);
      gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
      gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
      // Line chart
      new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales ($)",
            fill: true,
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [2115, 1562, 1584, 1892, 1587, 1923, 2566, 2448, 2805, 3438, 2917, 3327],
          }, ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          tooltips: {
            intersect: false,
          },
          hover: {
            intersect: true,
          },
          plugins: {
            filler: {
              propagate: false,
            },
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.0)",
              },
            }, ],
            yAxes: [{
              ticks: {
                stepSize: 1000,
              },
              display: true,
              borderDash: [3, 3],
              gridLines: {
                color: "rgba(0,0,0,0.0)",
              },
            }, ],
          },
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Pie chart
      new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
          labels: ["Chrome", "Firefox", "IE"],
          datasets: [{
            data: [4306, 3801, 1689],
            backgroundColor: [window.theme.primary, window.theme.warning, window.theme.danger],
            borderWidth: 5,
          }, ],
        },
        options: {
          responsive: !window.MSInputMethodContext,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          cutoutPercentage: 75,
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "This year",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
            barPercentage: 0.75,
            categoryPercentage: 0.5,
          }, ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false,
              },
              stacked: false,
              ticks: {
                stepSize: 20,
              },
            }, ],
            xAxes: [{
              stacked: false,
              gridLines: {
                color: "transparent",
              },
            }, ],
          },
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var markers = [{
          coords: [31.230391, 121.473701],
          name: "Shanghai",
        },
        {
          coords: [28.70406, 77.102493],
          name: "Delhi",
        },
        {
          coords: [6.524379, 3.379206],
          name: "Lagos",
        },
        {
          coords: [35.689487, 139.691711],
          name: "Tokyo",
        },
        {
          coords: [23.12911, 113.264381],
          name: "Guangzhou",
        },
        {
          coords: [40.7127837, -74.0059413],
          name: "New York",
        },
        {
          coords: [34.052235, -118.243683],
          name: "Los Angeles",
        },
        {
          coords: [41.878113, -87.629799],
          name: "Chicago",
        },
        {
          coords: [51.507351, -0.127758],
          name: "London",
        },
        {
          coords: [40.416775, -3.70379],
          name: "Madrid ",
        },
      ];
      var map = new JsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
          initial: {
            r: 9,
            strokeWidth: 7,
            stokeOpacity: 0.4,
            fill: window.theme.primary,
          },
          hover: {
            fill: window.theme.primary,
            stroke: window.theme.primary,
          },
        },
      });
      window.addEventListener("resize", () => {
        map.updateSize();
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: '<span class="fas fa-chevron-left" title="Previous month"></span>',
        nextArrow: '<span class="fas fa-chevron-right" title="Next month"></span>',
      });
    });
  </script>
</body>

</html>