<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/style.css">
    <title>W Writes!</title>
</head>

<body>
    <nav class="navbar background h-nav-resp" id="mynav">
        <ul class="nav-list v-class-resp">
            <div class="logo">
                <img src="img1/W_Writes.jpg" alt="Logo">
            </div>
            <li>
                <a href="Home1.php">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#footer">Also See</a>
            </li>
            <li>
                <a href="../../blog/index.html">Blog</a>
            </li>
            <li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScRl2oLARzzn0PIhVXdE8sJ2ZS0-NpSKv-XLo7AUa41b-tF5g/viewform">Work
                    With Us</a>

            </li>
            <li class="item">
                <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
            </li>
        </ul>
        <!-- <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div> -->
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="background firstSection" id="home">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">W Writes!</p>
                <p class="text-small">Where the world writes!</p>
                <div class="button">
                    <a href="../../loginphp/logout.php"> <button class="btn">Log Out</button></a>
                </div>

            </div>

        </div>
    </section>

    <section class="section" id="about">
        <div class="para">
            <div class="Heading">
                <a class="sectionTag text-big">About Us</a>
            </div>

            <a class="sectionSubTag text-small">
                <p>
                    People tend to think that "About Us" pages have to sound formal to gain credibility and trust. But most people find it easier to trust real human beings, rather than a description that sounds like it came from an automaton.
                </p>
                <br>
                <p>
                    At <b><i>W Writes!</i></b> we aim to give a platform to each and every person in this world. So that, they can write, and have a new door, open towards the world.
                </p>
                <br>
                <p>
                    1) Get to know about what's the world thinking.👀
                </p>
                <p>
                    2) You write, everyone reads!
                </p>
                <p>
                    3) Increase Knowledge by knowing different POVs.
                </p>
            </a>
        </div>
        <!-- <div class="thumbnail">
            <img src="Img1/Logo.jpg" alt="Logo" class="imgFluid">
        </div> -->
    </section>

    <hr>

    <div class="section section-left">
        <div class="para">
            <div class="Heading">
                <a class="sectionTag text-big">Benefits of W Writes! ⏳:</a>
            </div>

            <a class="sectionSubTag text-small">
                <p>Guidance in ML, AI, Development, Cybersecurity, Designing, Coding and DSA, Communication skills, Crypto, Finance related fields through blogs</p>
                <br>
                <p>So what are you waiting for, stand apart, and be a part of this wonderful community!</p>
                <br>
                <h4>
                    Benefits:
                </h4>
                <br>
                <p>
                    1) Get to know about what's the world thinking.👀
                </p>
                <p>
                    2) You write, everyone reads!
                </p>
                <p>
                    3) Increase Knowledge by knowing different POVs.
                </p>
            </a>
        </div>
        <div class="thumbnail">
            <img src="img1/download.jfif" alt="Logo" class="imgFluid">
        </div>
    </div>


    <hr>

    <div class="footer" id="footer">
        <section class="footer-div">
            <a href="Homepage.html">
                <img src="img1/W_Writes_Small.jpg " alt="Logo ">
            </a>
        </section>
        <div class="footer-div-right ">
            <a href="https://www.instagram.com " target="_blank ">
                <img src="Img1/Instagram.png " class="footer-image ">
            </a>
            <a href="https://www.youtube.com" target="_blank ">
                <img src="Img1/YouTube.png " class="footer-image ">
            </a>
            <a href="https://www.linkedin.com" target="_blank ">
                <img src="Img1/LinkedIn.png " class="footer-image ">
            </a>
            <a href="https://discord.com" target="_blank ">
                <img src="Img1/Discord.png " class="footer-image ">
            </a>
        </div>


    </div>
    <script type="text/javascript" src="js1/resp.js"></script>

</body>

</html>