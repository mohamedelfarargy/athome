<a href="?do=add" class="btn btn-primary m-2"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Product</a>
<table class="table table-bordered table-hover table-striped table-dark" style="width: 90%;margin:auto;">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>image</th>
            <th>Descrbtion</th>
            <th>Sale</th>
            <th>Seller</th>
            <th>Quantity</th>
            
            <th>Aval/NotAval</th>
            <th>Control</th>
        </tr>

    </thead>
    <tbody>
        <?php
        $counter = 0;
        $Select_products = $connect->query("SELECT * FROM product");
        foreach($Select_products as $row_products){
?>
        <tr>
            <td> <?php echo++$counter ?></td>
            <td> <?php echo $row_products['name']  ?></td>
            <td> <?php echo $row_products['price']  ?></td>
            <td><img src="images/<?php $img = explode('/',$row_products['images']);
            echo$img[0];?>" style="width:100px;height:90px;"></td>
            <td> <?php echo $row_products['description'] ?></td>
            <td> <?php echo $row_products['sale']  ?></td>
            <td> <?php echo $row_products['saller']  ?></td>
            <td> <?php echo $row_products['quan']  ?></td>
            <td> <?php if($row_products['avalable'] == 0){echo "aval";}else{echo "NotAval";} ?></td>
            <td>
                <a href="?do=edit&id=<?php echo$row_products['id']?>" class="btn btn-primary">Edit</a>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_products['id']?>">
Del <i class="fa fa-ban" aria-hidden="true"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$row_products['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:red; font-weight:bold;"><?php echo $row_products['name']?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure Del <span style="color:red; font-weight:bold;"><?php echo $row_products['name']?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_products.php?id=<?php echo$row_products['id']?>" class="btn btn-primary">Confirm</a>
      </div>
    </div>
  </div>
</div>
            </td>
        </tr>
        <?php  } ?>
    </tbody>
</table>