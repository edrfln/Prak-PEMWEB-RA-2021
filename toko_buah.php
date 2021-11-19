<html>
<head>
    <title>Toko buah ITERA</title>
    <link rel="stylesheet" href="toko_buah.css">
</head>
<body>
    <h3>Form Hitung Total Bayar</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Buah</td>
                <td>:</td>
                <td>
                    <select name="buah" id="buah">
                        <option value="Mangga">Mangga</option>
                        <option value="Jambu">Jambu</option>
                        <option value="Salak">Salak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlah" id="jumlah">
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h4>Hasil :</h4>

    <?php
    class hitung{
        public $harga=0;
        public $jumlah=0;
        public $total_harga=0;
        function setHarga()
        {
            $this->total_harga = $this->harga*$this->jumlah;
            return($this->total_harga);
        }
    }
    ?>

    <?php
    if(isset($_POST['hitung'])){
        $buah =$_POST['buah'];
        $jumlah =$_POST['jumlah'];

        $belanja = new hitung;
        if($buah == "Mangga"){
            $belanja->harga = 15000;
            $harga=$belanja->harga;
        }else if($buah == "Jambu"){
            $belanja->harga = 13000;
            $harga=$belanja->harga;
        }else if($buah == "Salak"){
            $belanja->harga = 10000;
            $harga=$belanja->harga;
        }

        $belanja->jumlah = $jumlah;
        $hasil=number_format($belanja->setHarga());
        echo "Anda membeli buah ".$buah." seharga ".$harga."/kg sebanyak ".$jumlah." buah, dengan total harga Rp".$hasil;
    }
    ?>
</body>
</html>