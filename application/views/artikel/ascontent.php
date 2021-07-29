<!-- sidebar start -->
<section class="py-5">
    <div class="container">
        <class class="row">
            <div class="col-12 col-md-8 col-lg-9">
                <?= $this->session->flashdata('message'); ?>
                <!--- MASIH JELEK NI GAN============================================== --->
                <div class=" col-12 text-md-end pb-4">
                    <h3 class="text-md-start border-bottom py-2 titlearticle" style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 500">
                        All Artikel</h3>
                    <div class="dropdown sortarticle">
                        <button class="btn btn-outline-primary dropdown-toggle mt-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">New Arrival</a></li>
                            <li><a class="dropdown-item" href="#">Highest Price - Lower Price</a></li>
                            <li><a class="dropdown-item" href="#">Lower Price - Highest Price</a></li>
                        </ul>
                    </div>
                </div>
                <!-- PRoducts -->
                <div class="row contentarticle">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-1 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="<?= base_url('assets/img/cek1.jpeg') ?>" style="height:200px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="tag-container d-flex ">
                                        <button class="tag mb-2 me-2">GANGGUAN TIDUR</button>
                                    </div>
                                    <a class="linkarticle" href="<?= base_url('artikel/detailartikel') ?>">
                                        <p class="h5 linkarticle">Tips Ampuh untuk Menghilangkan Rasa Ngantuk</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?= base_url('assets/img/cek2.jpeg') ?>" style="height:200px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="tag-container d-flex ">
                                        <button class="tag mb-2 me-2">CORONAVIRUS</button>
                                    </div>
                                    <a class="linkarticle" href="">
                                        <p class="h5 linkarticle">Ibu Hamil Penting untuk Lakukan Tes Swab Antigen</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?= base_url('assets/img/cek3.jpeg') ?>" style="height:200px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="tag-container d-flex ">
                                        <button class="tag mb-2 me-2">CORONAVIRUS</button>
                                    </div>
                                    <a class="linkarticle" href="">
                                        <p class="h5 linkarticle">Vaksinasi Diundur, Ini Kabar Uji Klinis Vaksin Corona Bandung</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

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
            <div class="col-12 col-md-4 col-lg-1 filterarticle">
                <div class="flex-shrink-0 p-3" style="width: 280px">
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">Most View Category</h3>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Diabetes</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Jantung</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Stroke</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Kehamilan</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Hipertensi</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Anemia</a></li>
                                <li><a href="#" class="link-dark rounded" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Kolestrol</a></li>
                            </ul>
                        </li>
                        <li class="border-bottom my-3"></li>
                        <li class="mb-1 ">
                            <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">View Article</h3>
                            <div class="form-check px-5 pb-1">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400"> Sort by newest </label>
                            </div>
                            <div class="form-check px-5 pb-1">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400"> Sort by oldest </label>
                            </div>
                        </li>
                        <li class="border-bottom my-3"></li>
                    </ul>
                </div>
            </div>
        </class>
    </div>
    </div>
</section>