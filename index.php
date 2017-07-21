<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>โปรแกรม Slip เงินเดือน</title>


    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="navbar-fixed-top.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default  navbar-fixed-top">
      <div class="container container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span style="color: red; font-weight: bold;">PAYROLL</span> SLIP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">หน้าแรก</a></li>
            <li><a href="#about">ตารางข้อมลูเงินเดือน</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">สมัครสมาชิก</a></li>
            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span>เข้าสู่ระบบ</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" style="font-size: 13px;"> </span>จัดการระบบ<span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                <li><a href="import.php">นำเข้าข้อมูล</a></li>
                <li><a href="#contact">เปลี่ยนรหัสผ่าน</a></li>
                <li role="separator" class="divider"></li>
                <!-- <li class="dropdown-header">Nav header</li> -->
                <li><a href="#"><span class="glyphicon glyphicon-log-out"> </span> log-out</a></li>
                
              </ul>
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      
      <div class="page-header">
        <h1>ระบบสลิปเงินเดือน<small>Payroll Slip</small></h1>
      </div>
      <div class="jumbotron">
        <h1>ระบบสลิปเงินเดือน</h1>
        <p>สำนักงานสาธารณสุขจังหวัดเชียงใหม่</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#login-modal">เข้าสู่ระบบ</a></p>
      </div>

   


    </div> <!-- /container -->

<!-- login form -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>เข้าสู่ระบบ</h1><br>
          <form method="post" action="checklogin0.php">
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
          
          <div class="login-help">
          <a href="#">สมัครสมาชิก</a> - <a href="#">ลืมรหัสผ่าน</a>
          </div>
        </div>
      </div>
</div>
<!-- end login form -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
