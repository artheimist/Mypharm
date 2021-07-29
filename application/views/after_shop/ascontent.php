<div class="py-3 bg-dark-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center text-white">
          <span class="heading-xxs letter-spacing-xl" style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px">Enjoy Our Final Year Discount Up to 30% 👀🤑🎉</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sidebar start -->
<section class="py-5">
  <div class="container">
    <class class="row">
      <div class="col-12 col-md-4 col-lg-3">
        <div class="flex-shrink-0 p-3" style="width: 280px">

          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">Category</h3>
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">All products</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Pharmacy</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Personal Care</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Family Care</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Accesories</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Fitness</a></li>
                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Health Devices</a></li>
              </ul>
            </li>
            <li class="border-bottom my-3"></li>
            <li class="mb-1">
              <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">Location</h3>
              <div class="form-check px-5 pb-1">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400"> Nearest </label>
              </div>
              <div class="form-check px-5 pb-1">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400"> farthermost </label>
              </div>

            </li>
            <li class="border-bottom my-3"></li>
            <li class="mb-1">
              <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">Price</h3>
              <p class="align-items-center rounded text-muted" style="font-family: 'Mulish', sans-serif; font-weight: 600">Set your price</p>
              <div class="d-flex align-items-center">
                <!-- input -->
                <input type="number" class="form-control form-control-xs" placeholder="Min Price" min="10" />
                <!-- divider -->
                <div class="text-gray-350 mx-2">-</div>
                <input type="number" class="form-control form-control-xs" placeholder="Max Price" max="350" />
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-8 col-lg-9">
        <?= $this->session->flashdata('message'); ?>
        <!--- MASIH JELEK NI GAN============================================== --->
        <div class=" col-12 text-md-end pb-4">
          <h3 class="text-md-start border-bottom py-2" style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 500">
            All Products</h3>
          <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle mt-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Sort By
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">New Arrival</a></li>
              <li><a class="dropdown-item" href="#">Highest Price - Lower Price</a></li>
              <li><a class="dropdown-item" href="#">Lower Price - Highest Price</a></li>
            </ul>
          </div>
        </div>
        <!-- PRoducts -->
        <div class="row">
          <?php foreach ($product as $product) { ?>
            <div class="col-md-4">
              <div class="card mb-4" style="width: auto">
                <div class="badge badge-blue card-badge card-badge-left text-uppercase">New</div>
                <div class="badge badge-green card-badge card-badge-left text-uppercase" style="margin-top: 30px;">30% Off</div>
                <!-- image -->
                <img src="<?= base_url('assets/upload/product/') . $product->gambar ?>" class="card-img-top" alt="" />
                <div class="card-body" style="margin-left: -1rem;">
                  <h5 class="card-title"><?= $product->nama_product; ?></h5>
                  <a href="#">
                    <p class="store mb-2" style="font-family:'Poppins',sans-serif; font-size: 14px; font-weight: 500;"><?= $product->firstname . " " . $product->lastname; ?></p>
                  </a>
                  <p class="card-text mb-2" style="color: #3682f4; font-size: 18px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                    <s class="text-muted" style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600"></s> Rp <?= $product->harga_product; ?>
                  </p>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star unchecked"></span><br />
                  <form action="<?= base_url('detail/addcart/') . $product->id_product ?>" class="" method="POST">
                    <input type="hidden" name="id" value="<?= $product->id_product ?>">
                    <input type="hidden" name="price" value="<?= $product->harga_product ?>">
                    <input type="hidden" name="nama" value="<?= $product->nama_product  ?>">
                    <input type="hidden" name="toko" value="<?= $product->firstname . " " . $product->lastname ?>">
                    <input type="hidden" name="gambar" value="<?= $product->gambar ?>">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="redirect" value="http://127.0.0.1/my_pharmfi/after_shop">
                    <button class="shop btn btn-primary mt-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to cart" type="submit"><i class="bi bi-cart3" style="font-size: 17px;"></i></button>
                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wishlist btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px; margin: 1px;"></span></button>
                    <a type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View details" href="<?= base_url('detail/index/') . $product->id_product; ?>" class="view btn btn-outline-primary mt-3"><span class="iconify" data-icon="bi:eye" data-inline="false" style="font-size: 20px; margin: 1px; align-self: center;"></span></a>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- Pagination -->
          <nav class="pt-5" aria-label="pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </div>
  </div>
</section>