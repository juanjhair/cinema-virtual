
/* ROOM EVENTS */
var index_room=1;
$(document).on("click","#add-room",function(){
    if(index_room<=3 && index_room!=null ){
        index_room++;
        var input_room="<div class='col-3'><label for='room-"+index_room+"'>Room</label><input type='text' class='form-control mb-3' id='room-"+index_room+"' name='room-"+index_room+"'></div>";
        var input_seast="<div class='col-3'><label for='seats-"+index_room+"'>Seast</label><input type='text' class='form-control mb-3' id='seats-"+index_room+"' name='seats-"+index_room+"'> </div>";
        var input_state="<div class='col-6'><div class='form-group'><label class='font-weight-bold' for='room-state'>State</label><select class='form-control mb-3' id='state-"+index_room+"' name='state-"+index_room+"'><option>Enabled</option><option>Disabled</option></select></div></div>";
        $("#room-content").append("<div class='row bg-light'>"+input_room+input_seast+input_state+"</div>");
    }else{
        if(index_room!=null){
            $("#message").append("<label>Can´t insert more, sorry only those</label>");
            index_room=null;
        }
    }
}); 

$(document).on("click","#btn-insert",function(e){
    e.preventDefault();
    var data=[];
    var json_data;
    var i=1;
    while(i<=index_room){
        data.push({
            'room':  $("#room-"+i).val(),
            'seats': $("#seats-"+i).val(),
            'state': $("#state-"+i).val()
        });
        i++;
    }
    json_data ='{'+
            '"quantity":'+index_room+','+
            '"data":'+JSON.stringify(data)+
          '}'
    $.ajax({
        url:'http://localhost/cinema_virtual/Admin/Room/insert',
        type: 'post',
        datatype: 'json',
        data: {
            json_data
        },
        beforeSend: function () {
            alert("Se esta enviando...");
        }
    }).done(function(res){
        response=JSON.parse(res);
        if(response.data==null){
            alertError(response.message,"http://localhost/cinema_virtual/Admin/Home");
        }else{
            alertSuccess(response.message);
        }
    }).fail(function(){
        alert("An error occurred, try again please");
    })
});

$(document).on("click","#show-tab",function(e){
    e.preventDefault();
    //$("#content-show").empty();
    $.ajax({
        url:   'http://localhost/cinema_virtual/Admin/Room/show',
        type:  'get',
        beforeSend: function () {
            $('#content-show').html("Espere un momento");
        }
    }).done(function(response){
        $('#content-show').append(response);
        //evento();
      }).fail(function(){
        alertError("An error occurred, try again please","http://localhost/cinema_virtual/Admin/Home");
      });

});

function edit(id){
    
    $.ajax({
        url:   'http://localhost/cinema_virtual/Admin/Room/show',
        type:  'get',
        beforeSend: function () {
            $('#content-show').html("Espere un momento");
        }
    }).done(function(response){
        $('#content-show').append(response);
        //evento();
      }).fail(function(){
        alertError("An error occurred, try again please","http://localhost/cinema_virtual/Admin/Home");
      });

}

    
   
   
