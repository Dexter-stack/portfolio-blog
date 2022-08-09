<?php

include_once("class/init.php");

if(isset($_POST['update'])){

//create useer object
$upload = new user($db_conn);
$upload->id = $_POST['pic_id'];
//$upload->file= $_POST['file'];

$passport = $_FILES['file']['name'];
$temp_passport = $_FILES['file']['tmp_name'];
$passport_size = $_FILES['file']['size'];

$passport_ext = pathinfo($passport, PATHINFO_EXTENSION);
$folder = 'upload/';
$fullpath = $folder.rand(100,999).$passport;
$upload->file = $fullpath;


if($upload->update_pic()){
    move_uploaded_file($temp_passport, $fullpath);
    $result = $upload->read_user();
		$num = $result->rowCount();
		if($num){

			while($row = $result->fetch(PDO::FETCH_ASSOC)){

         echo ' <div class="image">
         <img src='.$row['file'].' alt="..."/>
     </div>
     <div class="content">
         <div class="author">
              <a href="#">
             <img class="avatar border-gray" src='.$row['file'].' alt="..."/>

               <h4 class="title">'.$row['fname'].' '.$row['lname'].'<br />
                  <small>'.$row['username'].'</small>
               </h4>
             </a>
         </div>
         <p class="description text-center"> '.$row['about'].'
         </p>
     </div>
     <hr>
    <div class="text-center container-fluid">
        <input type="file" class="form-control pic " style="margin-bottom:5%;"  id="pic" placeholder="ZIP Code" >
                            <input type="submit" class="form-control btn btn-info btn-fill  update_pic" id='.$row['id'].' value ="upload">
                            
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                               
                                            

                            </div>
    ';



				
			}
        }
}

}
if(isset($_POST['update_user'])){


  $update =  new user($db_conn);

  // get the post id 

  
  //other variable 
  $update->id = $_POST['update_id'];
  $update->bname = $_POST['bname'];
  $update->fname= $_POST['fname'];
  $update->lname = $_POST['lname'];
  $update->username = $_POST['username'];
  $update->email = $_POST['email'];
  $update->address = $_POST['address'];
  $update->city = $_POST['city'];
  $update->country = $_POST['country'];
  $update->mobile = $_POST['mobile'];
  $update->about = $_POST['about'];
  $update->degree = $_POST['degree'];
  $update->dob = $_POST['dob'];
  //$update->file= $_POST['file'];
  
  if($update->update_user()){
      echo "Data successfully updated";
  }

echo "hello";







}







?>