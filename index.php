<?php include('header.html'); ?>

<div class="row justify-content-center">

  <div class="col-sm-8" style="margin-top: 50px; margin-bottom: 50px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Overview</h2>
      <p class="lead">Subheading.</p>
    </div>
    <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 30px 30px 0 0;"></div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">JA Element</h2>
      <p class="lead">Subheading.</p>
    </div>
    <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 30px 30px 0 0;"></div>
  </div>
</div>

<?php include('footer.html'); ?>