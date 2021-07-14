function validateForm(form,data) {
  
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
    if (data.error == 0) {
      Swal.fire({
        title: 'Ops! Erro',
        text: data.msg,
        icon: 'error',
        type: 'error',
        showCancelButton: false,
        confirmButtonText: 'Ok!'
      }).then((result) => {
        if (result.value) {
          window.location.href = data.redirect;
        }
      })
    }else{
      setCustomMessage(form,data.list_errors);
    }
  }
}

function setCustomMessage(form,errors) {

  $.each(errors, function (index, element) {
    $('#feedback-' + index).html(element);
  });

  $('form' + form + ' :input').each(function(){
    $(this).removeClass('is-invalid');
    $(this).removeClass('is-valid');

    if(errors.hasOwnProperty($(this).attr('name'))){
      $(this).addClass('is-invalid');
    } else {
      $(this).addClass('is-valid');
    }      
  });
}

function validateInput(name,errors) {
  
  if(errors.hasOwnProperty(name)){
    $('#feedback-' + name).html(errors[name]);
    $('#' + name).removeClass('is-valid');
    $('#' + name).addClass('is-invalid');
  } else {
    $('#' + name).removeClass('is-invalid');
    $('#' + name).addClass('is-valid');
  } 
}

function openLoading() {
  $('#loading').modal('show');
}

function closeLoading() {
  $('#loading').modal('hide');
}