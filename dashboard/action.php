<?php 
session_start();

//echo $_POST['submitPost'];

include_once("class/init.php");

if (isset($_POST["submitPost"]) ) {

//create object of post class 
	$create = new post($db_conn);
//initialize each variable
	$create->tittle = $_POST["tittle"] ;
    //$id;
	$create->content = $_POST["content"];

	$create->aurthor = $_POST["aurthor"];

	$create->tag = $_POST["tag"];

	$test = explode(".", $_FILES['file']['name']);

	$ext = end($test);

	$name =rand(100,999).".".$ext;

	$filepath ="upload/".$name;


	
	

	$create->file =$filepath;
	if($create->createPost()){
		move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

	}
	// echo $create->tittle.$create->content.$create->aurthor.$create->tag ;


	// //$date;
	// //call createPost() method
	// if($create->createPost()){


	// 	// move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
	// 	echo "Content Successfully created";
	// }else{

	// 	echo "no";

	// }



}


//echo $create->tag;

	// $test = explode(".", $_FILES['file']['name']);

	// $ext = end($test);

	// $name =rand(100,999).".".$ext;

	//$filepath ="./upload/".$name;


// 	if(isset($_POST['list_contents'])){
// 		//create post object
// 		$readP = new post($db_conn);

// 		//get readpost function 
// 		$result = $readP->readPost();
// 		$num = $result->rowCount();
// 		// $_SESSION['numRow'] = $num;
// 		// //$row = $result->fetch(PDO::FETCH_ASSOC);
// 		// $_SESSION['contentList']= array();
// 		// $array = array();

// 		if ($num) {
// 			$table = '<div class="container-fluid">
//             <div class="container-fluid">
//                 <div class="row">
//                     <div class="col-md-12">
//                         <div class="card">
//                             <div class="header">
//                                 <h4 class="title">Contents Table</h4>
//                                 <p class="category">Here you can manage your contents </p>
//                             </div>
//                             <div class="content table-responsive table-full-width">
//                                 <table class="table table-hover table-striped">
//                                     <thead>
//                                         <th>ID</th>
// 										<th>Tile</th>
//                                     	<th>Aurhor</th>
// 										<th>Tag</th>
//                                     	<th>Date</th>
//                                     	<th>Edit</th>
//                                     	<th>Delete</th>
//                                     </thead>
//                                     <tbody>';

			
// 			while($row = $result->fetch(PDO::FETCH_ASSOC)){


				
// 				$table .= '<tr>
// 				<td>'.$row['id'].'</td>
// 				<td>'.$row['tittle'].'</td>
// 				<td>'.$row['aurthor'].'</td>
// 				<td>'.$row['tag'].'</td>
// 				<td>'.$row['date'].'</td>
// 				<td><input type="button" name="edit" value="Edit" id='.$row['id'].' class = "btn btn-info btn-xs mt-2" ></td>
// 				<td><input type="button" name="delete" value="Delete" id='.$row['id'].' class = "btn btn-danger btn-xs mt-2" ></td>

			
// 			</tr>';
		 
		
// 			}

// 			$table .= ' </tbody>
// 			</table>

// 		</div>
// 	</div>
// </div>
// </div>';


// echo $table;
		
		
// 		}

// 	}





	//print_r( $_SESSION["contentList"]);

	if(isset($_POST['update'])){
  //create object of post class 
  

  $update =  new post($db_conn);

  // get the post id 

  $update->id = $_POST['update_id'];
  $filname = $_FILES['file']['name'];

  //other variable 
 
  $update->tittle = $_POST['tittle'];
  $update->aurthor= $_POST['aurthor'];
  $update->tag = $_POST['tag'];
  $update->content = $_POST['content'];
  $flag = true;
  $update->file = "";

//initialize file property
if($filname != ""){

  $passport = $_FILES['file']['name'];
  $temp_passport = $_FILES['file']['tmp_name'];
  $passport_size = $_FILES['file']['size'];

  $passport_ext = pathinfo($passport, PATHINFO_EXTENSION);
  $folder = 'upload/';
  $fullpath = $folder.rand(100,999).$passport;
  $update->file = $fullpath;
  $flag = false;
  



	
}else{
	$update->file = $_POST['oldfile'];
    $flag = true;
}

  



	
	

	

	if($flag==true){
		$update->update_content();
		

	}else{
		$update->update_content();
		move_uploaded_file($temp_passport, $fullpath);
	}

  
}


if (isset($_POST["submitResume"]) ) {

	//create object of post class 
		$createR = new post($db_conn);
	//initialize each variable
		$createR->resume = $_POST["resume"] ;
		//$id;
		$createR->category = $_POST["category"];
	
	
		// echo $createR->resume;
		
	
		
		if($createR->createRe()){
	

	//get readRe function 
		$result = $createR->readRe();
		$num = $result->rowCount();
		if($num){

			while($row = $result->fetch(PDO::FETCH_ASSOC)){





				echo ' <tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['category'].'</td>
				<td>'.$row['date'].'</td>
				
				<td><input type="button" name="edit" value="Edit" id='.$row['id'].' class = "btn btn-info btn-xs mt-2" ></td>
				<td><input type="button" name="delete" value="Delete" id='.$row['id'].' class = "btn btn-danger btn-xs mt-2" ></td>


			</tr>';
			}
			


 






		}
			
		}
	
	
	
	}
	







?>