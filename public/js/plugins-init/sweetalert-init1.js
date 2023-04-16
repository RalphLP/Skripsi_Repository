

/*******************
Sweet-alert JS
*******************/
function submitForm(form) {
  Swal.fire({
      title: "Apakah anda yakin untuk submit form ini?",
      text: "This action cannot be undone!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "blue",
      confirmButtonText: "Ya, submit!",
  }).then((result) => {
      if (result.value) {
        form.submit();
      }
  });
  return false;
};
