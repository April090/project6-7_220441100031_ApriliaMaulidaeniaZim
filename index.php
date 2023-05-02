<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>


   <form method="GET" action="index.php">
    <table align="center" style="background-color: pink; padding: 10px">
    <caption><h4>Kalkulator</h4></caption>
        <tr>
            <td><label>Angka1:</label></td>
            <td><input type="number" name="angka1" value="<?=$_GET['angka1'];?>"></td>
        </tr>
        <tr>
            <td><label>Angka2:</label></td>
            <td><input type="number" name="angka2" value="<?=$_GET['angka2'];?>" ></td>
        </tr>
        <tr>
            <td><label>Hasil:</label></td>
            <td><input type="text" name="hasil" value="
            <?php

    if (isset($_GET['tambah'])){
        echo $_GET['angka1'] + $_GET ['angka2'];
    }
    elseif (isset($_GET['kurang'])){
        echo $_GET['angka1'] - $_GET ['angka2'];
    }
    elseif (isset($_GET['kali'])){
        echo $_GET['angka1'] * $_GET ['angka2'];
    }
    elseif (isset($_GET['bagi'])){
        echo $_GET['angka1'] / $_GET ['angka2'];
    }

?>
            "></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" name="tambah" <?php echo isset($_GET['tambah'])?'
                style="background-color: red;"':''?>>+</button>
            
            <button type="submit" name="kurang"  <?php echo isset($_GET['kurang'])?'
                style="background-color: red;"':''?>>-</button>
            
            <button type="submit" name="kali"  <?php echo isset($_GET['kali'])?'
                style="background-color: red;"':''?>>*</button>
            
            <button type="submit" name="bagi"  <?php echo isset($_GET['bagi'])?'
                style="background-color: red;"':''?>>/</button>
            
            <a href="index.php"><button type="button">Clear</button></a>
        </td>
        </tr>
    </table>
   </form>
</body>
</html>