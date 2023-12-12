<?php
include_once'connectdb.php';

/**session_start();

if($_SESSION['useremail']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:index.html');
}


include_once'header.php';


error_reporting(0);

$id=$_GET['id'];


$delete=$pdo->prepare("delete from tbl_user where userid=".$id);

if($delete->execute()){
    echo'<script type="text/javascript">
jQuery(function validation(){


swal({
  title: "Good Job!",
  text: "Account is deleted !!",
  icon: "success",
  button: "Ok",
});


});

</script>';
    
    
}
**/




if($_SESSION['useremail']=="" OR $_SESSION['role']=="User"){
    
    
  header('location:index.php');
}



include_once'header.php';

if(isset($_POST['btnsave'])){
  
$merchantname = $_POST['merch_name'];
  
$mobilenum= $_POST['mob_num'];  // $_POST[''];  
  
$merchantpass =  $_POST['']; 
  
$saleprice =  $_POST['txtsaleprice']; 
  
$stock= $_POST['txtstock']; 

$description=$_POST['txtdescription'];
  
  
$f_name= $_FILES['myfile']['name'];
  
  
  
$f_tmp = $_FILES['myfile']['tmp_name'];

  
$f_size =  $_FILES['myfile']['size'];
  
$f_extension = explode('.',$f_name);
$f_extension= strtolower(end($f_extension));
  
$f_newfile =  uniqid().'.'. $f_extension;   

  $store = "productimages/".$f_newfile;
  
  
if($f_extension=='jpg' || $f_extension=='jpeg' ||  $f_extension=='png' || $f_extension=='gif'){

  if($f_size>=1000000 ){
      
     
      
      $error= '<script type="text/javascript">
jQuery(function validation(){


swal({
title: "Error!",
text: "Max file should be 1MB!",
icon: "warning",
button: "Ok",
});


});

</script>';
     
echo $error;      
      
      
      
  }else{
    
     if(move_uploaded_file($f_tmp,$store)){
         
         $productimage=$f_newfile;
          if(!isset($errorr)){
   
$insert=$pdo->prepare("insert into tbl_product(pname,pcategory,purchaseprice,saleprice,pstock,pdescription,pimage) values(:pname,:pcategory,:purchaseprice,:saleprice,:pstock,:pdescription,:pimage)"); 
   
$insert->bindParam(':pname',$productname); 
   $insert->bindParam(':pcategory',$category);
   $insert->bindParam(':purchaseprice',$purchaseprice);
   $insert->bindParam(':saleprice',$saleprice);
   $insert->bindParam(':pstock',$stock);
   $insert->bindParam(':pdescription',$description);
   $insert->bindParam(':pimage',$productimage);
   
   
if($insert->execute()){
  
  echo'<script type="text/javascript">
jQuery(function validation(){


swal({
title: "Add product Successfull!",
text: "Product Added",
icon: "success",
button: "Ok",
});


});

</script>';
  
  
}else{
  
 echo'<script type="text/javascript">
jQuery(function validation(){


swal({
title: "ERROR!",
text: "Add product Fail",
icon: "error",
button: "Ok",
});


});

</script>';  
  
}     
   
   
   
   
   
} 
         
         
         
         
         
     } 
      
      
      
  }   
  
  
  
}else
{
  

  
    $error= '<script type="text/javascript">
jQuery(function validation(){


swal({
title: "Warning!",
text: "only jpg ,jpeg, png and gif can be upload!",
icon: "error",
button: "Ok",
});


});

</script>';
     
echo $error;      
      
  
  
  
  
  
}    
  
  
  

  
  
  
  
  
}
?>
  
               <div class="col-md-8">
                   
        <table class="table table-striped">
        <thead>
        <tr>
        <th>#</th>
         <th>NAME</th>   
          <th>EMAIL</th>   
           <th>PASSWORD</th>   
            <th>ROLE</th>
            <th>DELETE</th>      
        </tr>    
            
        </thead> 
           
              
                 
        <tbody>
        
    <?php
   /* $select=$pdo->prepare("select * from tbl_user  order by userid desc");
            
    $select->execute();
            
while($row=$select->fetch(PDO::FETCH_OBJ)  ){
    
    echo'
    <tr>
    <td>'.$row->userid.'</td>
    <td>'.$row->username.'</td>
    <td>'.$row->useremail.'</td>
    <td>'.$row->password.'</td>
    <td>'.$row->role.'</td>
    <td>
<a href="registration.php?id='.$row->userid.'" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"  title="delete"></span></a>   
    
    </td>
     </tr>
     ';
    
}          
?>        
                
 </tbody>               
</table>           
</div>
</div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
            </form>
          </div>
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

include_once'footer.php';

?>**/