<?php
class Koneksi
{
    private $host     = "localhost"; //modif 1 = $dbHost -> $host
    private $user     = "root"; //modif 2 = $dbUser -> $user
    private $pw = ""; // modif 3 = $dbPassword -> $pw & mengosongkan nilai password
    private $nama_db     = "mg8";// modif 4 = $dbName -> $nama_db & mengganti nama database menjadi mg8

    public function konek() //modif 5 connect -> konek
    {

        $mysqli = new mysqli($this->host, $this->user, $this->pw, $this->nama_db);


        if ($mysqli->connect_error) {
            //?dev
            // echo "Gagal terkoneksi ke database : (" . $mysqli->connect_error . ")";

            //?prod
            header('Location: ./../../500.php');
        }


        return $mysqli;
    }
}
