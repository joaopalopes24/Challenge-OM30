function validateForm(form, data) {

  //console.log(data);

  if (data.status) {
    Swal.fire({
      title: 'Tudo certo!',
      text: data.msg,
      icon: 'success',
      showCancelButton: false,
      confirmButtonText: 'Ok!'
    }).then((result) => {
      if (result.value) {
        window.location.href = data.redirect;
      }
    })
  } else {
    if (data.error === 0) {
      Swal.fire({
        type: "error",
        icon: "error",
        title: 'Ops! Erro',
        text: data.msg,
      });
    }
    $.each(data.list_errors, function (index, element) {
      //$('#' + index).addClass('is-invalid');
      $('#feedback-' + index).html(element);
    });    
  }
}

function openLoading() {
  $('#loading').modal('show');
}

function closeLoading() {
  $('#loading').modal('hide');
}