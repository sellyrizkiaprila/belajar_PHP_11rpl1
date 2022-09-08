<form action="persegi-panjang.php" method="POST">
    <h1>Rumus Persegi Panjang </h1>
    <p>Panjang : </p>
    <input type= "number" name="panjang" placeholder="Ex. 5" /><br>
    <p>Lebar : </p>
    <input type= "number" name="lebar" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $panjang = $_POST['panjang']; 
        $lebar = $_POST['lebar'];

         // menghitung Luas Persegi Panjang
        $luas = $panjang * $lebar;

        echo "Hasil hitung Luas Segi Tiga adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Maka Luas persegi panjang adalah : $luas <br>";
     }