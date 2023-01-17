<?php
include("../koneksi/koneksi.php");
include('../head.php');
?>

<header>
  <p>
    <b>INDOMARCO</b>
  </p>
</header>

<div class="container">
  <div class="row pt-3">
    <div class="col-6">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="idm3.jpg" class="idm">
          </div>
          <div class="carousel-item">
            <img src="idm1.jpg" class="idm">
          </div>
          <div class="carousel-item">
            <img src="idm2.jpg" class="idm">
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
    </div>
    <div class="col-6" style="color: white;
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
</div>
<?php
include('../bottom.php');
?>