<?php session_start();

if(isset($_SESSION['webpanel'])) {
    header("Location: admin/");
} elseif (isset($_SESSION['clientpanel'])) {
    header("Location: client/");
} elseif (isset($_SESSION['managerpanel'])) {
    header("Location: manager/");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page" style="background-color: #dc7a34;">
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
<!--         <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile" accept=".gif, .jpg, .png" required>
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
        </div> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Contact No." id="contactnumber" name="contactnumber" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="retypepassword" name="retypepassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group clearfix">
          <div class="icheck-primary d-inline">
            <input type="radio" id="radioPrimary1" value="male" name="r1" id="male" checked>
            <label for="radioPrimary1">
              Male
            </label>
          </div>
          <div class="icheck-primary d-inline">
            <input type="radio" id="radioPrimary2" value="female" id="female" name="r1">
            <label for="radioPrimary2">
              Female
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="btn" >Register</button>
          </div>
          <!-- /.col -->
        </div>
      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
$(document).ready(function(){
  $("#btn").click(function(){
    var checked = $('input[name="r1"]:checked').val();
    var firstname   = $("#firstname").val();
    var lastname    = $("#lastname").val();
    var username    = $("#username").val();
    var email       = $("#email").val();
    var contactnumber = $("#contactnumber").val();
    var password    = $("#password").val();
    var retypepassword = $("#retypepassword").val();
    $.ajax({  
      url:"registerfunction.php",  
      method:"post",  
      data:{
        firstname:firstname,
        lastname:lastname,
        username:username,
        email:email,
        contactnumber:contactnumber,
        password:password,
        retypepassword:retypepassword,
        checked:checked
      },  
        success:function(data){        
          if (data == 'Registered Successfully') {
            alert('Registered Successfully! Please wait for the admins approval')
            window.location.href = "index.php";
          } else {
             alert(data);
          }
        }  
    });  
  });
});
</script>
</body>
</html>
