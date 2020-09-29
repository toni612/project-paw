<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- AWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- API -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    
    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/styleToni.css">
    <script src="script/script.js"></script>
    
</head>

<body onload="drawMap()">
    <nav class="navbar navbar-custom navbar-expand-sm">
        <img src="asset/logo.png" width="50" height="50" alt="">
        <p class="navbar-brand-custom">Yuk Titip</p>
        <ul class="navbar-nav ml-auto"> 
            <li class="nav-item"> 
                <a class="nav-link" href="#"> 
                  Home 
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="contactUs.html"> 
                  Contact Us
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="aboutUs.html"> 
                  About Us 
                </a> 
            </li> 
            <li class="nav-item"> 
                <button class="btn" type="submit">Login</button>
            </li> 
            <li class="nav-item"> 
                <button class="btn" style="background-color: #F3C94A;" type="submit">Sign Up</button>
            </li> 
        </ul> 
    </nav>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Yuk Titip</h1>
            <p style="font-family: 'Roboto'; font-size: larger;">Yuk titip adalah platform penyedia jasa titip beli barang yang dijual diluar negeri. <br>
                Kami ada untuk mewujudkan keinginan anda. </p>
        </div>
    </div>

    <div class="card-container">
        <h1 class="pelayanan">Pelayanan Kami</h1>
        <div class="row">
            <div class="col-sm">
                <div class="card text-center w-75" style="left: 5rem; margin-top: 10rem;">
                    <div class="card-icon">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Customizable</h5>
                        <p class="card-text">Setiap pesanan dapat anda atur sesuai keinginan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center w-75" style="left: 4rem; margin-top: 10rem;">
                    <div class="card-icon">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Fast</h5>
                        <p class="card-text">Barang dapat sampai lebih cepat dari jasa pengiriman barang</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center w-75" style="left: 3rem; margin-top: 10rem;">
                    <div class="card-icon">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reliable</h5>
                        <p class="card-text">Kami dapat memastikan barang anda sampai tujuan dengan baik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-sm-3" style="margin-top: 3rem;">
                <img src="asset/footer logo.jpg" style="margin-left: 5rem;">
            </div>
            <div class="col-sm-3" style="margin-top: 2rem;">
                <h4>Explore More</h4>
                <br>
                <a style="color: black;" href="#">Home</a>
                <br><br>
                <a style="color: black;" href="contactUs.html">Contact Us</a>
                <br><br>
                <a style="color: black;" href="aboutUs.html">About Us</a>
            </div>
            <div class="col-sm-3" style="margin-top: 2rem;">
                <h4>Contact</h4>
                <br>
                <p>YukTitip@uajy.ac.id</p>
                <p>(+62)81123456789</p>
            </div>
            <div class="col-sm-3" style="margin-top: 2rem;">
                <h4>Visit Us</h4>

                <div id="map"></div>

            </div>
        </div>
    </div>


</body>

</html>