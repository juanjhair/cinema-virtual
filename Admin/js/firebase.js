// Initialize Firebase
var config = {
    apiKey: "AIzaSyDczE3LhzwlwUZZkBN5OctpHHTevLzIekQ",
    authDomain: "cinema-virtual.firebaseapp.com",
    databaseURL: "https://cinema-virtual.firebaseio.com",
    projectId: "cinema-virtual",
    storageBucket: "",
    messagingSenderId: "872329141530"
  };
  firebase.initializeApp(config);

  function IngresoGoogle(){
    if(!firebase.auth().currentUser){
      var provider = new firebase.auth.GoogleAuthProvider();

      provider.addScope('https://www.googleapis.com/auth/plus.login');
      firebase.auth().signInWithPopup(provider).then(function(result){
        var token = result.credential.accessToken;
        var user=result.user;
        var name=result.additionalUserInfo.profile.given_name;
        var surname=result.additionalUserInfo.profile.family_name;
        var email=result.user.email;
        var photo=result.user.photoURL;
        var red= 'Google';
        var response;
        
        $.ajax({
            url:'http://localhost/cinema_virtual/Admin/Login',
            type: 'post',
            datatype: 'json',
            data: {
                name: name,
                surname: surname,
                email: email,
                photo: photo,
                red: red
            }
        }).done(function(res){
          response=JSON.parse(res);
          if(response.data==null){
            alertError(response.message,"http://localhost/cinema_virtual/Admin/Home");
          }else{
            alertWelcome(response.message,response.data.name,photo,"http://localhost/cinema_virtual/Admin/Home");
          }
        }).fail(function(){
          alertError("An error occurred, try again please","http://localhost/cinema_virtual/Admin/Home");
        })
      }).catch(function(error){
          var errorCode=error.code;
          if(errorCode==='auth/account-exist-with-diferent-credential'){
            //alert('El usuario ya existe');
          }
      });
    }else{
      firebase.auth().signOut();
    }
  }

