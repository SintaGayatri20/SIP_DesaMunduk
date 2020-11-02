 <main>
     <!-- slider Area Start-->
     <div class="slider-area ">
         <!-- Mobile Menu -->
         <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?= base_url('vendor/'); ?>assets/img/hero/contact_hero.png">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="hero-cap text-center">
                             <h2>Our Packages</h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- slider Area End-->

     <!-- Favourite Places Start -->
     <div class="favourite-place place-padding">
         <div class="container">
             <!-- Section Tittle -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-tittle text-center">
                         <span>tourism</span>
                         <h2>HOTELS</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <?php foreach ($hotel as $h) : ?>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                         <div class="single-place mb-30">
                             <div class="place-img">
                                 <img src="<?php echo base_url('assets/img/' . $h['foto']) ?>" alt="">
                             </div>
                             <div class="place-cap">
                                 <div class="place-cap-top">
                                     <h3><a href="#"><?= $h['keterangan']; ?></a></h3>
                                     <p class="dolor"><?= $h['tarif']; ?><span>/ Per Person</span></p>
                                 </div>
                                 <div class="place-cap-bottom">
                                     <ul>
                                         <li><i class="far fa-calendar"></i><?= $h['tgl_upload']; ?></li>
                                         <li><i class="fas fa-map-marker-alt"></i><?= $h['lokasi']; ?></li>
                                     </ul>
                                 </div>
                                 <br>
                                 <center><a href="<?= base_url('user/formTransaksi'); ?>" class="btn border-btn">Keep with guide</a></center>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>

         </div>
     </div>
     </div>
     <!-- Favourite Places End -->

     <!-- Pagination-area Start -->
     <div class="pagination-area pb-100 text-center">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="single-wrap d-flex justify-content-center">
                         <nav aria-label="Page navigation example">
                             <ul class="pagination justify-content-start">
                                 <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted left-arrow"></span></a></li>
                                 <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                 <li class="page-item"><a class="page-link" href="#">02</a></li>
                                 <li class="page-item"><a class="page-link" href="#">03</a></li>
                                 <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Pagination-area End -->
 </main>