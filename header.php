<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up & Joki Game</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="sidenav.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>

<div class="kepala">
    <span class="titik3" style="font-size:45px;cursor:pointer; margin-top: -14px;" onclick="openNav()">&#9776;</span>
    
        <!-- <div class="header_container">
            <div class="header__nav"> -->
                <div class="text-header" style="text-align: left;display: flex;">
                    <h1 style="margin-top: 17px;">Top Up & Joki Game</h1>
                    <p style="margin-top: 38px; margin-left: 20px;">Selamat datang di website Top Up & Joki Game</p>
                </div>
            </div>
        </div>
</div>

<body>
    

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "";
        } 
    </script>


</body>


