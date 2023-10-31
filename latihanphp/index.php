<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container">
    <h1 class="text-left">Toko Wayang Kami</h1>
    <p class="text-md-start">Program Aplikasi Sederhana untuk menghitung penjualan barang toko Wayang Kami</p>
    </div>
  <div class="container">
    <form action="" method="POST" name="penjualan">
  <div class="form-group">
    <label for="ExampleInputBarang">Nama barang</label>
    <input type="text" name="nama_brg" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="ExampleInputHarga">Harga barang</label>
    <input type="text" name="hrg_brg" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="ExampleInputJumlah">Jumlah Barang</label>
    <input type="text" name="jml_brg" class="form-control" placeholder="">
</div>
<button type="submit" class="btn btn-primary mb-2" name="submit">Hitung</button>  
    </form>
  </div>
  
  <?php
  if (isset($_POST['submit'])) {
    $brg = $_POST['nama_brg'];
    $harga = $_POST['hrg_brg'];
    $jumlah = $_POST['jml_brg'];
  
  echo "<div class='container'>";
  echo "<hr><h3 class='text-md-start'>Jumlah yang harus dibayarkan</h3>";
  
  $barang = $jumlah * $harga;
  $diskon = $barang * 0.05;
  $total = $barang - $diskon;

   echo "Nama Barang : $brg <br>";
   echo "Harga Barang : $harga <br>";
   echo "Jumlah Barang : $jumlah <br>";
   echo "Diskon : 5% <br>";
   echo "<h3 class='text-md-start'>Rp. $total</h3>";
}
  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>