<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <meta charset="UTF-8">
  <title>FitnessFit.com</title>
</head>
<title>FitnessFit.com</title>
<style type="text/css">
  .back{
    background-image: url(fon2.jpg);
    height: 600px;
    width: auto;
  }
</style>
</head>
<body>
<div class="back">
  <div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
        <div class="container-fluid">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#raim">
            <span class="sr-only">Open Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            Fitness Fit
          </a>
        </div>
        </div>
      <div class="collapse navbar-collapse" id="raim">
          <button type="button" class="btn btn-default navbar-btn navbar-right"><a href="registr.html">Sign Up</a></button>
          <button type="button" class="btn btn-default navbar-btn navbar-right"><a href="Bootstrap Login & Register Templates.php">Sign In</a></button>
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Поиск...">   
            </div>
            <button type="submit" class="btn btn-default ">Искать!</button>
          </form>
      </div>
      <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="index.php">Домой</a></li>
            <li role="presentation"><a href="tovary.html">Протеины</a></li>
            <li role="presentation"><a href="creatine.html">Креатины</a></li>
            <li role="presentation"><a href="bcd.html">BCAA</a></li>
            <li role="presentation"><a href="geiner.html">Гейнеры</a></li>
            <li role="presentation"><a href="admin.php">Админ</a></li>
            <li role="presentation"><a href="kontakty.html">Контакты</a></li>
        </ul>
      </div>
      </div>      
    </nav>
  </div>
<div class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-5">
              <div class="form-box">
                <div class="form-top">
                  <div class="form-top-left">
                    <h3>Вход на наш сайт
                      <i class="fa fa-2x fa-key pull-right"></i>
                    </h3>
                    <p>Введите имя пользователя и пароль для входа в систему:</p>
                  </div>
                  <div class="form-top-right"></div>
                </div>
                <div class="form-bottom">
                  <form role="form" action="login.php" method="post" class="login-form" id="MyForm" onclick="return check()">
                    <div class="form-group">
                      <label class="sr-only" for="form-username">Username</label>
                      <input type="text" name="name"  placeholder="Username..." class="form-username form-control" id="form-username login">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="form-password">Password</label>
                      <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <button type="submit" class="btn btn-block btn-default btn-lg">Вход</button>
                  </form>
                </div>
              </div>
              <div class="social-login">
                <h3>Быстрая регистрация через</h3>
                <div class="social-login-buttons">
                  <a class="btn btn-default btn-link-1 btn-link-1-facebook" href="http://azmind.com/demo/bootstrap-login-register-forms/form-3/index.html#">
                                <i class="fa fa-facebook"></i> Facebook
                              </a>
                  <a class="btn btn-default btn-link-1 btn-link-1-twitter" href="http://azmind.com/demo/bootstrap-login-register-forms/form-3/index.html#">
                                <i class="fa fa-vk"></i> Вконтакте
                              </a>
                  <a class="btn btn-default btn-link-1 btn-link-1-google-plus" href="http://azmind.com/demo/bootstrap-login-register-forms/form-3/index.html#">
                                <i class="fa fa-google-plus"></i> Google Plus
                              </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<script type="text/javascript">
  function check(){
    var login = document.forms['MyForm']['login'].value;
    $.ajax(
        "loginCheck.php",{
          data:"login="+login,
          success: function(data){
            document.forms['MyForm']['login'].style.backgroundColor=data;
          }
        }
      )
  }
</script>




