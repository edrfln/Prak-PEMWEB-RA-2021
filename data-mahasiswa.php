<link rel="stylesheet" href="data.css">
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY num DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['nim']; ?>
                </td>
                <td>
                    <?php echo $result['nama']; ?>
                </td>
                <td>
                    <?php echo $result['prodi']; ?>
                </td>
                <td>
                    <?php echo $result['angkatan']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['num']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['num']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>
<br>
<button id="addButton" class="btn btn-primary">Add Data</button>