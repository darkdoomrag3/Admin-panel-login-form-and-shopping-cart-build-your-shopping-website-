

<?php include_once("config.php");?>
<?php include_once("header.php");?>
<?php include_once("Product-class.php");?>


<?php
global $con; 
if(isset($_POST["submit"])) {

$name=$_POST["name"];
$category=$_POST["category"];
$price=$_POST["price"];
$description=$_POST["description"];
$rate=$_POST["rate"];
$image=$_POST["image"];


$add=new product(0, $name , $category , $price , $description , $rate, $image);
$insert = $add->insert();

if (!$insert) {
  echo "Product not added.";
}
else {
  echo "Product added.";
}

}


?>


<h2>insert item</h2>
<br>
<div class="row">
    <div class="col"><!--form for insert-->

        <form method="post" action="" >
           

            <div class="form-group">
              <label for="formGroupExampleInput2">product name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Another input">
            </div>
          


    </div>
   
   
    <div class="col">

        
            <div class="form-group">
              <label for="formGroupExampleInput">product category</label>
              <input type="text" class="form-control" id="category" name="category" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">product price</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="Example input">
            </div>


            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">product description</span>
                </div>
                <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
              </div>
          


    </div>
    

    
    <div class="col">

        
            <div class="form-group">
              <label for="formGroupExampleInput">product rate</label>
              <input type="text" class="form-control" id="rate" name="rate" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">product image</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="Another input">
            </div>
          

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    submit
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Insert Items</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          are you sure to Edit this item?!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes
        </div>
      </div>
    </div>
  </div>




          </form>




    </div>
   
 </div>





               


                <?php include_once("footer.php");?>