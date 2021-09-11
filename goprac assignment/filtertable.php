<?php
$gen_code= $_POST['gen_code'];
$gen_date= $_POST['gen_date'];
$gen_lim= $_POST['gen_lim'];
include_once 'connection.php';
if ($gen_lim==null) {
    # code...
    $gen_lim=1000;
}
if($gen_date==null)
{
    $Q="SELECT * FROM gen_numbers where Gen_Number like '$gen_code%' limit $gen_lim";
}
else
{
    $Q="SELECT * FROM gen_numbers where Gen_Number like '$gen_code%' and startdate like '$gen_date%' limit $gen_lim";
}
$result = mysqli_query($con,$Q);
?>
<div class="container-fluid justify-content-center text-center">
<div class="row">
  <div class="col">
  <?php
if (mysqli_num_rows($result) > 0) {
?>
      <table class="table table-striped table-dark" id="filtertable">
          <tr class="">
              <th class="" style="display:none;">
                  I'd
              </th>
              <th class=" " onclick="sortByCode();">
              <i id="codesortid" class="fas fa-sort"></i> codes
              </th>
              <th class=""  onclick="sortByDate();">
              <i id="datesortid" class="fas fa-sort"></i> Start date
              </th>
              <th class="">
                  End date
              </th>
              <th class="">
                  Delete
              </th>
              <th class="">
                  Update
              </th>
          </tr>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
            ?>
    
           <tr class="table-primary">
              <td class="table-primary" id="idd" style="display:none;">
                <?php echo $row["id"]; ?>
            </td>
              <td class="table-primary">
                <?php echo $row["Gen_Number"]; ?>
              </td>
              <td class="table-primary">
              <?php echo $row["startdate"]; ?>
              </td>
              <td class="table-primary">
              <?php echo $row["end_date"]; ?>
              </td>
              <td class="table-primary">
                  <button class="deletebtn" onclick="deleterow($(this).closest('tr'))">Delete</button>
              </td>
              <td class="table-primary">
                  <button class="updatebtn" onclick="updaterow(this,$(this).closest('tr'))">Update</button>
              </td>
          </tr>
          <?php
          $i++;  
          }
          ?>
      </table>
      <?php
      }
      else{
          echo "No result found";
      }
      ?>
  </div>
</div>
</div>