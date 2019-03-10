function modal(){
    $.get('login/modal_login.php',{
        beforeSend: function(){
			$('#modal-content').html("Espere un momento");
        }
    },function(respuesta){
		    $('#modal-content').html(respuesta);
    });
}