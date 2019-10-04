<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/firstpage.css">
    <script>
        function show(){
            var menu=document.getElementById('menu');
            var navbar=document.getElementById('navbar');

            navbar.style.display="block";

        }

        function hide(){
            var menu=document.getElementById('menu');
            var navbar=document.getElementById('navbar');

            navbar.style.display="none";
        }
    </script>
    <title>Document</title>
</head>
<body >

<div class="main" onclick="hide()">
    <div class="container">
        <img src="images/portrait.png" alt="">
    </div>

    <div class="aboutme">
        <h1>About me</h1>
        <div class="about">
            <div class="logopic">
                <img src="images\mans pic.png" alt="">
            </div>
            <div class="para">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
            </div>
        </div>
    </div>

    <div class="portfolio">
        <h1>Portfolio</h1>
        <div class="portfolio-album">
            <img src="images\Wedding photography.png" alt="">



            <img src="images\Fashion photography.png" alt="">



            <img src="images\Product photography.png" alt="">



            <img src="images\architect photography.png" alt="">
        </div>
    </div>


</div>
<div class="footer">
    <div class="address">
        <span>Our Address: <br/> Lovely Professional University</span>

        <span>Call Us: <br/> 8989898989</span>

        <span>Send Us a Mail: <br/>srijan.sijngh.1232@gmail.com</span>

    </div>
</div>

<div class="header" >
    <div class="logo">

    </div>

    <div class="navbar" id="navbar" >
        <a href="" class="active">Home</a>
        <a href="">Team</a>
        <a href="">Contact</a>
    </div>
    <div class="menubar" id="menu" onclick="show()">
        <span></span>
        <span></span>
        <span></span>
    </div>


</div>
</body>
</html>
