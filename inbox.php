<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/emojione/1.5.2/lib/js/emojione.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emojione@3.1.2/lib/js/emojione.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ask Me</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/hand.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
  if(isset($_SESSION['username'])){
      echo "";
      }
  else{
      header('Location: /login-admin.php');
  }
?>
<script>
    $(document).ready(function(){
      $('#mode').click(function(){
        $('#kio, #username').fadeToggle();
      });
    });
</script>
<script>
            function changetext() {
                 var elem = document.getElementById("mode");
                if (elem.value=="Secret")
                    { 
                        elem.value = "Public";
                    }
                else
                 {
                     elem.value = "Secret";
                 }
            }
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<style>
 #wrapper{
  background:#fff;
    margin-top:20px;
 }
 .container{
  background:#fff;
  margin-left:200px !important;
 }
 .container li{
  list-style-type:none;
  margin:10px;
  color:#9c9c9c;
  width:85%;
  padding:10px;
  background:#f2f2f2;
  border-radius:5px;
 }
 body.boxed-layout #wrapper{
  background:#fff !important;
 }
</style>
<body class="boxed-layout fixed-sidebar">
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation" style="background:#2f4050;">
<div class="sidebar-collapse">
<ul class="nav metismenu" id="side-menu">
<li class="nav-header">
<div class="dropdown profile-element" style="text-align: center;"> <span>
<img alt="image"  src="https://image.flaticon.com/icons/svg/254/254018.svg" width="64px" height="64px" />
</span>
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
<span class="clear"> <span class="block m-t-xs">Ask Me
</span> </a>
</div>
</li>
<li>
<a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
</li>
<li>
<a href="/"><i class="far fa-edit"></i>Register</a>
</li>
<li>
<a href="/"><i class="far fa-envelope"></i> <span class="nav-label">Inbox</span></a>
</li>
<li>
<a href="/"><i class="fa fa-star"></i> <span class="nav-label">Follow</span><span class="fa arrow"></span></a>
<ul class="nav nav-second-level collapse">
<li><a href="/">Crush</a></li>
<li><a href="/">Family</a></li>
<li><a href="/">Friends</a></li>
</ul>
</li>
</ul>
</div>
</nav>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<script src="js/scanall.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/jquery.twbsPagination.min.js"></script>
<script src="js/jquery-ias.min.js"></script>
</body>
</html>
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background: #eeeeee">
<div class="navbar-header" style="margin-left:230px;">
<a  class="btn btn-danger " style="margin:8px;">Admin </a>
</div>
</nav>
<div class="container" style="margin-left:250px;margin-top:0px !important;"><div class="col-lg-8" style="width: 100%;padding: 0px 5px">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    </div>
<li id='status'><p><i class='far fa-calendar-alt'></i> 06h 45m  &#9654; 13/02/2018</p><p> <i class='fas fa-user-secret'></i> : Anonymous</p><p><i class='fas fa-edit'></i> ChÃ o báº¡n , báº¡n cÃ³ thá»ƒ cho mÃ¬nh xin source code cá»§a web nÃ y Ä‘Æ°á»£c khÃ´ng ? Cáº£m Æ¡n báº¡n nhiá»u.</p></li><div class="table-responsive">
                                    </div>
                                </div>
                            </div></div>
<div class="container" style="margin-left:250px;margin-top:0px !important;"><div class="col-lg-8" style="width: 100%;padding: 0px 5px">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    </div>
<li id='status'><p><i class='far fa-calendar-alt'></i> 07h 28m  &#9654; 20/02/2018</p><p> <i class='fas fa-user-secret'></i> : Anonymous</p><p><i class='fas fa-edit'></i> Xin chÃ o</p></li><div class="table-responsive">
                                    </div>
                                </div>
                            </div></div>
