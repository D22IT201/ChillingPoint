<?php
require('top.inc.php');
$categories='';
$qty='';
$price='';
$rname='';
$ride_name='';
$cid='';
$msg='';
$image='';

if(isset($_GET['id']) && $_GET['id']!=''){
   $id = get_safe_value($con,$_GET['id']);  
   $res=mysqli_query($con,"select * from ride where id='$id '");
   $check=mysqli_num_rows($res);
   if($check>0){
      $row=mysqli_fetch_assoc($res); 
      $categories=$row['categories_name'];
      $rname=$row['ride_name'];
      $price=$row['price'];
      $cid=$row['categories_id'];
   }else{
      header('location:ride.php');
      die();
   }  
}

if(isset($_POST['submit'])){
   $categories = get_safe_value($con,$_POST['categories_name']);
   $price=get_safe_value($con,$_POST['price']); 
   $rname=get_safe_value($con,$_POST['ride_name']);
   $image=rand(111111,999999).'_'.$_FILES['image']['name'];
   // $cid=get_safe_value($con,$_POST['categories_id']);
   // echo $cid;
   $queries = "SELECT * FROM ride";
   $res=mysqli_query($con,$queries); 
   $check=mysqli_num_rows($res);

   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['ride_name']){
         }
         else{ 
         }
      }

   }
  if($msg==''){ 
      if(isset($_GET['id']) && $_GET['id']!=''){
         mysqli_query($con,"update ride set categories_name='$categories',price='$price',ride_name='$rname'  where id='$id '");
      }else{
         move_uploaded_file($_FILES['image']['tmp_name'],"media/ride/".$image);
            mysqli_query($con,"insert into ride(ride_name,price,categories_name,image) values('$rname','$price','$categories','$image')");
      }
     header('location:ride.php');
     die();

  }
}
// if(isset($_GET['id']) && $_GET['id']!=''){
//    $id = get_safe_value($con,$_GET['id']);
//    $res=mysqli_query($con,"select * from categories_name where id='$id'");
//    $row=mysqli_fetch_assoc($res);
//    $categories=$row['categories_name'];

// }
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Ride</strong></div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="ride" class=" form-control-label">Ride</label>
                                <input type="text" name="ride_name" placeholder="Enter Ride name" class="form-control"
                                    required value="<?php echo $rname ?>">
                                <label for="price" class=" form-control-label">Price</label>
                                <input type="text" name="price" placeholder="Enter ride price" class="form-control"
                                    required value="<?php echo $price ?>">
                                <label for="categories" class=" form-control-label">Enter Category</label>
                                <input type="text" name="categories_name" placeholder="Enter Category"
                                    class="form-control" required value="<?php echo $categories?>">
                                <label for="img" class=" form-control-label">Add Image</label>
                                <input type="file" name="image" placeholder="Enter img" class="form-control" required
                                    value="<?php echo $image?>">

                            </div>
                            <button id="payment-button" name="submit" type="submit"
                                class="btn btn-lg btn-info btn-block">
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