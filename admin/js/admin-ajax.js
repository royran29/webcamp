$(document).ready(function(){
    $('#save-registry').on('submit', function(e) {
        e.preventDefault();
        var data_form = $(this).serializeArray(); //create array with form's data

        $.ajax({
            type: $(this).attr('method'),
            data: data_form,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                if (data.answer == 'success') {
                    swal(
                        'Good job!',
                        'Administrator inserted correctly',
                        'success'
                      );
                }
                else{
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                      })
                }
            }
        })
    });

    $('#login-admin-form').on('submit', function(e) {
        e.preventDefault();
        var data_form = $(this).serializeArray(); //create array with form's data

        $.ajax({
            type: $(this).attr('method'),
            data: data_form,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                if (data.access == 'yes') {
                    swal(
                        'Login Correct!',
                        'Welcome ' + data.name +' to the administration panel',
                        'success'
                      );
                      setTimeout(function() {
                          window.location.href = 'admin-area.php';
                      }, 2000);
                }
                else{
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Incorrect username or password!',
                      })
                }
            }
        })
    });
});
