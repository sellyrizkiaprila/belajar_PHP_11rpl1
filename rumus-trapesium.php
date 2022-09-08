<form action="rumus-trapesium.php" method="POST">
<h1>Menghitung Luas Trapesium </h1>
    <p>Atas : </p>
    <input type= "number" name="atas" placeholder="Ex. 5" /> <br>
    <p>Bawah : </p>
    <input type= "number" name="bawah" placeholder="Ex. 5" /> <br>
    <p>Tinggi : </p>
    <input type= "number" name="tinggi" placeholder="Ex. 5" /> 
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>


<?php

     
     if(isset($_POST['proses'])){
        $atas    =$_POST["atas"];
        $bawah        =$_POST["bawah"];
        $tinggi        =$_POST["tinggi"];
       
        // menghitung Luas Trapesium
        $luas   = (($atas + $bawah)*$tinggi)/2;
        
        echo "Hasil hitung Luas Trapesium adalah sebagai berikut:<br />";
        echo "Diketahui;<br>";
        echo "Sisi Atas = $atas cm<br>";
        echo "Sisi Bawah = $bawah cm<br>";
        echo "Tinggi = $tinggi cm<br>";
        echo "<br>";
        echo "Maka: <br>";
        echo "Luas TRAPESIUM = ".$luas." cm<sup>2</sup><br/>";
    }