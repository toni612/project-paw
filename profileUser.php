<?php
    include('db.php');

    //$id = $_GET['id'];

    $query = mysqli_query($con, "SELECT * FROM users WHERE id=1");

    while($user_data = mysqli_fetch_assoc($query))
    {
        $nama = $user_data['nama'];
        $tgl = $user_data['tanggal_lahir'];
        $jk = $user_data['jenis_kelamin'];
        $email = $user_data['email'];
        $no_telp = $user_data['no_telp'];
        $provinsi = $user_data['provinsi'];
        $alamat = $user_data['alamat']; 
        $image = $user_data['image'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile User</title>
    
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
            $query = mysqli_query($con, "SELECT * FROM users WHERE id=1"); 
            while($row = mysqli_fetch_array($query))  
            {
                if($row['image'] == ""){
                    echo "<img src='profile_images/default.png' class='mx-auto d-block rounded-circle' alt='Cinque Terre' style='margin-top: 1rem;'>";
                } else {
                    echo "<img width='200' height='200' src='profile_images/".$image."' class='mx-auto d-block rounded-circle' alt='Cinque Terre' style='margin-top: 1rem;'>";
                }
            }    
        ?>
        <a href="changePicture.php" class="btn btn-primary" style="position:absolute; left:45.5%; margin-top:0.5rem;">Change Picture</a>

        <form action="" style="margin-top: 4rem;">
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNama" value=<?php echo $nama; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="inputTgl" value=<?php echo $tgl; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputJK" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputJk" value=<?php echo $jk; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail" value=<?php echo $email; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTelp" class="col-sm-3 col-form-label">No. Telp</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputTelp" value=<?php echo $no_telp; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputProv" class="col-sm-3 col-form-label">Provinsi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputProv" value=<?php echo $provinsi; ?> readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputAlamat" value=<?php echo $alamat; ?> readonly>
                </div>
            </div>

            <a href="profileUpdate.php" class="btn btn-primary" style="position:absolute; left:46%;">Change Profile</a>

        </form>
        
    </div>  
</body>

</html>