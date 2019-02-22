<?php include_once("config.php"); ?>
<?php include_once("header.php"); ?>
<?php include_once("Product-class.php"); ?>


<?php
global $con;

$id;


if (isset($_GET["id"])) {

	$id = $_GET["id"];

}


if (isset($_POST["submit"])) {

    

	$name = $_POST["name"];


	$price = $_POST["price"];
	$rate = $_POST["rate"];

	$description = $_POST["description"];
	$category = $_POST["category"];

	$image = $_POST["image"];


	$update = new product($id, $name, $category, $price, $description, $rate, $image);
	$up = $update->update();

	if (!$up) {
		echo "Product can not edit.";
	} else {
		echo "Product edit.";
	}
}

$row = product::select($id);

?>


<h2>Edit item</h2>
<br>
<div class="row">
    <div class="col">
        <!--form for insert-->

        <form method="post" action="">

			<!-- From Group ID -->
           
            <div class="form-group">
            <label for="formGroupExampleInput">product ID <?php echo $row["id"];?></label>

</div>

            <div class="form-group">
                <label for="formGroupExampleInput2">product name</label>
                <?php echo " <input type='text' class='form-control' id='name' value='" . $row["name"] . "' name='name' placeholder='Example input'>"; ?>
            </div>



    </div>


    <div class="col">


        <div class="form-group">
            <label for="formGroupExampleInput">product category</label>
            
            <?php echo " <input type='text' class='form-control' id='category' value='" . $row["category"] . "' name='category' placeholder='Example input'>"; ?>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">product price</label>
            <?php echo " <input type='text' class='form-control' id='price' value='" . $row["price"] . "' name='price' placeholder='Example input'>"; ?>
        </div>


        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">product description</span>
            </div>
            <?php echo " <textarea <input type='text' class='form-control' id='description' value='" . $row["description"] . "' name='description' placeholder='" . $row["description"] . "'></textarea>"; ?>
        </div>

       

    </div>



    <div class="col">


        <div class="form-group">
            <label for="formGroupExampleInput">product rate</label>
            <?php echo " <input type='text' class='form-control' id='rate' value='" . $row["rate"] . "' name='rate' placeholder='Example input'>"; ?>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">product image</label>
            <?php echo " <input type='text' class='form-control' id='image' value='" . $row["image"] . "' name='image' placeholder='Example input'>"; ?>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            submit
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Items</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        are you sure to Edit this item?!!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Edit
                    </div>
                </div>
            </div>
        </div>



        </form>


    </div>

</div>








<?php include_once("footer.php"); ?>