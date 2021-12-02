<?php
require_once('db/Koneksi.php');

class User
{
    var $BASE_URL = "/mg8"; //modif 6, mengganti nama directory menjadi mg8
    public function __construct()
    {
        $db = new Koneksi();
        $this->kon = $db->konek(); //modif 7 conn -> kon
    }

    public function authenticate($uname, $pass)
    {
        $auth = $this->kon->query("SELECT * from user WHERE username='{$uname}' AND pass='{$pass}' LIMIT 1");


        if ($auth->num_rows !== 0) {
            //Authentikasi user diterima
            $user = $auth->fetch_assoc();
            session_start();
            $_SESSION['userID'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            
            header("Location: {$this->BASE_URL}/home.php");
        } else {
            header("Location: {$this->BASE_URL}/index.php");
        }
    }
}
