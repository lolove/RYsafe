<html>
  <head>

    <!-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=l5O0E8h5_LbSSncz25BCqrSESulduxIxdPmmvlsoCnTHMpvVKG48KBqXtXtu_6xHcX4wvdXVaoXiMyDgwvX4E_tdRuGOUG-IbmG97Yk39nXDk-dL1wfp13xPVNWkI0aooZ7XBDrtjPQdaZWSFnjRBN76jzSrkl7vFnCFdzkHXcKmFfosOao9mf0Bg9UGdjsKTqITfkQNQeCypRNDjNFWqUzjLmQPVORHhcUCY7A1RSjKVS4bGvOTTt67Q0KuVyesF6ULuAJ6aGwE8PCpFIXhF96leI_iobYWl3kEqInJS89ODHhLobTcB7sNYEr1cE9pUm8tGh0fW5E4qObTyFwC2w" charset="UTF-8"></script> -->
    <?php        
      include("../mod/header.php");
      $uid = $_COOKIE["Uid"];

      $uName;
      $carLicense;
      $uSex;
      $uEmail;
      $uPassword;
      $uPasswordCon;
      
      
      $json_string = file_get_contents("../DataSet/members.json");
      $json_string_array = explode(PHP_EOL,$json_string);
      foreach($json_string_array as $value){
        $data = json_decode($value,true);
        if($data["UserId"] == trim("$uid")){
          
          $uName = $data["Name"];
          $carLicense = $data["License"];
          $uEmail = $data["Email"];
          $uPassword = $data["Password"];
          $uPasswordCon =  $data["Password"];
          $uSex = $data["Sex"];

          break;
        }
      }
      
      

    ?>
    <link rel="stylesheet" type="text/css" href="../register/main.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <script src="../myjs/register.js"></script>
    <title>newUsafe - 更新</title>
  </head>
  <body class="minHei bg-color">

    <?php        
      include("../mod/navbar.php");
    ?>

    <div class="fullWidthDiv onePageHeight" id="outDiv">
      <div class="container onePageHeight">

        <div class="row onePageHeight">
          
          <div class="col-auto col-md-5  col-lg-7"></div>
          <div class="col-12 col-md-6 col-lg-5 onePageHeight centerVertically" id="mainDiv">

            <h1 class="p-3">更新資料</h1>
          <!-- action="/upsuccess" method="post" -->
            <form>
              <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group pr-1">
                  <input type="text" class="form-control border-top-0 border-right-0 border-left-0 change" value="<?php echo $uName?>" placeholder="姓名" name="Name" required>                              
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group pl-1 change" value="Sex">      
                  <select class="form-control">
                    <option >男</option>
                    <option>女</option>
                    <option>其他</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-auto form-group pr-0 pb-3 m-0 textLeft" id="imDriverDiv">
                  <div class="form-check form-check-inline m-0 pl-1 pr-2">
                    <input class="form-check-input <?php if($carLicense != null) echo "collapsed"; ?>" type="checkbox" name="region" id="imDriver" value="option2" data-toggle="collapse" href="#imDriverCollapse" role="button" aria-expanded="<?php if($carLicense != null){echo "true";}else{echo "false";} ?>" aria-controls="imDriverCollapse">
                    <label class="form-check-label" for="imDriver" id="imDriverLabel">我是司機</label>
                  </div>                           
                </div>
                <div class="col form-group pl-0 mb-0">      
                  <div class="collapse  <?php if($carLicense != null) echo "show"; ?>" id="imDriverCollapse">
                    <div class="form-group">              
                      <input type="text" class="form-control border-top-0 border-right-0 border-left-0 change" value="<?php echo "$carLicense"; ?>" placeholder="車牌號碼" name="License">              
                    </div> 
                  </div>
                </div>
              </div>              

              <!--
              <div class="form-group">              
                <input type="tel" class="form-control border-top-0 border-right-0 border-left-0" placeholder="手機電話號碼" pattern="09[0-9]{8}">              
              </div>
              -->

              <div class="form-group">   
                <?php           
                echo '<input type="email" class="form-control border-top-0 border-right-0 border-left-0 change" aria-describedby="emailHelp" value="'.$uEmail.'" placeholder="電子郵件" name="Email" required>';
                ?>
                </div>
              <div class="form-group" style="position:relative">    
                <?php           
                echo '<input type="password" class="form-control border-top-0 border-right-0 border-left-0 change" value="'.$uPassword.'" placeholder="密碼" name="Password" required>';
                ?>
              </div>
              <div class="form-group"> 
                <?php               
                echo '<input type="password" class="form-control border-top-0 border-right-0 border-left-0 change" value="'.$uPassword.'" placeholder="密碼確認" name="PasswordCheck" required>'
                ?>
                </div>



              <script>
                $(document).ready(function() {
                  $('input[type=radio][name=ifAboard]').change(function() {
                    if(this.value == 'ifAboardYes') {
                      $(function () { $('#ifAboardCollapse').collapse('show')});
                    }
                    else{
                        $(function () { $('#ifAboardCollapse').collapse('hide')});
                    }
                  });
                });
              </script>              

              <div class="pl-1" style="text-align:left">
                <label class="m-0">請問您最近兩週內是否曾經出國？</label>
                <div class="row mx-0">
                  <div class="form-check">
                    <input class="form-check-input change" type="radio" name="ifAboard" id="ifAboardYes"  data-toggle="collapse" role="button" aria-expanded="false" value="ifAboardYes" >
                    <label class="form-check-label" for="ifAboardYes">
                      是
                    </label>
                  </div>
                  &nbsp;&nbsp;
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ifAboard" id="ifAboardNo"  data-toggle="collapse"  role="button" aria-expanded="false"  value="ifAboardNo" checked >
                    <label class="form-check-label" for="ifAboardNo">
                      否
                    </label>
                  </div>

                </div>
              </div>


              <div class="collapse" id="ifAboardCollapse">

                <div class="pl-1 mt-2" style="text-align:left">
                  <label class="m-0">如果你有出國，曾到那些地區...（複選）</label>
                  <div class="row mx-0">
                  
                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label">中國湖北省武漢市</label>
                    </div>
                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label">香港(過境機場)</label>
                    </div>

                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label">中國湖北省</label>
                    </div>
                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label">澳門(過境機場)</label>
                    </div>

                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label">中國其他省</label>
                    </div>
                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label">東北亞(日本、韓國)</label>
                    </div>

                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label">香港</label>
                    </div>
                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label">東南亞</label>
                    </div>

                    <div class="col-6 form-check form-check-inline m-0">
                      <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label">澳門</label>
                    </div>
            

                  </div>
                </div>
                
              </div>


              <div class="pl-1 mt-2" style="text-align:left">
                <label class="m-0">請問您是否於這兩週內出現過以下症狀？（複選）</label>
                <div class="row mx-0">
                

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">胸痛</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">發燒（38℃以上）</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">嘔吐</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">全身倦怠</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">腹瀉</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">肌肉酸痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">尿量減少</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">關節酸痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">下肢水腫</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">喉嚨痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">血尿</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">流鼻水、鼻塞</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">咳嗽</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input change" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">呼吸困難</label>
                  </div>



                </div>
              </div>


              
              <div class="pl-1 mt-2" style="text-align:left">
                <label class="m-0">您是否曾與診斷為「武漢肺炎」之個案有接觸？</label>
                <div class="row mx-0">
                  <div class="form-check">
                    <input class="form-check-input change" type="radio" name="ifTouch" id="yes" value="yes" >
                    <label class="form-check-label">
                      是
                    </label>
                  </div>
                  &nbsp;&nbsp;
                  <div class="form-check">
                    <input class="form-check-input change" type="radio" name="ifTouch" id="no" value="no" checked>
                    <label class="form-check-label">
                      否
                    </label>
                  </div>


                </div>
              </div>                              

              
              
              


              

              <button type="submit" class="btn btn-orange btn-lg btn-block mt-2" id="update-btn">確認</button>
            </form>                     
            

          </div>
          <div class="col-auto col-md-1  col-lg-auto"></div>
          
        </div>

      </div>    
    </div>
    

    <?php
      include("../mod/footer.php");
    ?>

  </body>
</html>








