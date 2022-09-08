<form action="lingkaran.php" method="POST">
    <h1>Rumus Lingkaran</h1>
    <p>jari  jari:</p>
    <input type= "number" name="jarijari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Lingkaran"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $jarijari = $_POST["jarijari"];
        $luas = 3.14 * $jarijari * $jarijari;

        echo "jari-jari : $jarijari <br>";
        echo "Luas lingkaran : $luas <br>";

     }