
<?php 

include_once("config.php");
include_once("header.php");
include_once("Product-class.php");

include_once("header.php");

if(isset($_GET["id"]))
{
    $id=$_GET["id"];   
$del=product::delet($id);



}


global $con;


$select=product::select_all();


?>





<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col" class="table-dark">Id</th>
      <th scope="col" class="table-dark" >  Name</th>
      <th scope="col" class="table-dark" >Category</th>
      <th scope="col" class="table-dark">Price</th>
      <th scope="col" class="table-dark" >Description</th>
      <th scope="col" class="table-dark" >Rate</th>
      <th scope="col" class="table-dark" >Image</th>
      <th scope="col" class="table-danger" >Delet</th>
      <th scope="col" class="table-primary" >Edit</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($select as $row) {

    ?>
    <tr>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td class="bg-success"><?php echo $row["name"];?></td>
      <td class="bg-warning"><?php echo $row["category"];?></td>
      <td class="bg-danger"> <?php echo $row["price"];?> </td>
      <td class="bg-info"> <?php echo $row["description"];?>  </td>
      <td  class="bg-primary"> <?php echo $row["rate"];?>  </td>
      <td  class="table-info"> <?php echo $row["image"];?>  </td>
<td>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target= <?php echo "#deleteModal".$row["id"];?> >
    Delet
  </button>
  
 <!--Delet modal------------------------------------------------------------------------------------------>
  <div class="modal fade" id=<?php echo "deleteModal" . $row["id"]; ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Delet Items</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          are you sure to Delet this item?!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php echo " <a class='btn btn-danger'  href='Edit.php?id=" . $row['id'] ."' ><input type='submit' name='submit' href='Edit.php?id=" . $row['id'] ."' class='btn btn-primary'></a>";?>
        </div>
      </div>
    </div>
  </div>

</td>


<td>
<!--edit modal------------------------------------------------------------------------------------------>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo "#editModal" . $row["id"]; ?>>
    Edit
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id=<?php echo "editModal" . $row["id"]; ?> tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit">Edit Items</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          are you sure to Edit this item?!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php echo " <a href='Editproduct.php?id=".$row['id']."'  class='btn btn-primary'>Edit</a>";?>
        </div>
      </div>
    </div>
  </div>

     </td>




    </tr>
    <?php }; ?>
   
 
 
  </tbody>
</table>



<?php include_once("footer.php");?>
