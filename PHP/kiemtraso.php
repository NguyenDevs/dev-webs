<!DOCTYPE html>
<html>
<head>
    <title>Kiểm tra số</title>
    <style>
        form{
            background-color: aquamarine;
            text-align: center;
            margin: auto;
        }
        h1{
            background-color: brown;
        }
        
        
    </style>
</head>
<body>

<form method="post">
<h1 >Liệt kê</h1>
<input type="radio" id="prime" name="option" value="prime">
        <label for="prime">Số nguyên tố</label>
        
        <input type="radio" id="perfect" name="option" value="perfect">
        <label for="perfect">Số hoàn hảo</label>
        
        <input type="radio" id="square" name="option" value="square">
        <label for="square">Số chính phương</label>
        
        <input type="radio" id="fibonacci" name="option" value="fibonacci">
        <label for="fibonacci">Số Fibonacci</label>
        <br><br>
        
        
    Số n: <input type="text" name="number"><br>
    Kết quả: <input type="text" name="result"><br>
    <input type="submit" name="submit" value="Liệt kê">
</form>

<?php
if(isset($_POST['submit'])) {
    $option = $_POST['option'];
    $number = $_POST['number'];
    $result = $_POST['result'];

    if(is_numeric($number) && is_int($number + 0)) {
        if($option == "prime") {
            $result = "Các số nguyên tố từ 1 đến $number là: ";
            for($i = 2; $i <= $number; $i++) {
                $is_prime = true;
                for($j = 2; $j <= sqrt($i); $j++) {
                    if($i % $j == 0) {
                        $is_prime = false;
                        break;
                    }
                }
                if($is_prime) {
                    $result .= "$i ";
                }
            }
        } elseif($option == "perfect") {
            $result = "Các số hoàn hảo từ 1 đến $number là: ";
            for($i = 2; $i <= $number; $i++) {
                $sum = 1;
                for($j = 2; $j <= sqrt($i); $j++) {
                    if($i % $j == 0) {
                        $sum += $j;
                        if($j != ($i / $j)) {
                            $sum += ($i / $j);
                        }
                    }
                }
                if($sum == $i) {
                    $result .= "$i ";
                }
            }
        } elseif($option == "square") {
            $result = "Các số chính phương từ 1 đến $number là: ";
            for($i = 1; ($i * $i) <= $number; $i++) {
                if(is_int(sqrt($i))) {
                    $result .= ($i * $i) . " ";
                }
            }
        } elseif($option == "fibonacci") {
            function isPerfectSquare($x) { 
                return sqrt($x) * sqrt($x) == $x; 
            } 
              
            function isFibonacci($n) { 
                return isPerfectSquare(5 * ($n * $n) + 4) || 
                       isPerfectSquare(5 * ($n * $n) - 4); 
            } 

            $result = "Các số Fibonacci từ 1 đến $number là: ";
            for ($i = 1; $i <= $number; ++$i) { 
                if (isFibonacci($i)) { 
                    $result .= "$i "; 
                } 
            } 
        }
    } else {
        if(empty(trim($_POST['number']))) {
            echo "<script>alert('Vui lòng nhập một số nguyên.');</script>";
        } else {
            echo "<script>alert('Vui lòng nhập một số nguyên hợp lệ.');</script>";
        }
    }

    echo "<script>document.getElementsByName('result')[0].value='$result';</script>";
}
?>

</body>
</html>