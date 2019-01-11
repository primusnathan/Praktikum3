<html>
    <head>
        <title>Tambah Data</title>
        <style>
        body{
            background-image:url(blue.jpg);
            font-family:Verdana;
        }
        .container{
            border-radius:25px;
            background-color:white;
            height:220px;
            width:500px;
            margin-top:200px;
            margin-left:430px;
            padding-top:30px;
        }
        form{
            margin-left:5%;
        }
        input[type="text"]{
    
            height:30px;
            width:350px;
            border-top:none;
            border-left:none;
            border-right:none;
        }
        input[type="submit"]{
            background-color:black;
            color:white;
            margin-left:-60px;
            margin-top:20px;
            height:40px;
            width:400px;
            border-radius:25px;
            border:none;
        }
        </style>
    </head>
    <body>
        <div class="container">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan" /></td>
            </tr>
        </table>
        </form>
        </div>
    
    </body>
</html>

<!-- PHP Script Begin -->
<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //Tambahkan data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "','" .$password."')";
        $result = mysqli_query($connect, $sql);
        if ($result){
            echo 'Data Berhasil Ditambahkan';
        }
        else{
            echo 'Gagal Menambahkan Data <br />';
            echo mysqli_error($connect);
        }
    }

    echo '<hr />';

?>
<!-- PHP Script End -->