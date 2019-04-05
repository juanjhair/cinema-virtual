function alertConfirm(){
    
} 
function alertWelcome(message,name,photo,url){
    Swal.fire({
        titleText:message+name,
        imageUrl: photo,
        imageHeight:150,
        imageWidth: 150,
        position:'center',
        showConfirmButton: false,
        timer: 2500,
        onBeforeOpen: () => {
          Swal.showLoading();
        },
        onClose: () => {
          window.location.href=url;
        }
      });
    
}    
function alertError(message,url){
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: message,
        confirmButtonText: 'OK',
        onClose: () => {
          window.location.href=url;
        }
      }).then((result) => {
        if (result.value) {
          window.location.href=url;
        }
      });
}
function alertSuccess(message){
  Swal.fire({
    position: 'center',
    type: 'success',
    title: message,
    showConfirmButton: false,
    timer: 4000
  })
}