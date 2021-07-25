$(document).ready(function(){
    $("#loginForm").unbind('submit').bind('submit', function() {
  
      var form = $(this);
      var url = form.attr('action');
      var type = form.attr('method');
  
      $.ajax({
        url  : url,
        type : type,
        data : form.serialize(),
        dataType: 'json',
        success:function(response) {
          if(response.success == true) {
            window.location = 'admin';
          }
          else {
            Swal.fire({
              type: 'error',
              title: 'Terjadi Kesalahan',
              text: 'Username / Password anda salah'
            });
          } // /else
        } // /if
      });
  
      return false;
    });
  });