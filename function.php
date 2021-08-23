<?php
//koneksi database
$conn = mysqli_connect('localhost', 'root', '', 'primebread');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$koneksi = mysqli_connect("localhost", "root", "", "primebread");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " .mysqli_connect_error(); 
}

///kontak
// $host="localhost";
// $user="root";
// $passwd="";
// $db="primebread";
// $koneksi=mysql_connect($host,$user,$passwd) or die (mysql_error());
// mysql_select_db($db, $koneksi) or die (mysql_error());

// tambah//
function tambah($data)
{
    global $conn;

    $jenis_produk = htmlspecialchars($data["jenis_produk"]);
    $varian_produk = htmlspecialchars($data["varian_produk"]);
    $berat = htmlspecialchars($data["berat"]);



    // tambah_promo//
function tambah_promo($data)
{
    global $conn;
    $promo = htmlspecialchars ($data["promo"]);
    $jenis = htmlspecialchars ($data["jenis"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
}

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO menu_produk
            VALUES
            ('null','$jenis_produk','$varian_produk','$berat','$gambar')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
// upload//

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek gambar yang di upload
    if ($error ===  4) {
        echo "<script>
                alert ('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    //cek yang diupload 
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert ('yang anda upload bukan gambar!');
               </script>";
        return false;
    }
    //ukuran gambar
    if ($ukuranFile > 1000000) {
        echo "<script>
             alert ('ukuran gambar terlalu besar!');
                    </script>";
        return false;
    }
    //lolos pengecekan, gambar siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();

    move_uploaded_file($tmpName, 'gambar/' . $namaFileBaru);

    return $namaFileBaru;
}




// hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM menu_produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}


// ubah//
function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $jenis_produk = htmlspecialchars($data["jenis_produk"]);
    $varian_produk = htmlspecialchars($data["varian_produk"]);
    $berat = htmlspecialchars($data["berat"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $query = "UPDATE menu_produk SET 
                jenis_produk = '$jenis_produk',
                varian_produk = '$varian_produk',
                berat = '$berat',
                gambar = '$gambar'
                WHERE id = $id;
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// pencarian//
function cari($keyword)
{
    $query = "SELECT * FROM produk
    WHERE
    nama LIKE'%$keyword%' OR
    jenis_produk LIKE'%$keyword%' OR
    varian_produk LIKE '%$keyword%' OR
    berat LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%' OR
    ";
    return query($query);
}



// regist
function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // $password = $data["password"];
    // $password2 = $data["password2"];
   
    //cek username sudah ada/blm
    $result = mysqli_query($conn, "SELECT username FROM login
    WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
    alert ('username sudah terdaftar!')  
    </script>";
        return false;
    }
    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert ('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }
    //enkripsi password
    $password_enc = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru dan database
    mysqli_query($conn, "INSERT INTO login VALUES ('', '$username','$password_enc')");

    return mysqli_affected_rows($conn);
        
    //menambahkan atau memasukkan data user ke dalam database
}


// kontak//

    // $koneksi = mysqli_connect("localhost", "root", "", "kontak"); 
    // if (mysqli_connect_error()) {
    //     echo "koneksi database gagal" mysqli_connect_error();
 

    
function kontak($data) 
{
    global $conn;
    $nama = htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $sekolah = htmlspecialchars($data["sekolah"]);
    $alamat = htmlspecialchars ($data["alamat"]);
    $kota = htmlspecialchars ($data["kota"]);
    $kabupaten = htmlspecialchars($data["kabupaten"]);

}

function costumerservice($data)
{
    global $conn;
    $nama = htmlspecialchars ($data["nama"]);
    $nomer = htmlspecialchars ($data["nomer"]);
    $instansi = htmlspecialchars ($data["instansi"]);
    $komentar = htmlspecialchars ($data["komentar"]);
    $foto = htmlspecialchars ($data["foto"]); 
}