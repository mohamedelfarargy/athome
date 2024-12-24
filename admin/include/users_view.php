<?php
$id =  $_SESSION['login'];
$select_row =$connect->query("SELECT * FROM users WHERE id ='$id'");
$row_user =$select_row ->fetch_assoc();
$priv= $row_user['priv'];

$priv_row = $connect->query("SELECT * FROM priv WHERE val ='$priv'");
$person =$priv_row->fetch_assoc();
$priv_value =$person['val'];
?>

<a href="?do=add" class="btn btn-primary m-2"<?php if($priv_value > 0){echo'hidden';}?>><i class="fa fa-user-plus" aria-hidden="true"></i> Add Users</a>
<table class="table table-bordered table-hover table-striped table-dark" style="width: 90%;margin:auto;">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Priv</th>
            <th>Gender</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
<?php
$counter = 0;
$Select_users = $connect->query("SELECT * FROM users");
foreach($Select_users as $row_users){

?>
        <tr>
            <td><?php echo++$counter ?> </td>
            <td><?php echo $row_users['name'] ?> </td>
            <td><?php echo $row_users['email'] ?> </td>
            <td><?php echo $row_users['address'] ?> </td>
            <td><?php echo $row_users['phone'] ?> </td>
            <td><?php if($row_users['priv'] == 0){echo "Admin";}elseif($row_users['priv'] == 1){echo "Editor";}
            elseif($row_users['priv'] == 2){echo "Owner";}elseif($row_users['priv'] == 3){echo "SuperVisor";}?> </td>
            <td><?php if( $row_users['gender'] ==0 ){echo "Male";}else{echo "Female";}?> </td>

            <td
            <?php
            if($priv_value==1&&$row_users['priv']<1){
              echo'hidden';
            }

            if($priv_value==2&&$row_users['priv']<2){
              echo'hidden';
            }
            if($priv_value==3&&$row_users['priv']<3){
              echo'hidden';
            }
            
            ?>
            
            
            >
                <a href="?do=edit&id=<?php echo$row_users['id']?>" class="btn btn-primary">Edit</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_users['id']?>">
Del <i class="fa fa-ban" aria-hidden="true"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$row_users['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:red; font-weight:bold;"><?php echo $row_users['name']?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure Del <span style="color:red; font-weight:bold;"><?php echo $row_users['name']?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete.php?id=<?php echo$row_users['id']?>" class="btn btn-primary">Confirm</a>
      </div>
    </div>
  </div>
</div>
            </td>
        </tr>
        <?php }?>

    </tbody>
</table>