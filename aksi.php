<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];

        $query = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama, prodi, angkatan) VALUES('$nim', '$nama', '$prodi','$angkatan')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $num = $_POST['num'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];

        $query = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan='$angkatan' WHERE num='$num'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $num = $_POST['num'];
        $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE num='$num'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>