<?php
$conn = mysqli_connect("localhost", "root", "", "ari");

function query($query)
{
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_array($result)) {
      $rows[] = $row;
   }
   return $rows;
}

//CREATE
function tambah($data)
{
   global $conn;
   $kode_barang = htmlspecialchars($data["kode_barang"]);
   $nama_barang = htmlspecialchars($data["nama_barang"]);
   $satuan = htmlspecialchars($data["satuan"]);
   $merk = htmlspecialchars($data["merk"]);
   $harga = htmlspecialchars($data["harga"]);
   $query = "INSERT INTO barang VALUES('$kode_barang','$nama_barang','$satuan','$merk','$harga')";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

//Update
function update($data)
{
   global $conn;
   $kode_barang = $data["kode_barang"];
   $nama_barang = htmlspecialchars($data["nama_barang"]);
   $satuan = htmlspecialchars($data["satuan"]);
   $merk = htmlspecialchars($data["merk"]);
   $harga = htmlspecialchars($data["harga"]);

   $query = "UPDATE barang SET
         nama_barang      = '$nama_barang',
         satuan    = '$satuan'
         merk    = '$merk'
         harga    = '$harga'
         WHERE kode_barang = '$kode_barang'
         ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

//Delete
function hapus($kode_barang)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM barang WHERE kode_barang = $kode_barang");
   return mysqli_affected_rows($conn);
}

//Searching
function cari($keyword)
{

   $query = "SELECT * FROM barang
            WHERE
            kode_barang     LIKE '%$keyword%' OR
            nama_barang     LIKE '%$keyword%' OR
            satuan          LIKE '%$keyword%' OR
            merk            LIKE '%$keyword%' OR
            harga           LIKE '%$keyword%'
            ";
   return query($query);
}
?>