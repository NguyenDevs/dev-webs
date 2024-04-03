<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'" />
<title>Untitled Document</title>
</head>
<body style="color: green;" >
<?php
   if(isset($_POST["so1"])&&isset($_POST["so2"])&&isset($_POST["pt"]))
{
        $so1=$_POST["so1"];
        $so2=$_POST["so2"];
        $pt=$_POST["pt"];
        switch ($pt)
     {
            case 'cong':
                $Resuft=$so1." + ".$so2." = ".($so1 + $so2);
                break;
            case 'tru':
                $Resuft=$so1." - ".$so2." = ".($so1 - $so2);
                break;
            case 'nhan':
                $Resuft=$so1." * ".$so2." = ".($so1 * $so2);
                break;
            case 'chia':
                if($so2=="0") $Resuft="Ko chia dc cho 0";
                else $Resuft=$so1." / ".$so2." = ".($so1 / $so2);
                break;
            default:
            break;
        }
     }
?>
<form action="" method="POST">
 <table>
     <tr><td colspan="5" ><center>Phép tính trên 2 số</center></td></tr>
     <tr>
       <td>Chọn Phép Tính</td>
       <td><input type="radio" value="cong" name="pt">Cộng</td>
       <td><input type="radio" value="tru" name="pt">Trừ</td>
       <td><input type="radio" value="nhan" name="pt">Nhân</td>
       <td><input type="radio" value="chia" name="pt">Chia</td>
     </tr>
     <tr>
       <td>Số thứ nhất</td>
       <td colspan="4"> <input type="number" name="so1" value= "<?php if(isset($_POST["submit"])&&isset($_POST["so2"])&&isset($_POST["so1"])&&isset($_POST["pt"])){ echo ($so1);}?>"> </td>
    </tr>
    <tr>
    <td>Số thứ 2</td>
     <td colspan="4"> <input type="number" name="so2" value= "<?php if(isset($_POST["submit"])&&isset($_POST["so1"])&&isset($_POST["so2"])&&isset($_POST["pt"])){ echo ($so2);}?>"> </td>
    </tr>
   <tr><td colspan="5"> <center> <input type="submit" name="submit" value="Tính " ></center></td></tr>
 </table>
</form>
</body>
</html>
