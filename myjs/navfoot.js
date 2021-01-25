$(document).ready(function () {
    $(' #update').hide()
    $(' #mycar').hide()

    role = $.cookie('Role')
    if (role != 'null' && role != undefined) {
        //註冊 登入消失 更新 回報 出現

        $('#registe').hide()
        $(' #update').show()

        if (role == 'Driver') {
            $(' #mycar').show()
            $(' #mycar').attr('href','../car2')
            $(' #update').attr('href','../update')
        }
        if (role == 'Costumer') {
            $(' #mycar').show()
            $(' #mycar').attr('href','../car')
            $(' #mycar').attr('href','../car2')
            $(' #update').attr('href','../update')
        }
    }
})
