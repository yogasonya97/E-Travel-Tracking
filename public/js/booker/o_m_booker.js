//______________________________________________________________________________
$(function(){
    var http = location.protocol;
    var slashes = http.concat("//");
    var host = slashes.concat(window.location.hostname);
    //alert(1);
    getSessionSelectin_s();
    function getSessionSelectin_s() {
        //var allSeatNo = []
        $.ajax({
            type:'POST',
            url:'/e-travel/booker/getSessionSelectin_s',
            dataType:'json',
            beforeSend:function(o){
            },
            success:function(o){
                $('#passenger_info').append('<table cellpadding="0" width="500" cellspacing="5" border="0">');
                $('#passenger_info').append('<thead><tr><th>No.Kursi </th><th>Nama Penumpang</th><th>Jenis Kelamin</th></tr></thead>');
                for (var i=0;i<o.length;i++){
                    $('#passenger_info').append('<tbody><tr><td>'+ o[i]+'<input type="hidden" name="seat'+i+'" value="'+ o[i]+'"/></td><td><input id="" class="" type="text" name="passenger'+i+'"  value="" ></td><td><input name="gender'+i+'" type="radio" value="M" checked=""/>Laki-laki<br><input name="gender'+i+'" type="radio" value="F"/>Perempuan</td></tr></tbody>');
                }
                $('#passenger_info').append('</table>');
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){
                
            }
        });
    }   

    $('#booker_data').live('click',function(){
        var booker_nic = document.getElementById("booker_nic").value;
        $.ajax({
            type:'POST',
            url:'/e-travel/booker/xhrserchBookerInfo',
            data:{
                booker_nic:booker_nic
            },
            dataType:'json',
            beforeSend:function(o){
            },
            success:function(o){
                document.getElementById("bookername").value = o[0].bookerName;
                document.getElementById("booker_mno").value = o[0].bookerMNo;
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){
            }
        });
    //alert("ok");
    });
    
    timeOut();
    function timeOut() {//alert("ok");
        timer = setTimeout(timeOut,1000);
        $.ajax({
            type:'POST',
            url:'/e-travel/booker/xhrtimeOut',
            dataType:'json',
            beforeSend:function(o){
            },
            success:function(o){
                if(o == 1){
                    $('#timeOutBooking').html('Your Reservation Expires in ['+parseInt(o)+'] (s)');
                    $('#timeOutBooking').html('');
                    clearTimeout(timer);
                    if(host+'/e-travel/booker/booking/' != window.location){
                    window.location.replace(host+"/e-travel/index");
                    }
                }else
                    $('#timeOutBooking').html('Your Reservation Expires in ['+parseInt(o)+'] (s)');
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){
                clearTimeout(timer);
            }
        });
    }   

});