$(document).ready(function () {

    //預設網頁
    $('#mycar').hide();
    $('#update').hide();
    $('#request').hide();

    role = $.cookie('Role')
    console.log(role)
    if(role != 'null' && role != undefined){
        //註冊 登入消失 更新 回報 出現
        $('#sign-in').text('登出')
        $('#sign-in').attr("href", '../home');
        $('#registe').hide();
        $('#update').show();
        $('#request').show();

        if(role == 'Driver'){
            $('#mycar').show();
        }
        if(role == 'Costumer'){
        }
    }


})