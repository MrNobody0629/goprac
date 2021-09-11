
    let j=0;
    function sortByDate() 
    {
        if (j%2==0) {
            sortByDateasc();
            $("#datesortid").removeClass("fas fa-sort");
            $("#datesortid").removeClass("fas fa-sort-down");
            $("#datesortid").addClass("fas fa-sort-up");
            j++;
            
        } else {
            sortByDatedec();
            $("#datesortid").removeClass("fas fa-sort");
            $("#datesortid").removeClass("fas fa-sort-up");
            $("#datesortid").addClass("fas fa-sort-down");
            j++;
            
        }    
    }

    let i=0;
    function sortByCode() 
    {
        if (i%2==0) {
            sortByCodeasc();
            $("#codesortid").removeClass("fas fa-sort");
            $("#codesortid").removeClass("fas fa-sort-down");
            $("#codesortid").addClass("fas fa-sort-up");
            i++;
            
        } else {
            sortByCodedec();
            $("#codesortid").removeClass("fas fa-sort");
            $("#codesortid").removeClass("fas fa-sort-up");
            $("#codesortid").addClass("fas fa-sort-down");
            i++;
            
        }    
    }


    function sortByCodeasc() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("filtertable");
        switching = true;
        while (switching) {
          switching = false;
          rows = table.rows;
          for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[1];
            y = rows[i + 1].getElementsByTagName("TD")[1];
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      }


      function sortByCodedec() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("filtertable");
        switching = true;
        while (switching) {
          switching = false;
          rows = table.rows;
          for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[1];
            y = rows[i + 1].getElementsByTagName("TD")[1];
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      }


      function sortByDateasc()
      {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("filtertable");
        switching = true;
        while (switching) {
          switching = false;
          rows = table.rows;
          for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[2];
            y = rows[i + 1].getElementsByTagName("TD")[2];
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      }

      function sortByDatedec()
      {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("filtertable");
        switching = true;
        while (switching) {
          switching = false;
          rows = table.rows;
          for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[2];
            y = rows[i + 1].getElementsByTagName("TD")[2];
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      }