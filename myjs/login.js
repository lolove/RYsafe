$(document).ready(function () {
    $('#login-form').submit(function () {
        console.log($('input[type="email"]').val())
        console.log($('input[type="password"]').val())
        $.ajax({
            url: '../MyPHP/login.php',
            cache: false,
            data: {
                email:$('input[type="email"]').val(),
                password:$('input[type="password"]').val()
            },
            type: 'POST',
            dataType: 'text',
            async: false,
            //contentType: 'application/json;charset=utf-8',
            success: function (result) {
                console.log(result)
                var re = result.split(' ')
                if(re[0] == 'Driver'){
                    $.cookie('Role', re[0], { path: '/', secure: false });
                    $.cookie('Uid', re[1], { path: '/', secure: false });
                    $.cookie('Carid', re[2], { path: '/', secure: false });
                    window.location.href='../home/index.php'
                    
                }
                if(re[0] == 'Costumer'){
                    $.cookie('Role', re[0], { path: '/', secure: false });
                    $.cookie('Uid', re[1], { path: '/', secure: false });
                    window.location.href='../home/index.php'
                }
            },
            error: function (date) {
                console.log(date)
            }
        })

        return false
    })
})
