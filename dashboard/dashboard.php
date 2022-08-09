<?php   include_once("class/init.php");  ?>
<?php 

include_once("class/init.php");

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>NORASH</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/​jquery.min.js"></script>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    NORASH 
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a class="profile" id="profile">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a class="Addcontents" id="Addcontents">
                        <i class="pe-7s-note2"></i>
                        <p>Add contents</p>
                    </a>
                </li>
                <li>
                    <a class="mcontents" id="mcontents">
                        <i class="pe-7s-news-paper"></i>
                        <p>Conetents</p>
                    </a>
                </li>
                <li>
                    <a class="Resume" id="Resume">
                        <i class="pe-7s-science"></i>
                        <p>Resume</p>
                    </a>
                </li>
                <li>
                    <a class="services" id="services">
                        <i class="pe-7s-map-marker"></i>
                        <p>Services</p>
                    </a>
                </li>
                <li>
                    <a class="notification" id="notification">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="http://sharonmusa.herokuapp.com/">
                        <i class="pe-7s-rocket"></i>
                        <p>My portforlio</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content" id="dpage">
            <div class="container-fluid " >
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Total Contents</h4>
                                
                                <p class="category"><strong><?php 
                                $readP = new post($db_conn);

                                //get readpost function 
                                $result = $readP->readPost();
                                $num = $result->rowCount();
                                echo $num;
                                
                                
                                
                                
                                
                                ?></strong></p>
                            </div>
                            <div class="content">
                               <!--  <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->

                                <!-- <div class="footer">
                                    <div class="legend">
                                        <i class=""></i> Open
                                        <i class=""></i> Bounce
                                        <i class=""></i> Unsubscribe
                                    </div> -->
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i>updated 2mins ago.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                               <!--  <div id="chartHours" class="ct-chart"></div> -->
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                               <!--  <div id="chartHours" class="ct-chart"></div> -->
                                <div class="footer">
                                    <div class="legend">
                                        <i class=""></i> Open
                                        <i class=""></i> Click
                                        <i class=""></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox" checked>
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox" checked>
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox5" type="checkbox">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>Read "Following makes Medium better"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox6" type="checkbox" checked>
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>Unfollow 5 enemies from twitter</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
 -->
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer> -->

    </div>
</div>




</body>




    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
        <script src="ckeditor/ckeditor.js"></script>

    

    <script type="text/javascript">
        $(document).ready(function(){
            CKEDITOR.replace('editor1');

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>NORASH Dashboard</b>."

            },{
                type: 'info',
                timer: 4000
            });


            $(document).on('click',".profile", function(){
                 var ex_id = $(this).attr("id");
                 var id = 1;
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     ex_id:ex_id,id:id },
                     success:function(data){
                      
                    $('#dpage').html(data);
                }

            });

         });


            $(document).on('click',".Addcontents", function(){
                 var contents = $(this).attr("id");
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     contents:contents },
                     success:function(data){
                      
                    $('#dpage').html(data);
                }

            });

         });



            $(document).on('click',".mcontents", function(){
                 var list_contents = $(this).attr("id");
                 alert(list_contents);
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     list_contents:list_contents },
                     success:function(data){
                    
                    $('#dpage').html(data);
                }

            });

         });


            $(document).on('click',".Resume", function(){
                 var resume = $(this).attr("id");
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     resume:resume },
                     success:function(data){
                      
                    $('#dpage').html(data);
                }

            });

         });






         



             $(document).on('click',".submit", function(){
                 var submitPost= $(this).attr("id");
                  var tittle = $("#tittle").val();
                  var tag= $("#tags").val();
                  var aurthor = $("#aurthor").val();
                  var content = CKEDITOR.instances['editor1'].getData();
  
                 
                 
                
                 var fileName = document.getElementById("imageF").files[0].name;
                 var ext = fileName.split(".").pop().toLowerCase();
                 if(jQuery.inArray(ext,['png','jpg','jpeg']) == -1){
                    alert("invalid image file");
                 }else{

                 var oFReader = new FileReader();
                 oFReader.readAsDataURL(document.getElementById("imageF").files[0]);
                 var f = document.getElementById("imageF").files[0];

                  
                 var form_data = new FormData();
                 form_data.append("file",document.getElementById("imageF").files[0]);
                 form_data.append("tittle",tittle);
                 form_data.append("tag",tag);
                 form_data.append("aurthor",aurthor);
                 form_data.append("content",content);
                 form_data.append("submitPost",submitPost);
                 alert(fileName);


                 $.ajax({
    
                   url:"action.php",
                    method :"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success:function(data){
                      alert(data);
                    $('#dpage').html(data);
                }

            });

             }




                 


         });


         $(document).on('click',".edit", function(){
                 var id = $(this).attr("id");
                 var edit = $(this).val();
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     id:id,edit:edit },
                     success:function(data){
                      
                    $('#dpage').html(data);
                }

            });

         });



        //  $(document).on('click',".update", function(){
        //          var update_id = $(this).attr("id");
        //          var update = "update";
                 
        //           $.ajax({
    
        //            url:"pages.php",
        //             method :"POST",
        //              data:{
        //              update_id:update_id,update:update },
        //              success:function(data){
                      
        //             $('#dpage').html(data);
        //         }

        //     });

        //  });

         $(document).on('click',".update", function(){
                 var update_id = $(this).attr("id");
                 var update = "update";
                 //var submitPost= $(this).attr("id");
                  var tittle = $("#tittle").val();
                  var tag= $("#tags").val();
                  var aurthor = $("#aurthor").val();
                  var content = CKEDITOR.instances['editor1'].getData();
                  var oldfile = $("#oldfile").text();
                  //alert(oldfile);
  
                 if($('#imageF').get(0).files.length === 0){
                     




                 }else{

                    var fileName = document.getElementById("imageF").files[0].name;
                 var ext = fileName.split(".").pop().toLowerCase();
                 if(jQuery.inArray(ext,['png','jpg','jpeg']) == -1){
                    alert("invalid image file");
                    
                 }else

                 var oFReader = new FileReader();
                 oFReader.readAsDataURL(document.getElementById("imageF").files[0]);
                 var f = document.getElementById("imageF").files[0];





                 }
                 
                
                
                  
                 var form_data = new FormData();
                 form_data.append("oldfile",oldfile);
                 form_data.append("file",document.getElementById("imageF").files[0]);
                 form_data.append("tittle",tittle);
                 form_data.append("tag",tag);
                 form_data.append("aurthor",aurthor);
                 form_data.append("content",content);
                 form_data.append("update",update);
                 form_data.append("update_id",update_id);

                 //alert(fileName);

                 
                  $.ajax({
    
                    url:"action.php",
                    method :"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success:function(data){
                      alert("success");
                     // $('#dpage').show();
                      $.notify({
                icon: 'pe-7s-gift',
                message: "<b>Data updated successfully</b>."

            },{
                type: 'info',
                timer: 4000
            });
                }

            });
           
        

         });



         $(document).on('click',".update_user", function(){
                 var update_id = $(this).attr("id");
                 var update_user = "update";
                 //var submitPost= $(this).attr("id");
                  var bname = $("#bname").val();
                  var fname= $("#fname").val();
                  var lname = $("#lname").val();
                  var username = $("#username").val();
                  var email = $("#email").val();
                  var mobile = $("#mobile").val();
                  var address = $("#address").val();
                  var city = $("#city").val();
                  var country = $("#country").val();
                  var about = $("#about").val();
                  var degree = $("#degree").val();
                  var dob = $("#dob").val();
                 
                  
                  //var content = CKEDITOR.instances['editor1'].getData();
                  
                  
  
                 
                 
                
                //  var fileName = document.getElementById("ppic").files[0].name;
                //  var ext = fileName.split(".").pop().toLowerCase();
                //  if(jQuery.inArray(ext,['png','jpg','jpeg']) == -1){
                //     alert("invalid image file");
                //  }else{

                //  var oFReader = new FileReader();
                //  oFReader.readAsDataURL(document.getElementById("ppic").files[0]);
                //  var f = document.getElementById("ppic").files[0];

                  
                 var form_data = new FormData();
                //  form_data.append("file",document.getElementById("ppic").files[0]);
                 form_data.append("bname",bname);
                 form_data.append("fname",fname);
                 form_data.append("lname",lname);
                 form_data.append("username",username);
                 form_data.append("email",email);
                 form_data.append("mobile",mobile);
                 form_data.append("address",address);
                 form_data.append("city",city);
                 form_data.append("country",country);
                 form_data.append("about",about);
                 form_data.append("update_id",update_id);
                 form_data.append("update_user",update_user);
                 form_data.append("dob",dob);
                 form_data.append("degree",degree);


                 alert(update_id);

                 
                 $.ajax({
    
                    url:"userAction.php",
                    method :"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success:function(data){
                      alert(data);
                     // $('#dpage').show();
                      $.notify({
                icon: 'pe-7s-gift',
                message: "<b>Data updated successfully</b>."

            },{
                type: 'info',
                timer: 4000
            });
                }

            });
           
        

         });




         $(document).on('click',".submitResume", function(){
                 var submitResume= $(this).attr("id");
                  var category = $("#category").val();
                  //var resume = $("#resume").val();
                  
                  var resume = CKEDITOR.instances['editorResume'].getData();
  
                 
                 
                
                
                 alert(resume);
                  
                 var form_data = new FormData();
                 
                 form_data.append("category",category);
                 form_data.append("resume",resume);
                 form_data.append("submitResume",submitResume);
                 
alert("mmm");

                 $.ajax({
    
                   url:"action.php",
                    method :"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success:function(data){
                      alert(data);
                    $('#tbdy').html(data);
                }

            });

             




                 


         });


         $(document).on('click',".update_pic", function(){
                 var pic_id = $(this).attr("id");
                 var update = "upload_pic";

                 var fileName = document.getElementById("pic").files[0].name;
                 var ext = fileName.split(".").pop().toLowerCase();
                 if(jQuery.inArray(ext,['png','jpg','jpeg']) == -1){
                    alert("invalid image file");
                    
                 }else{

                 var oFReader = new FileReader();
                 oFReader.readAsDataURL(document.getElementById("pic").files[0]);
                 var f = document.getElementById("pic").files[0];

                 var form_data = new FormData();
                 form_data.append("file",document.getElementById("pic").files[0]);
                 form_data.append("pic_id",pic_id);
                 form_data.append("update",update);
                 
                 alert(f);
                  
                  $.ajax({
    
                    url:"userAction.php",
                    method :"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success:function(data){
                      //alert("success");
                      $('#user_pic').html(data);
                      $.notify({
                icon: 'pe-7s-gift',
                message: "<b>Image uploaded successfully</b>."

            },{
                type: 'info',
                timer: 4000
            });
                }

            });
           





                 }

         


                });

        });
    </script>

</html>
