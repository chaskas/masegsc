$(document).ready(function(){
  $('#form-submit').click(function(){
    $.ajax({type: "POST", url: "sendmail", data: $('#form-send').serialize() , success: function(){$('#sendmail').addClass('box2');$('#sendmail').text('Próximamente nos contactaremos con usted, gracias.');$('#form_container').hide();}});
    //$('#sendmail').load($('#form-send').action());
    return false;
  });
});
