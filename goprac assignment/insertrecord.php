<?php
include_once 'stgenerator.php';
include_once 'connection.php';
if (mysqli_connect_error()) {
    # code...
    echo "connect error";
}
else
{
        $cdate = date("Y-m-d");
        $udate=date('Y-m-d', strtotime($cdate. ' + 1 year'));
        $INSERT = "INSERT INTO gen_numbers(Gen_Number,startdate,end_date) VALUES (?,?,?)";
        $stmt=$con->prepare($INSERT);
        $stmt->bind_param("sss",getName(6),$cdate,$udate);
        if ($stmt->execute()) {
            # code...
            echo "done";
        } else {
            # code...
            echo "not";
        }
}
?>