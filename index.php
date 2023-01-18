<?php
include("koneksi/koneksi.php");
include('head.php');
?>

<header>
  <p>
    <b>INDOMARCO</b>
  </p>
</header>

<div class="container">
  <div class="row pt-3">
    <div class="col-6">

      <div class="carousel-container justify-content-center">
        <!-- data-bs-interval: the amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle -->
        <!-- data-bs wrap: whether the carousel should cycle continuously (i.e go from first to last and vice-versa) -->
        <div id="vertical-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
          <!-- Carousel slide indicators -->
          <ol class="carousel-indicators">
            <li data-bs-target="#vertical-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#vertical-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#vertical-carousel" data-bs-slide-to="2"></li>
            <!-- <li data-bs-target="#vertical-carousel" data-bs-slide-to="3"></li> -->
          </ol>
          <div class="carousel-inner">
            <!-- Carousel item represents each slide -->
            <div class="carousel-item active" style="background-image:url(1.jpg);">
              <div class="container">

              </div>
            </div>
            <div class="carousel-item" style="background-image:url(inventory-barang/gambar/idm2.jpg);">
            </div>
            <div class="carousel-item" style="background-image:url(inventory-barang/gambar/idm2.jpg);">
            </div>
            <div class="carousel-item" style="background-image:url(inventory-barang/gambar/idm2.jpg);">
            </div>
          </div>
        </div>
        <!-- Carousel buttons -->
        <button class="unclickable carousel-control-prev" type="button" data-bs-target="#vertical-carousel" data-bs-slide="prev">
          <span class="clickable carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="unclickable carousel-control-next" type="button" data-bs-target="#vertical-carousel" data-bs-slide="next">
          <span class="clickable carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <!-- <div id="carouselExampleCaptions" class="carousel slide vertical" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->

      <!-- <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
      <!-- <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/inventory-barang/gambar/idm3.jpg" class="idm">
          </div>
          <div class="carousel-item">
            <img src="/inventory-barang/gambar/idm1.jpg" class="idm">
          </div>
          <div class="carousel-item">
            <img src="/inventory-barang/gambar/idm2.jpg" class="idm">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div> -->

      <!-- <div class="col-6" style="color: white;
    text-align: start;
    padding-top: 5rem;
    padding-left: 3rem;">
        <h1>
          PT Indomarco Prismatama
        </h1>
        <h5>
          Berbekal dedikasi dan inovasi, Indomaret mengukuhkan statusnya sebagai perusahaan waralaba minimarket pertama dan terbesar di Indonesia
        </h5>
      </div>

    </div>
  </div> -->
      <?php
      include('bottom.php');
      ?>