$('#myform').submit(function(){
    return false;
   });

$('#insert').click(function()
{
    var n=parseInt($('#numbertext').val());
    if (n>0) { 
        $('#progbox').show();
        for (let i = 1; i <= n; i++) {
            $.post(
                $('#myform').attr('action'),
                function(result){
                    var pb=document.getElementById('progbar');
                    pb.style.width = Math.round((i*100)/n) + '%';
                    pb.innerHTML = Math.round((i*100)/n)  + '%';
                    if(((i*100)/n)==100)
                    {
                        $('#progbox').hide();
                        alert(n +" record inserted");
                    }
                }
                );
            }
    }
    else
    {alert('enter number to generate codes'); }
    });