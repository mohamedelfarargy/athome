<table class="table table-bordered table-hover table-striped table-dark" style="width: 90%;margin:auto;">
    <thead>
        <tr>
            <th>id</th>
            <th>Full Name</th>
            <th>EMail</th>
            <th>Subject</th>
            <th>read/unread</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cout = 0;
        $Select_massages = $connect->query("SELECT * FROM massages");
        foreach($Select_massages as $row_massages){

       
        ?>
        <tr>
            <td><?php echo ++$cout ?></td>
            <td><?php echo $row_massages['fullname'] ?></td>
            <td><?php echo $row_massages['email'] ?></td>
            <td><?php echo $row_massages['subject'] ?></td>
            <td class='read'><?php if($row_massages['see'] == 0){echo "Unread";}else{echo "Read";}?></td>
            <td>

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo$row_massages['id'] ?>"
data="<?php echo$row_massage['id'] ?>">
  View Message
</button>

<!-- Modal -->
<div class="modal fade" class="modal fade" id="exampleModal<?php echo$row_massages['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style ="color:black;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message From <?php echo$row_massages['fullname'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo$row_massages['massage']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Readed</button>
      </div>
    </div>
  </div>
</div>


            </td>
        </tr>
        <?php } ?>

    </tbody>
</table>