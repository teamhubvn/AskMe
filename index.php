<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/emojione/1.5.2/lib/js/emojione.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emojione@3.1.2/lib/js/emojione.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AskMe</title>
<meta content='https://i.imgur.com/uO4uUMx.png' property='og:image'/>
<link href='https://pewrank.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
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
<script>
    $(document).ready(function(){
      $('#mode').click(function(){
        $('#yname, #username').fadeToggle();
      });
    });
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<style>
 @media (min-width: 768px){
.col-sm-4 {
    width: 88%;
 }
}
textarea {
    resize: none;
}
.btn-primary{float:right;margin-left:5px;}
</style>
<body class="boxed-layout fixed-sidebar">
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
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
<a href="http://bitelink.ga/"><i class="far fa-edit"></i>Short Link</a>
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
</nav> <div id="page-wrapper" class="gray-bg" style="background:#eeeeee;">
<div class="row">
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background: #eeeeee">
<div class="navbar-header">
<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " style="margin-left:14px;"><i class="fa fa-bars"></i> </a>
</div>
</nav>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="background-color: #fff;
    border-radius: 5px;
    border-bottom: solid 2px #dfdfdf;margin-top: 20px;">
<form method="POST" action="/check.php" class="form-horizontal">
<input type="hidden" value="add" name="act">
<h4 style="padding-top:15px;" id="yname"> Name </h4>
<div class="form-group">
<div class="col-sm-10"><input type="text" name="name"  class="form-control" id="username" style="display: none;background: #fff;
    border-radius: 5px;
    border: 1px solid #e6e6f0;"></div>
</div>
<h4>Message </h4>
<div class="form-group">
<div class="col-sm-10"><textarea type="text" name="message" value=""  id="textarea" required="" autofocus="" placeholder="Ask me something here..."></textarea></div>
</div>
<div class="form-group">
<div class="col-sm-4 col-sm-offset-2" style="margin-left: 12%;">
<button class="btn btn-primary" value="submit" name="submit" type="submit">Send <i class="fab fa-facebook-messenger"></i></button>
<input type="button" class="btn btn-primary" value="&#xf013" id="mode" onClick="changetext()">
</div>
</div>
</form>
</div>
<div class="footer">
<div>
Powered by <a href="http://facebook.com/sven812">Sven</a>
</div>
</div>
</div>
</div>
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
