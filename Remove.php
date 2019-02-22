
    
<?php include_once("header.php");?>



<!--naav baar-->

<h2>insert item</h2>
<br>
<div class="row">
    <div class="col"><!--form for insert-->

        <form>
            <div class="form-group">
              <label for="formGroupExampleInput">product id</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">product name</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
          


    </div>
    <div class="col">

        
            <div class="form-group">
              <label for="formGroupExampleInput">product category</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">product description</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
          


    </div>
    <div class="col">

        
            <div class="form-group">
              <label for="formGroupExampleInput">product rate</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">product image</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
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
          are you sure to remove this item?!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>




          </form>




    </div>
   
 </div>

<?php include_once("footer.php");?>








