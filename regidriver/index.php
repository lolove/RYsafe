<html>
  <head>

    <?php        
      
      include("../mod/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../regidriver/main.css">
    <link rel="stylesheet" type="text/css" href="../main.css">

    <title>newUsafe</title>
  </head>
  <body class="minHei bg-color">

    <?php        
      include("../mod/navbar.php");
    ?>

    <div class="fullWidthDiv onePageHeight" id="outDiv">
      <div class="container onePageHeight">

        <div class="row onePageHeight">
          
          <div class="col-auto col-md-5 col-lg-7"></div>
          <div class="col-12 col-md-6 col-lg-5 onePageHeight centerVertically" id="mainDiv">

            <h1 class="p-3">newUsafe</h1>
          

            <form action="../regisuccess" method="post">

              <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group pr-1">
                  <input type="text" class="form-control border-top-0 border-right-0 border-left-0" placeholder="姓名">                              
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group pl-1">      
                  <select class="form-control">
                    <option>男</option>
                    <option>女</option>
                    <option>其他</option>
                  </select>
                </div>
              </div>
              

              <div class="form-group">              
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" placeholder="車牌號碼">              
              </div>

              <!--
              <div class="form-group">              
                <input type="tel" class="form-control border-top-0 border-right-0 border-left-0" placeholder="手機電話號碼" pattern="09[0-9]{8}">              
              </div>
              -->

              <div class="form-group">              
                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" aria-describedby="emailHelp" placeholder="電子郵件">              
              </div>
              <div class="form-group" style="position:relative">              
                <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="密碼">

              </div>
              <div class="form-group" style="">              
                <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="密碼確認">
              </div>



              <div class="pl-1" style="text-align:left">
                <label class="m-0">請問您最近兩週內是否曾經出國？</label>
                <div class="row mx-0">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ifAboard" id="yes" value="yes" >
                    <label class="form-check-label">
                      是
                    </label>
                  </div>
                  &nbsp;&nbsp;
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ifAboard" id="no" value="no" checked>
                    <label class="form-check-label">
                      否
                    </label>
                  </div>

                </div>
              </div>

              <div class="pl-1 mt-2" style="text-align:left">
                <label class="m-0">承上題，如果你有出國，曾到那些地區...（複選）</label>
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


              <div class="pl-1 mt-2" style="text-align:left">
                <label class="m-0">請問您是否於這兩週內出現過以下症狀？（複選）</label>
                <div class="row mx-0">
                
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">都沒有</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">胸痛</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">發燒（38℃以上）</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">嘔吐</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">全身倦怠</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">腹瀉</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">肌肉酸痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">尿量減少</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">關節酸痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">下肢水腫</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">喉嚨痛</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">血尿</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">流鼻水、鼻塞</label>
                  </div>
                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label">咳嗽</label>
                  </div>

                  <div class="col-6 form-check form-check-inline m-0">
                    <input class="form-check-input" type="checkbox" name="region" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label">呼吸困難</label>
                  </div>



                </div>
              </div>


              <div class="pl-1 mt-2" style="text-align:left">
                <label class="m-0">您是否曾與診斷為「武漢肺炎」之個案有接觸？</label>
                <div class="row mx-0">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ifTouch" id="yes" value="yes" checked>
                    <label class="form-check-label">
                      是
                    </label>
                  </div>
                  &nbsp;&nbsp;
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ifTouch" id="no" value="no" >
                    <label class="form-check-label">
                      否
                    </label>
                  </div>


                </div>
              </div>                              

              
              


              

              <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">司機註冊</button>
            </form>         
            

          </div>
          <div class="col-auto col-md-1 col-lg-auto"></div>
          
        </div>

      </div>    
    </div>
    

    <?php
      include("../mod/footer.php");
    ?>

  </body>
</html>








