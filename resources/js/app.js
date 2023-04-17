import './bootstrap';
$(document).ready(function() {
    $('#corps').change(function() {
    let corps_id = $(this).val();
    if(corps_id) {
             $.ajax({
                     type: 'get',
                     url: '/get_grades',
                     data: {'corps_id':corps_id},
                     success: function(data) {
                        $('#Grade').empty()

                        $('#Grade').append('<option  >Select Grade  </option>');

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

     $('#pole').change(function() {
        let pole_id = $(this).val();
        if(pole_id) {
                 $.ajax({
                         type: 'get',
                         url: '/get_division',
                         data: {'pole_id':pole_id},
                         success: function(data) {
                            $('#division').empty()

                            $('#division').append('<option  >Select division  </option>');

                            // console.log(data);
                        $.each(data, function(key, value) {
                                        // console.log(key);
                                        // console.log(value);
                                        $('#division').append('<option value="' + value.id + '">' + value.nom + '</option>');
                        });
                            // console.log(data);
                         }
                 });
             }
         });
         $('#division').change(function() {
            let division_id = $(this).val();
            if(division_id) {
                     $.ajax({
                             type: 'get',
                             url: '/get_services',
                             data: {'division_id':division_id},
                             success: function(data) {
                                $('#services').empty()

                                $('#services').append('<option  >Select services  </option>');

                                // console.log(data);
                            $.each(data, function(key, value) {
                                            // console.log(key);
                                            // console.log(value);
                                            $('#services').append('<option value="' + value.id + '">' + value.nom + '</option>');
                            });
                                // console.log(data);
                             }
                     });
                 }
             });

    })
