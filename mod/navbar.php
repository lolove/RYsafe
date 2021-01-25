<link rel="stylesheet" type="text/css" href="../mod/navbar.css">
<script src="../myjs/navbar.js"></script>
<?php
  $currentPage=$_SERVER["PHP_SELF"];  
?>

<nav class="navbar-light bg-light" id="realNav">
  <div class="container p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


      <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" id="realBtn">
        <span class="navbar-toggler-icon" ></span>
      </button>

      <a class="navbar-brand m-0 mr-md-3 p-0" href="../home" id="logo">RYsafe</a>

      <button class="navbar-toggler border-0 p-0" id="fakeBtn">
        <span class="navbar-toggler-icon" ></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a href="../home"
              <?php                     
                if ($currentPage == '../home/index.php') {
                  echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
              ?>
            >首頁</a>
          </li>

          <li class="nav-item" id="update">
            <a href="../update"
              <?php                     
                if ($currentPage == '../update/index.php') {
                  echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
              ?>            
            >更新資料</a>
          </li>     

          <li class="nav-item" id="mycar">
            <a href="../car2"
              <?php                     
                if ($currentPage == '../car2/index.php') {
                  echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
              ?>              
            >我的車</a>
          </li>

          <li class="nav-item" id="request">
            <a href="../about" data-toggle="modal" data-target=".isSick" class='nav-link'>回報染疫</a>
          </li>  

          <!-- <li class="nav-item">
            <a href="../about"
              <?php                     
                // if ($currentPage == '../about/index.php') {
                //   echo "class='nav-link active'";
                // }else{
                //   echo "class='nav-link'";
                // }
              ?>              
            >關於我們</a>
          </li>      -->
          
        </ul>
        <div class="form-inline my-0">
          
          <a class="btn btn-outline-orange my-2 my-sm-0 mr-3 mr-md-2 px-4 rounded-0" href="../register" id="registe">註冊</a>          
          <a class="btn btn-orange my-2 my-sm-0 px-4 rounded-0" href="../login" id="sign-in">登入</a>
          
        </div>
      </div>
    </nav>
  </div>
</nav>

<nav class="navbar-light bg-light" id="fakeNav">
  <div class="container p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


      <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" id="realBtn">
        <span class="navbar-toggler-icon" ></span>
      </button>

      <a class="navbar-brand" href="../home">USafe</a>

      <button class="navbar-toggler border-0 p-0" id="fakeBtn">
        <span class="navbar-toggler-icon" ></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">首頁</a>
          </li>      
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <a class="btn btn-outline-success my-2 my-sm-0 mr-2" href="../register">註冊</a>
          <!--
          <a class="btn btn-success my-2 my-sm-0" href="/login">登入</a>
          -->
        </div>
      </div>
    </nav>
  </div>
</nav>

<!-- isSick~ -->
<div class="modal fade isSick" tabindex="-1" role="dialog" aria-hidden="true" >
  <div class="modal-dialog modal-md" style="height:100%;display: flex; flex-direction: column;justify-content: center;text-align: center;">
    <div class="modal-content container rounded-0 py-3">
      <form class="m-0" action="../isSick">
        <center>
          <h1 class="fas fa-exclamation-triangle text-warning"></h1>
          <h4>確認是否染疫</h4>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success my-0 mr-3 px-4">確認</button>
            <button class="btn btn-danger my-0 ml-3 px-4" data-dismiss="modal" aria-label="Close">取消</button>
          </div>
          
        </center>
      </form>
      
      
    </div>
  </div>
</div>  
<!-- ~isSick -->

<!-- sickWarning~ -->
<div class="modal fade sickWarning " tabindex="-1" role="dialog" aria-hidden="true" >
  <div class="modal-dialog modal-md " style="height:100%;display: flex; flex-direction: column;justify-content: center;text-align: center;">
    <div class="modal-content container rounded-0 py-3">

      <center>
        <h1 class="fas fa-exclamation-triangle text-danger mb-3"></h1>
        <h5>近期與您共乘的乘客之中有人染疫</h5>
        <h5>建議您立即去做篩檢</h5>
        <div class="d-flex justify-content-center mt-3">          
          <button class="btn btn-orange my-0 ml-3 px-4" data-dismiss="modal" aria-label="Close">我了解了</button>
        </div>
        
      </center>

      
      
    </div>
  </div>
</div>  
<!-- ~sickWarning -->