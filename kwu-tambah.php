<h1>KWU</h1>
<form action="kwu-tambah.php" method="POST">
      <label for="kodebarang">Kode Barang :</label><br>
      <input type="number" name="kodebarang" placeholder="Ex. 12003102" /><br>

      <label for="tanggal">Tanggal :</label><br>
      <input type="date" name="tanggal" placeholder="Ex. 22-09-2022" /><br>

      <label for="pembeli">pembeli :</label><br>
      <input type="text" name="pembeli" placeholder="Ex . Rahayu" /><br>

      <label for="namabarang">Nama Barang :</label><br>
      <input type="text" name="namabarang" placeholder="Ex. Indomie" /><br>

      <label for="qty">Jumlah :</label><br>
      <input type="number" name="qty" placeholder="Ex. 1" /><br>

      <label for="hargabeli">Harga Beli :</label><br>
      <input type="number" name="hargabeli" placeholder="Ex. 15.000" /><br>

      <label for="hargajual">Harga Jual :</label><br>
      <input type="number" name="hargajual" placeholder="Ex. 20.000" /><br>

      <br>
      <input type="submit" name="simpan" value="Simpan Data" />
      <a href="kwu.php">Kembali</a>
</form>

<?php
      if( isset($_POST["simpan"]) ){
            $kodebarang = $_POST["kodebarang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargabeli = $_POST["hargabeli"];
            $hargajual = $_POST["hargajual"];

            // CREATE - Menambahkan Data ke Database
            $query = "
                  INSERT INTO transaksi VALUES
                  ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
            ";

            include ('./kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='kwu.php';
                        </script>
                  ";
            }

      }
?>