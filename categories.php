<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
   if($type=='status'){
      $operation=get_safe_value($con,$_GET['operation']);
      $id=get_safe_value($con,$_GET['id']);
      if($operation=='active'){
            $status='1';
      }else{
            $status='0';
      }
      $update_status_sql="update categories set status='$status' where id='$id'";
      mysqli_query($con,$update_status_sql);
   }
   if($type=='delete'){
      $id=get_safe_value($con,$_GET['id']);
      $delete_sql="delete from categories  where id='$id'";
      mysqli_query($con,$delete_sql);
   }
}


$id='id';
$sql="select * from categories ";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"></h4>
                        <h4 class="box-link"><a href="manage_categories.php">Add Rooms</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Cateories</th>
                                        <th>Price</th>
                                        <th>No of Person</th>
                                        <th>Facelities</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res)) {?>
                                    <tr>
                                        <td class="serial"><?php echo $i; $i=$i+1?></td>

                                        <td><?php echo $row['categories_name']?></td>
                                        <td><?php echo $row['price']?></td>
                                        <td><?php echo $row['qty']?></td>
                                        <td><?php echo $row['facility']?></td>
                                        <td>
                                            <?php 
                                       if($row['status']==1){
                                             echo " <span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id'].
                                             "'>Booked</a></span>&nbsp;";
                                       }else {
                                          echo "<span class='badge badge-pending '><a href='?type=status&operation=active&id=".$row['id'].
                                          "'>Unbooked</a></span>&nbsp;";
                                       }
                                          echo "&nbsp;<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                          echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>&nbsp;";
                                          
                                       }
                                       ?>
                                        </td>
                                    </tr>
                                    <?php  ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>