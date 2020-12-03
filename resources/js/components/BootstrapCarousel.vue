<template>
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#home-carousel" data-slide-to="1"></li>
      <li data-target="#home-carousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="assets/chicken.jpeg"
          alt="Los Angeles"
          width="1100"
          height="500"
        />
      </div>
      <div class="carousel-item">
        <img src="assets/hamburger.jpeg" alt="Chicago" width="1100" height="500" />
      </div>
      <div class="carousel-item">
        <img src="assets/pizza.jpeg" alt="New York" width="1100" height="500" />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#home-carousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</template>

<script>
export default {
  name: "BootstrapCarousel"
};
</script>

<style scoped>
.carousel img {
  top: 0;
  left: 0;
  min-width: 100%;
  height: auto;
  width: auto;
}
</style>
