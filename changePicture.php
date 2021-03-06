<?php
    include('db.php');
?>

<?php
    //$id = $_GET['id'];

    if(isset($_POST['submit'])){
        move_uploaded_file($_FILES['file']['tmp_name'],"profile_images/".$_FILES['file']['name']);
        $q = mysqli_query($con,"UPDATE users SET image = '".$_FILES['file']['name']."' WHERE id = 1");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Change Profile</title>
    
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
    <script src="script/script.js"></script>
</head>
<body onload="checkImage()">

<nav class="navbar navbar-custom navbar-expand-sm">
        <img src="asset/logo.png" width="50" height="50" alt="">
        <p class="navbar-brand-custom">Yuk Titip</p>
        <ul class="navbar-nav ml-auto"> 
            <li class="nav-item"> 
                <a class="nav-link" href="www.google.com"> 
                  Home 
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="contactUs.php"> 
                  Contact Us
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="aboutUs.php"> 
                  About Us 
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="www.google.com"> 
                  <i class="fa fa-user fa-lg" aria-hidden="true" style="color: white;"></i> 
                </a> 
            </li> 
        </ul> 
    </nav>

    <div class="container">

        <?php
            $q = mysqli_query($con,"SELECT * FROM users where id=1");
            while($row = mysqli_fetch_assoc($q)){
                if($row['image'] == ""){
                    echo "<img src='profile_images/default.png' class='mx-auto d-block rounded-circle' alt='Cinque Terre' style='margin-top: 1rem;'>";
                } else {
                    echo "<img width='200' height='200' src='profile_images/".$row['image']."' class='mx-auto d-block rounded-circle' alt='Cinque Terre' style='margin-top: 1rem;'>";
                }
                echo "<br>";
            }
        ?>

        <div style="margin: 2rem 23rem;">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="image">
                <input type="submit" name="submit" id="insert">
            </form> 
        </div>

        <a href="profileUser.php" class="btn btn-primary" style="position:absolute; left:46%;">Back to Profile</a>
        
    </div>
    
</body>
</html>