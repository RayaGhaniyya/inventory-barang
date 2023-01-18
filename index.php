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

      <div class="slide-wrapper">
        <input type="radio" name="slider" id="slider1" checked>
        <label for="slider1"></label>
        <div class="slide slide1"></div>

        <input type="radio" name="slider" id="slider2">
        <label for="slider2"></label>
        <div class="slide slide2"></div>

        <input type="radio" name="slider" id="slider3">
        <label for="slider3"></label>
        <div class="slide slide3"></div>
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
include('bottom.php');
?>