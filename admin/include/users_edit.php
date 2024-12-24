<?php
$id=$_GET['id'];
$Select_users=$connect->query("SELECT * FROM users WHERE id ='$id'");

$row_users=$Select_users->fetch_assoc();

?>
<form method="post" action="function/edit_users.php" style="width: 90%;margin:auto;">

<input type="hidden" name="id"  class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?php echo$row_users['id']?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?php echo$row_users['name']?>">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Password">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?php echo$row_users['email']?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="<?php echo$row_users['phone']?>" class="form-control" id="exampleInputEmail1" placeholder="Phone">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0"<?php if($row_users['gender'] ==0){echo "checked";}?> >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1"<?php if($row_users['gender'] ==1){echo "checked";}?> >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="<?php echo$row_users['address']?>" class="form-control" id="exampleInputEmail1" placeholder="Address">
  </div>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0"<?php if($row_users['priv'] ==0){echo "selected";}?> >Admin</option>
      <option value="1"<?php if($row_users['priv'] ==1){echo "selected";}?>>Editor</option>
      <option value="2"<?php if($row_users['priv'] ==2){echo "selected";}?>>Owner</option>
      <option value="3"<?php if($row_users['priv'] ==3){echo "selected";}?>>SuperVisor</option>


    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary mb-3" value="Confirm">
</form>
