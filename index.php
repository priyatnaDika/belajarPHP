<form method="GET" action="">
    nilai a : <input type="text" name="a"><br><br>
    nilai b : <input type="text" name="b"><br><br>
    operasi : <br>
        <input type="radio" name="operasi" value="tambah"> penjumblahan<br>
        <input type="radio" name="operasi" value="kurang"> pengurangan<br>
        <input type="radio" name="operasi" value="kali"> perkalian<br>
        <input type="radio" name="operasi" value="bagi"> pembagian<br>

        <input type="submit" name="proses" value="hitung"> <br>
</form>

<?php

         if(isset($_GET['proses'])){

            $a = $_GET['a'];
            $b = $_GET['b'];
            $operasi = $_GET['operasi'];
        
            echo"Nilai a = $a = <br>
                 Nilai b = $b";

            if($operasi=="tambah"){
                $c = $a + $b;
                echo"Penjumblahan $a + $b = $c";
            }
            
            elseif($operasi=="kurang"){
                $c = $a - $b;
                echo"Pengurangan $a - $b = $c";
            }
            elseif($operasi=="kali"){
                $c = $a * $b;
                echo"Perkalian $a * $b = $c";
            }
            elseif($operasi=="bagi"){
                $c = $a / $b;
                echo"Pembagian $a / $b = $c";
            }
            else{
                echo"Anda belum mengisikan / memilih operasi";
            }
         }




?>