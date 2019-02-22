<?php
include_once("config.php");
include_once("User-class.php");
include_once("header.php");

?>

<?php
global $con;
 if(isset($_POST["submit"])){

$name=$_POST["name"];
$file=$_POST["file"];
$type="";
$size="";

$img=new Img( 0, $name , $file , $type , $size);
$img_insert=$img->insert_img();

if(!$img_insert){
   echo "you can not insert";
}else {
   echo "image added";
}


 }


?>


<form method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlFile1">Insert your image</label>
    <input class="form-control" type="text" name="name" placeholder="Default input">
    <br>
    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
   
  </div>

  <button type="submit" class="btm btn-danger" name="submit">Submit </button>
</form>
      




<?php include_once("footer.php");?>