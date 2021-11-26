<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="number" name="nim" id="nim" required="" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
            <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
            <select name="prodi">
                <option value="IF">Teknik Informatika</option>
                <option value="EL">Teknik Elektro</option>
                <option value="SI">Teknik Sipil</option>
                <option value="TG">Teknik Geofisika</option>
                <option value="MA">Matematika</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>
            <select name="angkatan">
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>