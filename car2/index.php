<html>
  <head>

    <?php        
      
      include("../mod/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../car/main.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <script src="../myjs/car2.js"></script>
    <title>newUsafe</title>
  </head>
  <body>

    <?php        
      include("../mod/navbar.php");
    ?>

    <div class="fullWidthDiv z2" style="position: fixed; top: 0; left: 0; ">
      <div class="container">
        <div class="row">
          <div class="col-auto col-md-1 col-lg-2 col-xl-3"></div>


          <div class="col-12 col-md-10 col-lg-8 col-xl-6" style="position: relative;">
          
<!--          
            <form id="onCar" action="#" method="post">
              <button type="submit" class="btn btn-orange rounded-0 px-4 btn-lg">我要上車</button> 
            </form> 
--> 
            <div id="cleaned">
              <button class="btn btn-orange rounded-0 px-4 btn-lg" data-toggle="modal" data-target="#driverModal" id="cleanget">我已清潔</button> 
            </div>           
         
          </div>


          <div class="col-auto col-md-1 col-lg-2 col-xl-3"></div>
        </div>
        


        
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="driverModal" tabindex="-1" role="dialog" aria-labelledby="driverModalLabel" aria-hidden="true">
      <div class="modal-dialog modalOnePageHeight" role="document">
        <div class="modal-content rounded-0">

          <!-- <form > -->

            <div class="modal-header">
              <h5 class="modal-title" id="driverModalLabel">清潔工作</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          
                
              <div class="form-check m-0">
                <input class="form-check-input" type="checkbox" name="C2H5OH" id="C2H5OH" value="option1">
                <label class="form-check-label" for="C2H5OH">酒精消毒</label>
              </div>
              <div class="form-check m-0">
                <input class="form-check-input" type="checkbox" name="H2O" id="H2O" value="option2">
                <label class="form-check-label" for="H2O">清水擦拭</label>
              </div>

              <div class="form-check m-0">
                <input class="form-check-input" type="checkbox" name="carIn" id="carIn" value="option1">
                <label class="form-check-label" for="carIn">車內整理</label>
              </div>

              
            </div>
            <div class="modal-footer pb-0 d-flex justify-content-center">
                          
              <button id="cor" class="btn btn-orange rounded-0 px-4 px-4">送出</button>
            </div>

          <!-- </form> -->

        </div>
      </div>
    </div>    

    <div class="centerVertically" id="carBG">

      <h2 class="pl-2 " id="car-id">
        ABC-123
      </h2>

      <h1 class="pl-2">
        <a class="btn btn-outline-white-orange btn-lg rounded-0" data-toggle="collapse" href="#driver" aria-expanded="false" aria-controls="driver" id="name">
          儀錶板
        </a>
      </h1>

    </div>

    <div class="container minHei" id="mainContainer">
      

      <div class="row">
        <div class="col-auto col-md-1 col-lg-2 col-xl-3"></div>

        <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        
          <!--司機資料-->
          <div class="collapse" id="driver">
            <div class="mt-3">
              <h4 class="pl-2" id="driver_name">王曉明</h4>
              <div class="row">
                <div class="col pr-0 border-right">
                  <h5 class="pl-2">司機近況</h5>
                  <div class="pl-4" id="recent">
                    <!-- <p class="m-0" id="">兩週內曾到</p>                
                    <p class="m-0">&nbsp;●&nbsp;東南亞</p>
                    
                    <p class="m-0">這兩週內出現症狀</p>                
                    <p class="m-0">&nbsp;●&nbsp;喉嚨痛</p>
                    <p class="m-0">&nbsp;●&nbsp;咳嗽</p> -->
                  </div>                           
                </div>
                <div class="col pl-0">
                  <h5 class="pl-2">本日程載狀況</h5>
                  <div class="pl-4">
                    <p class="m-0 far fa-check-circle card-icon-green littleIcon"></p><span id="green">x7</span><br>
                    <p class="m-0 fas fa-exclamation-triangle card-icon-yellow littleIcon"></p><span id="yellow">x1</span><br>
                    <p class="m-0 fas fa-head-side-mask card-icon-red littleIcon"></p><span id="red">x1</span><br>
                    <p class="m-0 fas fa-hand-sparkles card-icon-blue littleIcon"></p><span id="blue">x4</span><br>
                    <p class="m-0"></p><span id="clean_pa">清潔比例：44%</span>
                    
                  </div>    
                </div>
              </div>
              
              
  
            </div>
          </div>

          <!--分頁-->
          <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
            <li class="nav-item rounded-0 col-4 textCenter">
              <a class="nav-link active rounded-0 " id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">今天</a>
            </li>
            <li class="nav-item rounded-0 col-4 textCenter">
              <a class="nav-link rounded-0 " id="yesterday-tab" data-toggle="tab" href="#yesterday" role="tab" aria-controls="yesterday" aria-selected="false">昨天</a>
            </li>
            <li class="nav-item rounded-0 col-4 textCenter">
              <a class="nav-link rounded-0 " id="bYesterday-tab" data-toggle="tab" href="#bYesterday" role="tab" aria-controls="bYesterday" aria-selected="false">前天</a>
            </li>
          </ul>

          <!--分頁內容-->
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="today" aria-labelledby="today-tab">
            

              <!-- green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">18:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">     

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">17:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">                    
              
              blue
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">16:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              red
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-head-side-mask card-icon-red"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;中國湖北省武漢市</p>
                  <p class="m-0">&nbsp;●&nbsp;東南亞</p>
                  
                  <p class="m-0">這兩週內出現症狀</p>                
                  <p class="m-0">&nbsp;●&nbsp;喉嚨痛</p>
                  <p class="m-0">&nbsp;●&nbsp;咳嗽</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              blue
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">15:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              yellow
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-exclamation-triangle card-icon-yellow"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">14:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;香港</p>
                  <p class="m-0">&nbsp;●&nbsp;澳門</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">13:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              blue
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">11:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">10:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">09:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              green
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">08:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">          

              blue
              <div class="row mb-3">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">07:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div> -->
              </div>



            
            </div>
            <div class="tab-pane fade" id="yesterday" aria-labelledby="yesterday-tab">
            
              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">20:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">


              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">19:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">            

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">18:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">     

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">17:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">                    
              
              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">16:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--red-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-head-side-mask card-icon-red"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;中國湖北省武漢市</p>
                  <p class="m-0">&nbsp;●&nbsp;東南亞</p>
                  
                  <p class="m-0">這兩週內出現症狀</p>                
                  <p class="m-0">&nbsp;●&nbsp;喉嚨痛</p>
                  <p class="m-0">&nbsp;●&nbsp;咳嗽</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">15:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--yellow-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-exclamation-triangle card-icon-yellow"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">14:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;香港</p>
                  <p class="m-0">&nbsp;●&nbsp;澳門</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">13:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">11:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">10:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">09:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">08:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">          

              <!--blue-->
              <div class="row mb-3">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">07:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>



            
            </div>
            <div class="tab-pane fade" id="bYesterday" aria-labelledby="bYesterday-tab">
            

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">18:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">     

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">17:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">                    
              
              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">16:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--red-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-head-side-mask card-icon-red"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;中國湖北省武漢市</p>
                  <p class="m-0">&nbsp;●&nbsp;東南亞</p>
                  
                  <p class="m-0">這兩週內出現症狀</p>                
                  <p class="m-0">&nbsp;●&nbsp;喉嚨痛</p>
                  <p class="m-0">&nbsp;●&nbsp;咳嗽</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">15:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--yellow-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-exclamation-triangle card-icon-yellow"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">14:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">兩週內曾到</p>                
                  <p class="m-0">&nbsp;●&nbsp;香港</p>
                  <p class="m-0">&nbsp;●&nbsp;澳門</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">13:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">12:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--blue-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">11:00</h5>
                  </div>
                </div>
                
                <div class="col-7 col-md-7 p-0 pl-1">
                  <p class="m-0">清潔工作</p>                
                  <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                  <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                  <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">10:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">09:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">

              <!--green-->
              <div class="row">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                  <h1 class="m-0 far fa-check-circle card-icon-green"></h1>
                </div>
                <div class="col-3 col-md-3 hei40px px-0 textCenter">
                  <div class="textCenter centerVertically">
                    <h5 class="m-0">08:00</h5>
                  </div>
                </div>            
                <div class="col-7 col-md-7 p-0 pl-1 hei40px">
                  <div class="textLeft centerVertically">
                    <p class="m-0">皆無症狀</p>
                  </div>
                  
                </div>            
              </div>
              <hr class="my-3" align="center" width="100%">          

              <!--blue-->
              <div class="row mb-3">
                <div class="col-2 col-md-2 textCenter pl-4 p-0">
                    <h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>
                  </div>
                  <div class="col-3 col-md-3 hei40px px-0 textCenter">
                    <div class="textCenter centerVertically">
                      <h5 class="m-0">07:00</h5>
                    </div>
                  </div>
                  
                  <div class="col-7 col-md-7 p-0 pl-1">
                    <p class="m-0">清潔工作</p>                
                    <p class="m-0">&nbsp;●&nbsp;酒精消毒</p>
                    <p class="m-0">&nbsp;●&nbsp;清水擦拭</p>
                    <p class="m-0">&nbsp;●&nbsp;車內整理</p>
                  </div>            
                </div>



              
              </div>

              
            </div>



            </div>

            <div class="col"></div>
          </div>

        </div>

        <div class="col-auto col-md-1 col-lg-2 col-xl-3"></div>
      </div>

    </div>
  

    <?php
      include("../mod/footer.php");
    ?>

  </body>
</html>








