
$(document).ready(function () { 
    
    $('#filterbtn').click(function(){
            let gen_code = $('#gencode').val();
            let gen_date = $('#gendate').val();
            var gen_lim = $('#genlim').val();
           $.ajax({
               url:'filtertable.php',
               data:{'gen_code':gen_code,'gen_date':gen_date,'gen_lim':gen_lim },
               type: 'POST',
               success: function(data){
                $('#dataftr').empty();
                $('#dataftr').append(data);
             }
              });
        });


        $('#gencode').on('input', function(){
            let gen_code = $('#gencode').val();
            let gen_date = $('#gendate').val();
            var gen_lim = $('#genlim').val();
           $.ajax({
               url:'filtertable.php',
               data:{'gen_code':gen_code,'gen_date':gen_date,'gen_lim':gen_lim },
               type: 'POST',
               success: function(data){
                $('#dataftr').empty();
                $('#dataftr').append(data);
             }
              });
        });
        });