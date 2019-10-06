<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/photo.css">
    <title>Document</title>




</head>
<body>
<div class="background">
    <img src="images/blurred background.png" alt="">
    <div class="back-image"></div>
</div>

<!-- Slideshow container -->
<div class="body">
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->

        <div class="mySlides fade">

            <img src="images\architect photography.png" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="images\Fashion photography.png" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="images\Fashion photography.png" style="width:100%">

        </div>



        <!-- Next and previous buttons -->


    </div>
    <div class="buttons-counter">
        <div class="head"> <h1>Landscape Photography</h1> </div>
        <div class="counter"><span class="counter-1">01/</span>112</div>
        <div class="buttons">
            <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-play-circle" onclick="left()" id="lbtn" style="font-size:48px;color:rgb(103, 214, 248);transform:rotate(180deg)"></i></a>
            <a class="next" onclick="plusSlides(1)"><i class="fa fa-play-circle" onclick="right()" id="rbtn" style="font-size:48px;color:rgb(103, 214, 248);"></i></a>
        </div>

    </div>

</div>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
