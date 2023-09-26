<?php 
$conn = mysqli_connect("localhost","root","","sekolah");

//Conneections
function query($query){
    global $conn;
    $result        = mysqli_query($conn, $query);
    $rows          = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]    = $row;
    }
    return $rows;
}

//Create
function tambah($data){
    global $conn;
    $nis    = htmlspecialchars($data["nis"]);
    $nama   = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query  = "INSERT INTO siswa VALUES('$nis','$nama','$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Update
function update($data){
    global $conn;
    $nis    = $data["nis"];
    $nama   = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE siswa SET
            nis       = '$nis',
            nama      = '$nama',
            alamat    = '$alamat'
            WHERE nis = '$nis'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Delete
function hapus($nis){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE nis = $nis");
    return mysqli_affected_rows($conn);
}

//Searching
function cari($keyword){
    
    $query = "SELECT * FROM siswa
            WHERE
            nis     LIKE '%$keyword%' OR
            nama    LIKE '%$keyword%' OR
            alamat  LIKE '%$keyword%'
            ";
    return query($query);
}
?>