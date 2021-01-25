<html>
  <head>

    <?php        
      include("../mod/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <script src="../myjs/home.js"></script>
    <title>newUsafe - 首頁</title>

  </head>
  <body class="bg-light">

    <?php        
      include("../mod/navbar.php");
    ?>

    <!--
    <div class="background1">

    </div>
    -->

    
    <div class="background">
      <div class="centerVertically">
        <div class="container" style="height: 50%;">
          <div class="row" style="height: 50%;">
            <div class="col-1 col-md-2 col-lg-6 m-0">
            </div>
            <div class="col-10 col-md-8 col-lg-6 m-0 centerVertically" id="searchDiv" style="background-color: rgba(255,255,255,0.7);">
              <h4 class="mb-3">立即搜尋您的Uber</h4>
              <!-- action="../car" method="post" -->
              <form class="m-0" id="carPlate" >
                <div class="row">
                  <div class="col-12 col-md-8 col-lg-9 col-xl-10 px-3">
                    <input type="text" class="form-control rounded-0" id="input" aria-describedby="emailHelp" placeholder="輸入車牌">
                  </div> 
                  <div class="col-12 col-md-4 col-lg-3 col-xl-2 pl-3 pl-md-0 pr-3 mt-2 mt-md-0">
                    <button id="search-submit" class="btn btn-block btn-orange rounded-0" >查詢</button>
                  </div>        
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    
     <div class="container bg-light mt-5">
      <div class="row mb-3">
        <h2 class="p-0 m-0 pl-5">介紹</h2>
        &nbsp;&nbsp;
        <p class="typing ">共享'危'經濟</p>
      </div> 
      <div class="container light mb-5 px-4">
        <p class="m-0" style="font-size: 16px;">　　近年來共享經濟迅速崛起，如 YouBike、Uber、Airbnb 等共享平台快速滲透大眾的日常生活中。據資誠會計師事務所估計，到2025年全球共享經濟產值將高達3,350億美元規模。將會有各式各樣的心其應用湧現，帶來無窮的話題和想像。</p><br/>
        <p class="m-0" style="font-size: 16px;">　　隨著共享經濟的商業模式受到歡迎，它的定義也逐漸擴大，也產生了各種共享模式。更是為全球帶來經濟上的提升，帶給消費者及企業極大的改變。</p>
      </div>
    </div>

    <div class="fixed" style="height: 50vh;">   
      <div class="centerVertically" id="white">
        <h2>共享經濟的消逝</h2>
      </div>
    </div>
    <div class="container bg-light mt-5">
      <div class="row mb-3">
        <h2 class="p-0 m-0 pl-5">消逝的原因</h2>
        &nbsp;&nbsp;
        <p class="typing2">經濟危機</p>
      </div> 
      <div class="container light mb-5 px-4">
        <p class="m-0" style="font-size: 16px;">　　自 2020 年開始爆發出 COVID-19 後，疫情從中國武漢一路延燒至各地。</p><br/>
        <p class="m-0" style="font-size: 16px;">　　對全球經濟影響快速展現，以閃電般的速度與從未見過的大規模擾亂社會和經濟秩序。現今在不安全的環境及惡劣的氣氛，造成許多產業的停滯或倒閉，更造成共享經濟的消逝危機。</p><br/>
        <p class="m-0" style="font-size: 16px;">　　根據網路上資料蒐集彙整後，七成民眾對大眾運輸工具有疑慮。其中運輸工具最令人擔憂，資料指出有 44% 民眾擔心搭乘共享汽車，Uber 更是佔汽車中最高，達到 43%。</p>
      </div>
    </div>

    <div class="fixed2" style="height: 50vh;">   
      <div class="centerVertically" id="white">
        <h2>安全保障</h2>
      </div> 
    </div>
    <div class="container bg-light mt-5">
      <div class="row mb-3">
        <h2 class="p-0 m-0 pl-5">RYsafe</h2>
        &nbsp;&nbsp;
        <p class="typing3">您的最佳保鑣</p>
      </div> 
      <div class="container light mb-5 px-4">
        <p class="m-0" style="font-size: 16px;">　　為了改善目前疫情對共享經濟的影響，重現近幾年興起的 Uber 大型共享經濟平台，提供了此網站讓使用 Uber 的人們能安全且舒適的繼續搭乘。包括透明化駕駛健康狀況及維護車輛清潔等，讓乘客能即時看到最新的狀況。</p><br/>
        <p class="m-0" style="font-size: 16px;">　　透過我們的網站，讓民眾能在疫情發生的狀況下也願意搭乘 Uber ，同時在全面瞭解真實司機狀況及車況下，保障其他人在搭乘時的安全。</p><br/>
        <p class="m-0" style="font-size: 16px;">　　建立在此情況下，能確實提升民眾搭乘意願，並改善共享經濟在目前疫情爆發下而停滯的狀況，未來將為共享經濟帶來不少的收益！更多的是保護人們不再受疫情生病！newUsafe, I safe。.</p>
      </div>
    </div>


    <?php
      include("../mod/navfoot.php");
      include("../mod/footer.php");
    ?>

  </body>
</html>

