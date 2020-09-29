<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- AWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/styleToni.css">
</head>

<body>
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
                <a class="nav-link" href="aboutUs.html"> 
                  <i class="fa fa-user fa-lg" aria-hidden="true" style="color: white;"></i> 
                </a> 
            </li> 
        </ul> 
    </nav>

    <div class="container">
        <h1 style="margin: 1rem 0rem;">Contact Us</h1>

        <form action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">Nama Depan</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Nama Depan">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Nama Belakang</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Nama Belakang">
                </div>
            </div>
            <div class="form-group">
                <label for="inputOrg">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPhone">Nomor Telepon</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="08xxxxxxxxxx">
            </div>
            <div class="form-group">
                <label for="txtMessage">Message</label>
                <textarea class="form-control" id="txtMessage" rows="10" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>  
</body>

</html>