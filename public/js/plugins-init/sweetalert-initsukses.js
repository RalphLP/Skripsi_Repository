

/*******************
Sweet-alert JS
*******************/
function withsuccess() {
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  });
  return false;
};
