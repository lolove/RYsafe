$(document).ready(function () {
    var url = new URL(window.location.href)
    var UserId = $.cookie('Uid')
    let url_list = url.searchParams
    var car_id = ''
    if (url_list.has('number')) {
        car_id = url_list.get('number')
    }
    car_id = $.cookie('Carid')
    console.log(car_id)
    GetData(car_id)
    $('#cleanget').on('click',function(){
        var Clean = [];
        $('input[type="checkbox"]').on('change',function(){
            Clean.push($(this).parent().text().trim())
        })
        $('#cor').on('click',function(){
            $.ajax({
                url: '../MyPHP/car2.php',
                cache: false,
                data: {
                    uid:UserId,
                    carid: car_id,
                    Clean:Clean
                },
                type: 'POST',
                dataType: 'text',
                async: false,
                success: function (result) {
                    console.log(result)
                    window.location.href = "../car2/index.php?number="+car_id
                },
                error: function (date) {
                    console.log(date)
                }
            })
        })
    })

    getcolor(car_id)
})

function GetData(car_id){
    $.ajax({
        url: '../MyPHP/car.php',
        cache: false,
        data: {
            carid: car_id
        },
        type: 'POST',
        dataType: 'text',
        async: false,
        success: function (result) {
            console.log(result)
            var re = result.split('|')
            timelist = JSON.parse(re[0])
            userlist = JSON.parse(re[1])
            console.log(userlist)
            userdashboardmake(userlist)
            timedashboardmake(timelist)
        },
        error: function (date) {
            console.log(date)
        }
    })
}

function userdashboardmake(userlist) {
    console.log(userlist)
    $('#car-id').text(userlist['License'])
    $('#driver_name').text(userlist['Name'])

    var resultstring = ''
    //分出資料
    if (Array.isArray(userlist['Place']) && userlist['Place'].length != 0) {
        resultstring += '<p class="m-0">兩週內曾到</p>'
        for (var i = 0; i < userlist['Place'].length; i++) {
            resultstring +=
                '<p class="m-0">&nbsp;●&nbsp;' + userlist['Place'][i] + '</p>'
        }
    } else {
        //do not thing
    }

    if (Array.isArray(userlist['Symptom']) & (userlist['Symptom'].length != 0)) {
        resultstring += '<p class="m-0">這兩週內出現症狀</p>'
        for (var i = 0; i < userlist['Symptom'].length; i++) {
            resultstring +=
                '<p class="m-0">&nbsp;●&nbsp;' + userlist['Symptom'][i] + '</p>'
        }
    } else {
        //do not thing
    }

    //製作dashboard
    
    $('#recent').html(resultstring)
}

function timedashboardmake(timelist) {
    $.each(timelist['Event'], function (index, val) {
        switch (val['Ishealthy']) {
            case '1':
                green(val['Time'], val['Discript'])
                break
            case '2':
                yellow(val['Time'], val['Discript'])
                break
            case '3':
                red(val['Time'], val['Discript'])
                break
            case '4':
                blue(val['Time'], val['Discript'])
                break
        }
    })
}

function green(time, str) {
    if(str['Clean'].length == 0 && str['Symptom'].length == 0 && str['Place'].length == 0){
        str = '皆無症狀'
    }
    var result = ''
    result +=
        '<div class="row">' +
        '<div class="col-2 col-md-2 textCenter pl-4 p-0">' +
        '<h1 class="m-0 far fa-check-circle card-icon-green"></h1>' +
        '</div>' +
        '<div class="col-3 col-md-3 hei40px px-0 textCenter">' +
        '<div class="textCenter centerVertically">' +
        '<h5 class="m-0">' +
        time +
        '</h5>' +
        '</div>' +
        '</div>' +
        '<div class="col-7 col-md-7 p-0 pl-1 hei40px">' +
        '<div class="textLeft centerVertically">' +
        '<p class="m-0">' +
        str +
        '</p>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<hr class="my-3" align="center" width="100%">'
    $('#today').append(result)
}

function blue(time, clean) {
    var result = ''
    result +=
        '<div class="row">' +
        '<div class="col-2 col-md-2 textCenter pl-4 p-0">' +
        '<h1 class="m-0 fas fa-hand-sparkles card-icon-blue"></h1>' +
        '</div>' +
        '<div class="col-3 col-md-3 hei40px px-0 textCenter">' +
        '<div class="textCenter centerVertically">' +
        '<h5 class="m-0">' +
        time +
        '</h5>' +
        '</div >' +
        '</div >' +
        '<div class="col-7 col-md-7 p-0 pl-1">' +
        '<p class="m-0"> 清潔工作 </p>'
    if(clean['Clean'] != null){
        for (var i = 0; i < clean['Clean'].length; i++) {
            result += '<p class="m-0">&nbsp;●&nbsp;' + clean['Clean'][i] + '</p>'
        }
    }

    result +=
        '</div>' + '</div >' + '<hr class="my-3" align="center" width="100%">'
    $('#today').append(result)
}

function yellow(time, country) {
    var result=''
    result +=
        '<div class="row">' +
        '<div class="col-2 col-md-2 textCenter pl-4 p-0">' +
        '<h1 class="m-0 fas fa-exclamation-triangle card-icon-yellow"></h1>' +
        '</div>' +
        '<div class="col-3 col-md-3 hei40px px-0 textCenter">' +
        '<div class="textCenter centerVertically">' +
        '<h5 class="m-0">' +
        time +
        '</h5>' +
        '</div>' +
        '</div>' +
        '<div class="col-7 col-md-7 p-0 pl-1">' 
    
        if (country['Place'].length != 0) {
            result+='<p class="m-0"> 兩週內曾到 </p>'
            for (var i = 0; i < country['Place'].length; i++) {
                result += '<p class="m-0">&nbsp;●&nbsp;' + country['Place'][i] + '</p>'
            }
        }

        if (country['Symptom'].length != 0) {
                result += '<p class="m-0">這兩週內出現症狀</p>'
                for (var i = 0; i < country['Symptom'].length; i++) {
                    result += '<p class="m-0">&nbsp;●&nbsp;' + country['Symptom'][i] + '</p>'
                }
            }

    result +=
        '</div>' + '</div>' + '<hr class="my-3" align="center" width="100%"></hr>'

    $('#today').append(result)
}
function red(time,symptom) {
    console.log(symptom)
    var result = ''
    result +=
        '<div class="row">' +
        '<div class="col-2 col-md-2 textCenter pl-4 p-0">' +
        '<h1 class="m-0 fas fa-head-side-mask card-icon-red"></h1>' +
        '</div>' +
        '<div class="col-3 col-md-3 hei40px px-0 textCenter">' +
        '<div class="textCenter centerVertically">' +
        '<h5 class="m-0">' +
        time +
        '</h5>' +
        '</div>' +
        '</div>'
    if (symptom['Place'].length != 0) {
        result +=
            '<div class="col-7 col-md-7 p-0 pl-1">' + '<p class="m-0">兩週內曾到</p>'
        for (var i = 0; i < symptom['Place'].length; i++) {
            console.log(symptom['Place'][i])
            result += '<p class="m-0">&nbsp;●&nbsp;' + symptom['Place'][i] + '</p>'
        }
    }

    if (symptom['Symptom'].length != 0) {
        result += '<p class="m-0">這兩週內出現症狀</p>'
        for (var i = 0; i < symptom['Symptom'].length; i++) {
            result += '<p class="m-0">&nbsp;●&nbsp;' + symptom['Symptom'][i] + '</p>'
        }
    }

    result +=
        '</div>' + '</div>' + '<hr class="my-3" align="center" width="100%">'

    $('#today').append(result)
}


function getcolor(car_id){
    $.ajax({
        url: '../MyPHP/countcolor.php',
        cache: false,
        data: {
            carid: car_id
        },
        type: 'POST',
        dataType: 'text',
        async: false,
        success: function (result) {
            console.log(result)
            color = JSON.parse(result)
            total = color[0]+color[1]+color[2]+color[3]
            $('#green').text("x"+color[0])
            $('#yellow').text("x"+color[1])
            $('#red').text("x"+color[2])
            $('#blue').text("x"+color[3])
            avg = color[3] / total * 100 
            $('#clean_pa').text("清潔比例："+ (avg?avg:0) +'%')
        },
        error: function (date) {
            console.log(date)
        }
    })
}