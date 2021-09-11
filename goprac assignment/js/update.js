function updaterow(x,y){
    var i=0;
    if(i<1)
    {
    addrow(x,y);
    i++;
    }
}

  

function addrow(x,y) {
    var html = 
    "<td id='updatingid' style='display:none;'>"+y.find("td:eq(0)").html()+"</td><td><input type='text' id='updatedvalue' class='text-light' placeholder='Enter new code'></td><td></td><td></td><td><button class='button updatecancel' style='border-radius: 25px;border-color: rgb(90, 51, 36);color: rgb(90, 51, 36); background-color: white;' value='cancel' onclick='refresh();' >Cancel</button></td><td><button class='button updatecomit' style='border-radius: 25px;border-color: rgb(23, 77, 39);color: rgb(23, 77, 39);background-color: white;' onclick='updatecommit(this)'>Confirm</button></td>";
      
    $('table > tbody > tr').eq(y.index()).after(html);
}

function removeRow(oButton) {
    var empTab = document.getElementById('empTable');
    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); 
}

function updatecommit(y)
{
    var st=$('#updatedvalue').val();
    // var id=$('#updatingid').textContent;
    var id=document.getElementById("updatingid").innerText;
    if(confirm("Are you sure..."))
    {
        $.ajax({
            url:'updaterow.php',
            data:{'id':id,'st':st},
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