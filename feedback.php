<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
   
//    if($type=='delete'){
//       $id=get_safe_value($con,$_GET['id']);
//       $delete_sql="delete from  feed  where id='$id'";
//       mysqli_query($con,$delete_sql);
//    }
}



$sql="select * from feed  ";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Feedback</h4>
                          
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <!-- <th class="serial">#</th> -->
                                       <th>User_Name</th>
                                       <th>Email</th>
                                       <th>Contact</th>
                                       <th>Feedback</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($res)) {
                                 ?> 
                                    <tr>
                                   
                                    
                                       <td><?php echo $row['txtun']?></td>
                                       <td><?php echo $row['txtem']?></td>
                                       <td><?php echo $row['txtcn']?></td>
                                       <td><?php echo $row['txtfeed']?></td>
                                       <td>
                                       <?php 
                                       
                                        //   echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>&nbsp;";
                                          
                                       }
                                       ?>
                                       </td>
                                    </tr> 
                                
                                    
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