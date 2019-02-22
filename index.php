<?php include_once("header.php"); ?>
<?php include_once("Product-class.php"); ?>
<?php include_once("config.php"); ?>


<!--naav baar-->

<div class="container">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/1.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="image/4.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="image/3.jpg" alt="New York" width="1100" height="500">
            </div>

            <div class="carousel-item">
                <img src="image/5.jpg" alt="New York" width="1100" height="500">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<br>


<!--select by category-->

<?php

global $con;

$category = "";
$rowCount = "";

$all_cats = product::category_all($category);

?>


<div class="container">
    <div class="row">
        <div class="col">


            <form method="post" action="">

                <div class="form-group">
                    <label for="cat">select category</label>
                    <select class="form-control" id="cat" name='cat'>

                        <?php
                        while ($row = product::category_next($all_cats)) {
                            ?>

                        <option> <?php echo $row["category"]; ?> </option>

                        <?php 
                    } ?>


                    </select>

                </div>

                <button type="submit" name="submit" class="btn btn-danger">submit</button>
            </form>



        </div>
    </div>
</div>



<br>

<!--item show with category-->

<?php

if(isset($_POST["submit"]))
{
    $cat = $_POST['cat'];

    $show_cat=product::show_cat($cat);

?>


<div class="container">
    <h2>Product Detail</h2>
    <br>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>



       
        <tbody>
       
        <?php 
        while ($row = product::category_next($show_cat)) {  ?>  
           
            <tr>
                <td><?php echo $row["name"];?>  </td>
                <td><?php echo $row["description"];?> </td>
                <td><?php echo $row["price"];?>  </td>
            </tr>
    
        <?php } ?>
    
        </tbody>
    </table>
</div>


<div class="container">
    <div class="row">
        <div class="col">
        
        
        </div>
    </div>
</div>



<?php }?>







 <?php  include_once("footer.php"); ?>