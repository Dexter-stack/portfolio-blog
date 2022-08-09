<?php 
 session_start();
include_once("class/init.php");
// echo $_SESSION['contents'];



if (isset($_POST['ex_id'])) {
    //create useer object
    $readU = new user($db_conn);
    $readU->id = 1;
    $result = $readU->read_user();
    $num = $result->rowCount();
    if($num>0){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        //$pic_split = explode("/",$row['file']);
        //$pic_val = $pic_split[1]."/".$pic_split[2];



    echo '<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control bname"  placeholder="Company" id="bname" value='.$row['bname'].'>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control username"id="username" placeholder="Username" value='.$row['username'].'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control email" id = "email" value ='.$row['email'].'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="date" class="form-control dob"  placeholder="yyyy-mm-dd" id="dob" value='.$row['dob'].'>
                                            </div>
                                        </div>

                                       
                                    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Degree</label>
                                                <input type="text" class="form-control degree" id = "degree" value ='.$row['degree'].'>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control fname" id="fname" placeholder="Company" value='.$row['fname'].'>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control lname" id="lname" placeholder="Last Name" value='.$row['lname'].'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control address" id="address" placeholder="Home Address" value='.$row['address'].'>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control city" id= "city" placeholder="City" value='.$row['city'].'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control country" id="country" placeholder="Country" value='.$row['country'].'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="number" class="form-control mobile" id="mobile" placeholder="ZIP Code" value='.$row['mobile'].'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control about" id="about" placeholder="Here can be your description" >'.$row['about'].'</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button  class="btn btn-info btn-fill pull-right update_user" id='.$row['id'].'>Update Profile</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user" id="user_pic">
                            <div class="image">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
';
    }
}


if (isset($_POST['contents'])) {
   


    # code...

    echo '
     <div class="container-fluid">
            
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Content</h4>




<div class="container-fluid">
       <div class="">
    <div class="row" id="row_style">
        <h4 class="text-center">Submit new post</h4>
        <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" class="form-control title" id="tittle" placeholder="Title">
            </div>
            </div>

            <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" class="form-control tags" id="tags" placeholder="Tags">
            </div>
            </div>


            <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Select Image</label>
                <input type="file" class="form-control imageF" id="imageF" placeholder="Tags">
            </div>
            </div>

            <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Aurthor Name</label>
                <input type="text" class="form-control aurthor" placeholder="Aurthor" id="aurthor">
            </div>
            </div>


          


            <div class="col-md-12 mt-3">
            <textarea id="editor1" class="ckeditor" rows="2">Submit your text post here...</textarea>
            <br>
            </div>
            
            
            <div class="col-md-12 mb-3">
            <div class="form-group">
                <button class="btn btn-primary submit" id="submit">Submit new post</button>
            </div>
            </div>

            </div>
        </div>
    </div>
</div>

                       
       


</div>
</div>
</div>
<div>

    <script src="ckeditor/ckeditor.js"></script>

    <script >CKEDITOR.replace("editor1");</script>

';
}



if(isset($_POST['list_contents'])){
        //create post object
        $readP = new post($db_conn);

        //get readpost function 
        $result = $readP->readPost();
        $num = $result->rowCount();
        // $_SESSION['numRow'] = $num;
        // //$row = $result->fetch(PDO::FETCH_ASSOC);
        // $_SESSION['contentList']= array();
        // $array = array();

        if ($num) {
            $table = '<div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Contents Table</h4>
                                <p class="category">Here you can manage your contents </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Aurhor</th>
                                        <th>Tile</th>
                                        <th>Tag</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>';

            
            while($row = $result->fetch(PDO::FETCH_ASSOC)){


                
                $table .= '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['tittle'].'</td>
                <td>'.$row['aurthor'].'</td>
                <td>'.$row['tag'].'</td>
                <td>'.$row['date'].'</td>
                <td><input type="button" name="edit" value="Edit" id='.$row['id'].' class = "btn btn-info btn-xs mt-2 edit" ></td>
                <td><input type="button" name="delete" value="Delete" id='.$row['id'].' class = "btn btn-danger btn-xs mt-2" ></td>

            
            </tr>';
         
        
            }

            $table .= ' </tbody>
            </table>

        </div>
    </div>
</div>
</div>';


echo $table;
        
        
        }
    }


if (isset($_POST['resume'])) {


    $createR = new post($db_conn);
    //get readpost function 
        $result = $createR->readRe();
        $num = $result->rowCount();
        if($num){

            $resume =  '<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create Resume</h4>
                                <p class="category">Here you can create your resume</p>
                            </div>


                            <div class="col-md-12  m-5 p-5">
                    <div class="form-group ">
                   <label class="text-dark ">Category</label>
                   <input type="text" class="form-control category" placeholder="Education or Profession" id="category">
            </div>
            </div>




                          <div class="col-md-12 ">
                          <textarea id="editorResume" class="editorResume" rows="2">Submit your Resume...</textarea>
                           <br>
                          </div>


                          <div class="col-md-12">
            <div class="form-group">
                <button class="btn btn-primary submitResume" id="submitResume">Submit new Resume</button>
            </div>
            </div>
            </div>

            <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Resume Table</h4>
                                <p class="category">Here you can manage your resume </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>category</th>
                                        <th>date</th>
                                        
                                    </thead>
                                    <tbody id ="tbdy">';

            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $resume .= '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['category'].'</td>
                <td>'.$row['date'].'</td>
                
                <td><input type="button" name="edit" value="Edit" id='.$row['id'].' class = "btn btn-info btn-xs mt-2" ></td>
                <td><input type="button" name="delete" value="Delete" id='.$row['id'].' class = "btn btn-danger btn-xs mt-2" ></td>


            </tr>';
 

            }
            $resume .= ' </tbody>
            </table>









       
    </div>
</div>
</div>
</div>


<script src="ckeditor/ckeditor.js"></script>

<script >CKEDITOR.replace("editorResume");</script>

';




echo $resume;
        }else{

    echo '<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Resume</h4>
                        <p class="category">Here you can create your resume</p>
                    </div>


                    <div class="col-md-12  m-5 p-5">
            <div class="form-group ">
           <label class="text-dark ">Category</label>
           <input type="text" class="form-control category" placeholder="Education or Profession" id="category">
    </div>
    </div>




                  <div class="col-md-12 ">
                  <textarea id="editorResume" class="editorResume" rows="2">Submit your Resume...</textarea>
                   <br>
                  </div>


                  <div class="col-md-12">
    <div class="form-group">
        <button class="btn btn-primary submitResume" id="submitResume">Submit new Resume</button>
    </div>
    </div>
    </div>

    <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Resume Table</h4>
                        <p class="category">Here you can manage your resume </p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>category</th>
                                <th>date</th>
                                
                            </thead>
                            <tbody id ="tbdy">
                            
                            </tbody>
                            </table>
                
                
                
                
                
                
                
                
                
                       
                    </div>
                </div>
                </div>
                </div>
                
                
                <script src="ckeditor/ckeditor.js"></script>
                
                <script >CKEDITOR.replace("editorResume");</script>
                ';











        }


    
                                    
                                        
                                   
}




if (isset($_POST['edit'])) {
   
    $readP = new post($db_conn);
    $readP->id = $_POST['id'];
    $result = $readP->read_singlePost();
    $num = $result->rowCount();
    if($num>0){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $update = '
     <div class="container-fluid">
            
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Content</h4>




<div class="container-fluid">
       <div class="">
    <div class="row" id="row_style">
        <h4 class="text-center">Update '.$row['tittle'].'</h4>
        <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Tittle</label>
                <input type="text" class="form-control title" value ='.$row['tittle'].' id="tittle" placeholder="Title">
            </div>
            </div>

            <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Tag</label>
                <input type="text" class="form-control tags" id="tags" value='.$row['tag'].'>
            </div>
            </div>


            <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Select Image</label>
                <input type="file" class="form-control imageF"  id="imageF" placeholder="Tags">
                <span id="oldfile" >'.$row['file'].'</span>
            </div>
            </div>

            <div class="col-md-6 ">
            <div class="form-group">
            <label class="text-dark">Aurthor Name</label>
                <input type="text" class="form-control aurthor" value ='.$row['aurthor'].'  placeholder="Aurthor" id="aurthor">
                  
                </div>
            </div>


          


            <div class="col-md-12 mt-3">
            <textarea id="editor1" class="ckeditor" rows="2">'.$row['content'].'</textarea>
            <br>
            </div>
            
            
            <div class="col-md-12 mb-3">
            <div class="form-group">
                <button class="btn btn-primary update" id='.$row['id'].'>Update</button>
            </div>
            </div>

            </div>
        </div>
    </div>
</div>

                       
       


</div>
</div>
</div>
<div>

    <script src="ckeditor/ckeditor.js"></script>

    <script >CKEDITOR.replace("editor1");</script>';


    echo $update;
    }
}




// if (isset($_POST['update_id'])) {
   
//     $readP = new post($db_conn);
//     $readP->id = 13;
//     $result = $readP->read_singlePost();
//     $num = $result->rowCount();
//     if($num>0){
//         $row = $result->fetch(PDO::FETCH_ASSOC);

//         echo '<div class="container-fluid">'. $row['content'].'</div>';
        
//     }
// }








































?>