<html>
  <head>

    <?php        
      
      include("../mod/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../login/main.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <script src="../myjs/login.js"></script>
    <title>newUsafe - 登入</title>
  </head>
  <body class="minHei bg-color">

    <?php        
      include("../mod/navbar.php");
    ?>

    <div class="fullWidthDiv onePageHeight" id="outDiv">
      <div class="container onePageHeight">

        <div class="row onePageHeight">
          <div class="col-auto col-md-5  col-lg-7">
          </div>
          <div class="col-12 col-md-6 col-lg-5 onePageHeight centerVertically" id="mainDiv">

            <h1 class="p-3">登入</h1>
            <form id="login-form">
              <div class="form-group">              
                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" aria-describedby="emailHelp" placeholder="電子郵件">              
              </div>
              <div class="form-group">              
                <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="密碼">
              </div>

              <div class="float-left form-group">
                <a class="ml-2" href="../register">註冊帳號</a>
              </div>
              <div class="float-right form-group">

              </div>

              

              <button type="submit" class="btn btn-orange btn-lg btn-block ">登入</button>
            </form>          
            

          </div>
          <div class="col-auto col-md-1  col-lg-auto">
          </div>
        </div>

      </div>    
    </div>
    

    <?php
      include("../mod/footer.php");
    ?>

  </body>
</html>








