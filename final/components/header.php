<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@1,700&family=Montserrat+Alternates:ital,wght@1,400&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>IDM 232 Final Project</title>
</head>

<body>

    <div class="topnav" id="myTopnav">

        <a href="" class="active">LOGO</a>

        <div class="menu">
            <a href="" class="menu__item">our cakes</a>
            <a href="" class="menu__item">custom order</a>
            <a href="" class="menu__item">about us</a>
            <a href="" class="menu__item">log in</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>