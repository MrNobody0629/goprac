function deleterow(x) {
  var id=x.find("td:eq(0)").html();
  if(confirm("Are you sure..."))
  {
    $.ajax({
      url:'deleterow.php',
      data:{'id':id},
      type: 'POST',
      success: function(data){
       alert(data);
       refresh();
    }
     });
  }
}

function refresh(){
  var gen_code = $('#gencode').val();
  var gen_date = $('#gendate').val();
  var gen_lim = $('#genlim').val();
 $.ajax({
     url:'filtertable.php',
     data:{'gen_code':gen_code,'gen_date':gen_date,'gen_lim':gen_lim },
     type: 'POST',
     success: function(data){
      $("#dataftr").empty();
      $("#dataftr").append(data);
   }
    });
}