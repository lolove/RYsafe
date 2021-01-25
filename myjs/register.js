$(document).ready(function () {
  //標單宣告
  var register = {
    UserId: null,
    Name: $('input[name="Name"]').val(),
    Sex: 'Male',
    License: $('input[name="License"]').val(),
    Email: $('input[name="Email"]').val(),
    Password: $('input[name="Password"]').val(),
    Abroad: '否',
    Place: [],
    Symptom: [],
    Contact: 'No',
    Time: null
  }

  //表單抓取資料
  $('.change').click(function () {
    //input
    // register[$(this).attr('name')] = $(this).val()
    

    $('.change').on('keyup', function () {
      //確認密碼一樣
      if ($(this).attr('name') == 'PasswordCheck') {
      } else {
        register[$(this).attr('name')] = $(this).val()
      }
    })

    //select
    $('select').on('change', function () {
      register[$(this).attr('name')] = $(this)
        .children('option:selected')
        .val()
    })

    //input radio
    $('.change').on('change', function () {
      if (this.value == 'ifAboardYes') {
        register['Abroad'] = 'Yes'
      } else {
        if (this.value != 'ifAboardNo') {
          if ($(this).attr('name') == 'ifTouch') {
            register['Contact'] = $(this).val()
          }
        }
      }
    })

    //input checkbox 國家
    $("input[name='region']").click(function () {
      if ($(this).is(':checked')) {
        register['Place'].push(
          $(this)
            .next()
            .text()
        )
        $.unique(register['Place'])
      } else {
        remove = $(this)
          .next()
          .text()
        register['Place'] = jQuery.grep(register['Place'], function (value) {
          return value != remove
        })
      }
    })

    //症狀
    $("input[name='Symptom']").on('change', function () {
      if ($(this).is(':checked')) {
        register['Symptom'].push(
          $(this)
            .next()
            .text()
        )
        $.unique(register['Symptom'])
      } else {
        remove = $(this)
          .next()
          .text()
        register['Symptom'] = jQuery.grep(register['Symptom'], function (
          value
        ) {
          return value != remove
        })
      }
    })
  })

  //表單上傳
  $('#submit-btn').on('click', function () {
    console.log(register)
    if ($("input[name='PasswordCheck']").val() != '') {
      if ($("input[name='PasswordCheck']").val() == register['Password']) {
        if (register['Abroad'] != '否') {
          if (register['Place'].length == 0) {
          } else {
            upload(register)
          }
        } else {
          upload(register)
        }
      } else {
        alert('密碼錯誤')
      }
    } else {
      alert('輸入密碼')
    }

    return false
  })

  //表單更新
  $('#update-btn').on('click', function () {
    if ($("input[name='PasswordCheck']").val() != '') {
      if ($("input[name='PasswordCheck']").val() == register['Password']) {
        if (register['Abroad'] != '否') {
          if (register['Place'].length == 0) {
          } else {
            update(register)
          }
        } else {
          update(register)
        }
      } else {
        alert('密碼錯誤')
      }
    } else {
      alert('輸入密碼')
    }

    return false
  })
})

function upload (register) {
  register['Time'] = new Date($.now())
  var requestData = new Object()
  requestData['register'] = JSON.stringify(register)
  $.ajax({
    url: '../MyPHP/upload.php',
    cache: false,
    data: requestData,
    type: 'POST',
    dataType: 'text',
    async: false,
    success: function (result) {
      console.log(result)
      window.location.href = '../regisuccess/index.php'
    },
    error: function (date) {
      console.log(date)
    }
  }) 
  return false
}

function update(register){
  register['Time'] = new Date($.now())
  register['UserId'] = $.cookie('Uid')
  console.log(register)
  var requestData = new Object()
  requestData['register'] = JSON.stringify(register)
  $.ajax({
    url: '../MyPHP/update.php',
    cache: false,
    data: requestData,
    type: 'POST',
    dataType: 'text',
    async: false,
    success: function (result) {
      console.log(result)
      window.location.href = '../upsuccess/index.php'
    },
    error: function (date) {
      console.log(date)
    }
  })
  return false
}
