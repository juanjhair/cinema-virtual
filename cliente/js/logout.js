
$('#logout').click(function(){
    firebase.auth().signOut();
	window.location.href="login/close_session.php";
});