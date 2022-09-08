<form action="rumus-jajargenjang.php" method="POST">
    <h1>Rumus Menghitung Luas Jajar Genjang </h1>
    <p>Alas : </p>
    <input type= "number" name="alas" placeholder="Ex. 5" /><br>
    <p>Tinggi : </p>
    <input type= "number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $alas = $_POST['alas']; 
        $tinggi = $_POST['tinggi'];

         // menghitung Luas Jajar Genjang
        $luas = $alas * $tinggi;

        echo "Hasil hitung Luas Jajar Genjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Maka Luas Jajar Genjang adalah : $luas <br>";
     }