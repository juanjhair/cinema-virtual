function alertConfirm(){
    
} 
function alertWelcome(message,name,photo,url){
    Swal.fire({
        titleText:message+name,
        imageUrl: photo,
        imageHeight:150,
        imageWidth: 150,
        position:'center',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.value) {
          window.location.href=url;
        }
      });
}    
function alertError(message,url){
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: message,
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.value) {
          window.location.href=url;
        }
      });
}