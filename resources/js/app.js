import './bootstrap';
$(document).ready(function() {
    $('#corps').change(function() {
    let corps_id = $(this).val();
    console.log(corps_id);
    if(corps_id) {
             $.ajax({
                     type: 'get',
                     url: '/get_grades',
                     data: {'corps_id':corps_id},
                     success: function(data) {
                        $('#Grade').empty()

                        $('#Grade').append('<option value="">  </option>');

                        // console.log(data);
                    $.each(data, function(key, value) {
                                    // console.log(key);
                                    // console.log(value);
                                    $('#Grade').append('<option value="' + value.id + '">' + value.nom + '</option>');
                    });
                        // console.log(data);
                     }
             });
         }
     });
    })
