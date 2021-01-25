$(document).ready(function () {
    
    role = $.cookie('Role')
    $('#sign-in').on('click',function(){
        if(role == null || role == undefined ){
            window.location.href = '../login'
        }else{
            $.cookie('Role',null,{ path: '/', secure: false })
            $.cookie('Uid',null,{ path: '/', secure: false })
            $.cookie('Carid',null,{ path: '/', secure: false })
            window.location.href='../home'
        }
    })

    $('#search-submit').on('click',function(){
        var number = $('#input').val();
        if(number != ''){
            window.location.href = '../car?number='+number  
        }
        return false
    })
    
})