<?php include("header.php"); ?>

<div class="owl-carousel  owl-centered">
    <div class="item col-md-12">
        <img style="height:600px" src="assets\images\slider\calculator.jpg">
    </div>
    <div class="item">
        <img style="height:600px" src="assets\images\slider\car-accident.jpg">
    </div>
    <div class="item">
        <img style="height:600px" src="assets\images\slider\family.jpg">
    </div>
    <div class="item">
        <img style="height:600px" src="assets\images\slider\money.jpg">
    </div>
    <div class="item">
        <img style="height:600px" src="assets\images\slider\wheelchair.jpg">
    </div>

</div>


<script>
$(document).ready(function() {


    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        singleItem: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        navigation: true, // Show next and prev buttons
        responsiveClass: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        navText: ["<i class='text-primary ti-arrow-left'></i>Pre", "<i class='ti-arrow-right'>Next</i>"]
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })

});
</script>
<?php include("footer.php"); ?>