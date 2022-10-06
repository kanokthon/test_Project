<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
กรุณาใส่รัศมีของวงกลม <input type="text" name="v"> 
<input type="submit" value="คำนวณ">

<?php
    isset( $_POST['v'] ) ? $v = $_POST['v'] : $v = "";
    if( !empty( $v ) ) {
        echo "<hr/>";
        $pi = 3.14;
        $total = $pi * ( $v * $v );
        echo "พื้นที่วงกลม = ".number_format( $total, 2 );
    }
?>

</form>
</body>
</html>
P