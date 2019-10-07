<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
</head>
<body>


<div class="container" onclick="hide()">
    <form action="">
        <label>Name</label>
        <input type="text" name="" id="">
        <label>Email</label>
        <input type="text" name="" id="">
        <label>Your Query</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button>Send <i class="fa fa-send-o"></i></button>
    </form>
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
