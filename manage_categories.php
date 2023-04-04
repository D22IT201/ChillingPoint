<?php
require('top.inc.php');
$categories='';
$price='';
$qt='';
$msg='';
$fac='';
if(isset($_GET['id']) && $_GET['id']!='')
{
   $id = get_safe_value($con,$_GET['id']);  
   $res=mysqli_query($con,"select * from categories where id='$id' ");
   $check=mysqli_num_rows($res);
   if($check>0){
      $row=mysqli_fetch_assoc($res); 
      $categories=$row['categories_name'];
      $price=$row['price'];
      $qt=$row['qty'];
      $fac=$row['facility'];

   }else{
      header('location:categories.php');
      die();
   }
}

if(isset($_POST['submit'])){
   $categories = get_safe_value($con,$_POST['categories']);
   $price = get_safe_value($con,$_POST['price']);
   $qt = get_safe_value($con,$_POST['qty']);
   $fac = get_safe_value($con,$_POST['facility']);

   echo $categories;
   $res=mysqli_query($con,"select * from categories where categories_name='$categories' ");
   $check=mysqli_num_rows($res);
   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['id']){

         }
         else{
      $msg="Category already exist";

         }
      }
      else{
      $msg="Category already exist";
      }
   }
  if($msg==''){
  


      if(isset($_GET['id']) && $_GET['id']!=''){
         
         mysqli_query($con,"update categories set categories_name='$categories' where id='$id '");
      }else{
            mysqli_query($con,"insert into categories(categories_name,price,qty,facility) values('$categories','$price','$qt',$'fac')");
      }
      header('location:categories.php');
      die();

  }
}
/*if(isset($_GET['id']) && $_GET['id']!=''){
   $id = get_safe_value($con,$_GET['id']);
   $res=mysqli_query($con,"select * from categories where id='$id'");
   $row=mysqli_fetch_assoc($res);
   $categories=$row['categories_name'];

}*/
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Room</strong></div>
                        <form method = "POST" >
                        <div class="card-body card-block">
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Room</label>
                              <input type="text" name="categories" placeholder="Enter room name" class="form-control" required value="<?php echo $categories ?>">
                              <label for="categories" class=" form-control-label">Price</label>
                              <input type="text" name="price" placeholder="Enter room price" class="form-control" required value="<?php echo $price ?>">
                              <label for="categories" class=" form-control-label">No. Of Person</label>
                              <input type="text" name="qty" placeholder="Enter number of person" class="form-control" required value="<?php echo $qt ?>">
                              <label for="categories" class=" form-control-label">Facelities</label>
                              <input type="text" name="facility" placeholder="Enter number Facelities of room" class="form-control" required value="<?php echo $fac ?>">
                           </div>
                           
                        
                           
                              <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           <div class="field_error"><?php echo $msg ?> </div>
                        </div>   
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
require('footer.inc.php');
?>