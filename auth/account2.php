<?php


?>





<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account|Profil</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body>


<!-- NAVBAR SECTION STARTS -->
<header>
    <a href="#" class="logo"> Agat Bibit</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#home">Menu</a>
        <a href="#about">About</a>
        <a href="#home">Review</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-user"></i></a>
        <a href="#" class="fas fa-sign-out-alt"></a>

    </div>

</header>

<!-- NAVBAR SECTION ENDS-->

<!-- Search Form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search product..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
<!-- search form section ends-->



<!-- CONTAINER PROFIL SECTION STARTS -->

    <section class="container" id="container">

        <h1 class="heading"> My Profil </h1>
        <h3 class="sub-heading"> Manage your profile information to control, protect and secure your account </h3>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

            <form  method="post">
                <div class="inputBox">
                    <div class="input">
                        <span>First Name</span>
                        <input type="text" placeholder="enter your first name">
                    </div>



                    <div class="input">
                        <span>Last Name</span>
                        <input type="text" placeholder="enter your last name">
                    </div>
                </div>

                <div class="inputBox">
                    <div class="input">
                        <span>Your Email</span>
                        <input type="text" name="email" value=" ">


                        <span>Birth</span>
                        <input type="date" placeholder="Enter your Phone">
                            <span>Phone</span>
                            <input type="text" placeholder="Enter your Phone">
                    </div>

                    <!-- <div class="gender-details">
                        <span class="gender-title">Gender</span>
                        <div class="form-check">
                            <label for="">
                                <span class="dot-one"></span>
                                <span class="gender">Male</span>
                                </span>
                            </label>
                            <label for="">
                                <span class="dot-one"></span>
                                <span class="gender">Female</span>
                                </span>
                            </label>
                            <label for="">
                                <span class="dot-one"></span>
                                <span class="gender">Prefer not to say</span>
                                </span>
                            </label>

                        </div>
                    </div> -->

                        <div class="input">
                        <span>Your Address</span>
                        <textarea name="address" placeholder="enter your address" id="address"  rows="6"></textarea>
                    </div>
                </div>

                <input type="submit" value="Save and Update" class="btn">

            </form>
        </section>

<!-- CONTAINER PROFIL SECTION ENDS -->


    </body>
</html>
