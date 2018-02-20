<?php
session_start();

  if(isset($_POST['submit'])){
    if($_POST['name'] == ""){
      $_POST['name'] = "<i class='fas fa-user-secret'></i> : Anonymous";
    }
    else{
      $_POST['name'] = "<i class='fas fa-user'></i> : " . $_POST['name'];
    }
    if($_POST['message'] == ""){
      header('Location: /index.php');
    }
    else{
    $keylog = fopen("inbox.php", "a+");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $_SESSION['message'] = $_POST['message'];
    $hour = date('h');
    $minute = date('i');
    $day = strftime("%d");
    $month = strftime("%m");
    $year = strftime("%Y");
    $time_post =  $hour . "h " . $minute . "m " . " &#9654; " . $day . "/" . $month . "/" . $year;
    $text =  PHP_EOL . '<div class="container" style="margin-left:250px;margin-top:0px !important;"><div class="col-lg-8" style="width: 100%;padding: 0px 5px">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    </div>
' .  "<li id='status'>" ."<p><i class='far fa-calendar-alt'></i> " .  "$time_post</p>"  . "<p> " . $_POST['name'] . "</p>"  . "<p><i class='fas fa-edit'></i> " .  $_POST['message'] .  "</p>" .  '</li><div class="table-responsive">
                                    </div>
                                </div>
                            </div></div>'  ;
    fwrite ($keylog, $text) ;
    header('Location: /success.php');
  }
    }
  else{
  	header('Location: /index.php');
  }
?>
