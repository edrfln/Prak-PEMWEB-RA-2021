<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            loadData();

            //Load untuk tambah
            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'tambah.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //Load untuk edit dengan parameter num
            $("#contentData").on("click", "#EditButton", function() {
                var num = $(this).attr("value");
                $.ajax({
                    url: 'edit.php',
                    type: 'get',
                    data: {
                        num: num
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            //simpan data mahasiswa
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'aksi.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data mahasiswa
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'aksi.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data mahasiswa berdasarkan num
            $("#contentData").on("click", "#DeleteButton", function() {
                var num = $(this).attr("value");
                $.ajax({
                    url: 'aksi.php?action=delete',
                    type: 'post',
                    data: {
                        num: num
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data-mahasiswa.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>
</head>

<body>
    <div>
        <h2>Data Mahasiswa</h2>
        <div id="contentData"></div>
    </div>
</body>

</html>