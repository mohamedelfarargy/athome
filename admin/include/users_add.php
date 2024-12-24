<div class="<?php if(isset($_GET['alert'])){echo"alert alert-danger";}?>" style="font-weight:bold; text-align:center; width:20%;margin:auto;">
<?php
if(isset($_GET['alert'])){
    echo $_GET['alert'];
}
?>
</div>
<form method="post" action="function/add_users.php" style="width: 90%;margin:auto;">
    <div class="form-group">

        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Name">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">password</label>
        <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" placeholder="Phone">
    </div>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
    <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
    <label class="form-check-label" for="inlineRadio2">Female</label>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1"> Address</label>
        <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" placeholder="Address">
    </div>
    <br>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Privliges</label>
        <select name="priv" class="form-control" id="exampleFormControlSelect1">
            <?php
            $Select_priv = $connect->query("SELECT * FROM priv");
            foreach($Select_priv as $row_priv){
            ?>
        <option value="<?php echo $row_priv['val'] ?>"><?php echo $row_priv['name'] ?></option>
        <?php } ?>
        </select>
    </div>
    <br>
    <input type="submit" name="submit" class="btn btn-primary " value="Confirm">
</form>
