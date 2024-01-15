<?php
session_start();
require "functions_penjualan.php";
$barang = query("SELECT * FROM barang");

// header('Content-Type: application/json');
json_encode($barang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Karyawan</title>
</head>
<body>
   <h1>
      Transaksi
   </h1>
   <label for="kode_barang">Kode Barang</label>
   <input type="text" name="kode_barang" id="kode_barang">
   <table id="detailProduct" border="">
      <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th>Satuan</th>
         <th>Merk</th>
         <th>Harga</th>
      </tr>
   </table>
   <script>
      function getProductDetail(event){
         //deteksi tombol enter
         if(event.key === 'Enter'){
            var kodeBarangValue = document.getElementById("kode_barang").value;
            fetch('getProductDetail.php?kode_barang=' + kodeBarangValue)
            .then(Response => response.json())
            .then(product => {
               //menampilkan informasi product
            var table = document.getElementById("detailProduct");
            table.innerHTML = "<tr><th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Satuan</th><th>Merk</th><th>Harga</th></tr>";
            var row = table.insertRow(1);
            row.insertCell(0).innerHTML = product.kode_barang;
            row.insertCell(1).innerHTML = product.nama_barang;
            row.insertCell(2).innerHTML = product.satuan;
            row.insertCell(0).innerHTML = product.merk;
            row.insertCell(0).innerHTML = product.harga;
            })
            .catch(error => console.error('Error:', error));
         }
      }
      document.getElementById("kode_barang").addEventListener("keyup",getProductDetail);
   </script>
</body>
</html>