<?php
session_start();
include_once("config.php");
include_once("Product-class.php");
include_once("User-class.php");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <title>Admin panel</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light list-unstyled">
        <!--nav barr-->
       
       
        <a class="navbar-brand" href="index.php">Admin panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


<!--this section is chek when user is loge in can show her or him profile picture-->
<?php

$chek=new Session($user , $pass);
$chek_user=$chek->check_login();
if(!$chek_user){
    echo "you are not allow";
}else{

$show=new Img($id, $name ,$file ,$type , $size);
$row=$show->show_img();



}


?>


            <li class="media">
    <img src="<?php echo $row["name"]; ?>" class="mr-3" alt="...">
    <div class="media-body">
     
     
  </li>
                
                
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rejister
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="rejister.php">Submit Rejister</a>
                        <a class="dropdown-item" href="login.php">Login </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>

                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Addproduct.php">Add product</a>
                        <a class="dropdown-item" href="Remove.php">Remove product</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Edit.php">Edit product</a>
                    </div>

                </li>



                <li class="nav-item">
                    <a class="nav-link " href="changeimage.php">change profile image</a>
                </li>
            </ul>
           
           
           <!--------------------------------------search form----------------------------------------------------->
           
<?php

/*
  if(isset($_POST["search"]))
{

$search=product::search($name);




}
     
*/

?>
           
            <form class="form-inline my-2 my-lg-0" action="" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button name="search" id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>