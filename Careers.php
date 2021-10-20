<?php
    include"conn.php";
    session_start()
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>Narrows GP</title>
        <link rel="stylesheet" href ="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=STIX+Two+Text&display=swap" rel="stylesheet">
        <link rel="icon" type="image/ico" href="logo.ico"/>
    </head>
    <body style="background-color:black;">
        <div class="container">
            <div class="Title-Left">
                <h1>Narrows</h1>
            </div>
            <div class="Title-Right">
                <h1>Racing</h1>
            </div>
            <div class="Logo">
                <img src="logo.png">
            </div>
            
            <div class="Navbar">
                <a href="Home.php">Home</a>
                <a href="Gallery.php">Gallery</a>
                <a class ="active" href="Careers.php">Careers</a>
                <a href="general.php">Bulletin Board</a>
                <a href="Contacts.php">Contacts</a>
                <a href="login.php">Register/Log-in</a>
            </div>
            <div class="Arrow-Right">
                <div class="arrow">
                    <div class="line"></div>
                    <div class="point"></div>
                </div>
            </div>
            <div class="Arrow-Left">
                <div class="arrowL">
                    <div class="lineL"></div>
                    <div class="pointL"></div>
                </div>
            </div>
            <div class="Article">
                <h1>We here at Narrows Racing are interested in bringing new talents into the sport of Formula One.</h1>
                <h2>If you have an interest in joini</h2>
                <h3>Dont ask when</h3>
                <h6>because we have no idea</h6>
            </div>
            <div class="Footer">
                <p>Narrows GP Racing - 2021</p>
            </div>
        </div>
    </body>






</html>

