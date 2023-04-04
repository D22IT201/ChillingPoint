<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
   
   if($type=='delete')
   {
      $uname=get_safe_value($con,$_GET['txtun']);
      $delete_sql="delete from register  where txtun='$uname'";
      mysqli_query($con,$delete_sql);
   }
}


$sql = "select * from register ";
$res = mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Client</h4>
                          
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <!-- <th>ID</th> -->
                                       <th>First-Name</th>
                                       <th>Last-Name</th>
                                       <th>Email-Address</th>
                                       <th>Contact-Number</th>
                                       <th>User-Name</th>
                                       <th>Type Password</th>
                                       <th>Retype Password</th>
                                       <th>Security-Question</th>
                                       <th>Security Answer</th>                                       
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
                                 $i=1;
                                 while($row=mysqli_fetch_array($res)) {?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                       <!-- <td><?php echo $row['id']?></td> -->
                                       <td><?php echo $row['fname']?></td>
                                       <td><?php echo $row['lname']?></td>
                                       <td><?php echo $row['txtem']?></td>
                                       <td><?php echo $row['txtcn']?></td>
                                       <td><?php echo $row['txtun']?></td>
                                       <td><?php echo $row['txtp1']?></td>
                                       <td><?php echo $row['txtp2']?></td>
                                       <td><?php echo $row['secque']?></td>
                                       <td><?php echo $row['secans']?></td>
                                       <td>
                                          
                                       <?php 
                                       
                                          echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['txtun']."'>Delete</a></span>&nbsp;";
                                          
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