<?php

$id = $_GET['id'];

$Select_products = $connect->query("SELECT * FROM product WHERE id='$id'");
$row_products = $Select_products->fetch_assoc();
?>
<form method="post" action="function/edit_product.php" style="width: 90%;margin:auto;" enctype="multipart/form-data">
  <div class="form-group">

  <input type="hidden" name="id"  class="form-control" id="exampleInputEmail1" placeholder="id" value="<?php echo $row_products['id'];?>">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?php
    echo $row_products['name']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder="Price"  value="<?php
    echo $row_products['price']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="imgs[]"  class="form-control" id="exampleInputEmail1" placeholder="Price" multiple>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descrbtion</label>
    <input type="text" name="descr"  class="form-control" id="exampleInputEmail1" placeholder="Descrbtion" value="<?php
    echo $row_products['description']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name="sale"  class="form-control" id="exampleInputEmail1" placeholder="Sale" value="<?php
    echo $row_products['sale']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Seller</label>
    <input type="text" name="seller"  class="form-control" id="exampleInputEmail1" placeholder="Seller" value="<?php
    echo $row_products['saller']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="text" name="quant"  class="form-control" id="exampleInputEmail1" placeholder="Quantity" value="<?php
    echo $row_products['quan']; ?>">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="avalble" id="inlineRadio1" value="0" <?php if($row_products['avalable'] == 0){echo "checked";} ?>>
  <label class="form-check-label" for="inlineRadio1">Aval</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="avalble" id="inlineRadio2" value="1"<?php if($row_products['avalable'] == 1){echo "checked";} ?>>
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
        <option value="<?php echo$row_actg['id'] ?>" <?php if($row_actg['id'] ==$row_products['cat_id']){echo 'selected';}  ?>> <?php echo$row_actg['name'] ?></option>
        <?php } ?>
      </select>
</div>
<br>
  <input type="submit" name="submit" class="btn btn-primary mb-3" value="Confirm">
</form>
