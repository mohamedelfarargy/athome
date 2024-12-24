<form method="post" action="function/add_products.php" style="width: 90%;margin:auto;" enctype="multipart/form-data">
  <div class="form-group">

    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="imgs[]"  class="form-control" id="exampleInputEmail1" placeholder="Price" multiple>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descrbtion</label>
    <input type="text" name="descr"  class="form-control" id="exampleInputEmail1" placeholder="Descrbtion">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name="sale"  class="form-control" id="exampleInputEmail1" placeholder="Sale">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Seller</label>
    <input type="text" name="seller"  class="form-control" id="exampleInputEmail1" placeholder="Seller">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="text" name="quant"  class="form-control" id="exampleInputEmail1" placeholder="Quantity">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="avalble" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Aval</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="avalble" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">NotAval</label>
</div>
<br><br>

<div class="form-group">
<label for="exampleInputEmail1">Category</label>
<select class="custom-select" name="category">
<?php
$Select_catg =$connect->query("SELECT * FROM category");
foreach($Select_catg as $row_actg){
?>
        <option value="<?php echo$row_actg['id'] ?>"> <?php echo$row_actg['name'] ?></option>
        <?php } ?>
      </select>
</div>
<br><br>
  <input type="submit" name="submit" class="btn btn-primary mb-3" value="Confirm">
</form>