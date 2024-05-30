$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        company_name: $("#company_name").val(),
        client_name: $("#client_name").val(),
        client_email: $("#client_email").val(),
        client_phone: $("#client_phone").val(),
        choosed_service: $("#choosed_service").val(),
        message: $("#message").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "{{url('reservation')}}",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
});