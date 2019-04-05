/* LOGIN EVENTS */
$('#btn-Google').click(function(){
    IngresoGoogle();
});

/* LOGOUT EVENTS */

$('#logout').click(()=>{
    firebase.auth().signOut();
	window.location.href="http://localhost/cinema_virtual/Admin/Logout";
});


/* OPTIONS EVENTS */
$('#movies').click(function(){
    $("#content").empty();
    $("#content").html("<div id='movies-content' ></div>");
    $.ajax({
        url:   'http://localhost/cinema_virtual/Admin/Movie',
        type:  'get',
        dataType: 'html',
        beforeSend: function () {
                $('#movies-content').html("Espere un momento");
        }
    }).done(function(response){
        $('#movies-content').html(response);
      }).fail(function(){
        alertError("An error occurred, try again please","http://localhost/cinema_virtual/Admin/Home");
      });
    
});

$('#rooms').click(function(){
    $("#content").empty();
    $("#content").html("<div id='rooms-content' ></div>");
    $.ajax({
        url:   'http://localhost/cinema_virtual/Admin/Room',
        type:  'get',
        beforeSend: function () {
            $('#rooms-content').html("Espere un momento");
        }
    }).done(function(response){
        $('#rooms-content').html(response);
      }).fail(function(){
        alertError("An error occurred, try again please","http://localhost/cinema_virtual/Admin/Home");
      });
});

