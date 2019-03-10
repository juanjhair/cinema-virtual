/* LOGIN EVENTS */
$('#btn-Google').click(function(){
    IngresoGoogle();
});

/* LOGOUT EVENTS */

$('#logout').click(()=>{
    firebase.auth().signOut();
	window.location.href="controller/login/close_session.php";
});

/* OPTIONS EVENTS */
$('#movies').click(function(){
    $("#content").empty();
    $("#content").html("<div id='movies-content' ></div>");
    $.ajax({
        url:   'views/movies.php',
        type:  'get',
        dataType: 'html',
        beforeSend: function () {
                $('#movies-content').html("Espere un momento");
        },
        success:  function (response) {
                $('#movies-content').html(response);
        }
    });
    
});

$('#rooms').click(function(){
    $("#content").empty();
    $("#content").html("<div id='rooms-content' ></div>");
    $.ajax({
        url:   'views/rooms.php?id='+$("#admin_id").val(),
        type:  'get',
        beforeSend: function () {
            $('#rooms-content').html("Espere un momento");
        },
        success:  function (response) {
            $('#rooms-content').html(response);
        }
    });
    
});