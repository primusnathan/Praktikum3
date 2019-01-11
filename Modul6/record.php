<?php
require_once "connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if (mysqli_num_rows($result)){
    ?>
    <html>
        <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <title></title>
            <style>
                body{
                    font-family: 'Ubuntu', sans-serif;
                }
            table{
                border:none;
                width:100%;
                border-collapse:collapse;
                
            }
            tr,th,td{
                height:50px;
            }
            tr:hover {background-color: #f5f5f5;}
            
tr:nth-child(even) {background-color: #f2f2f2;}
            </style>
        </head>
        <body>
            
        <table border = 1 cellspacing = 1 cellpadding = 5>
        <tr>
            <td>#</td>
            <td width=100>NIS</td>
            <td width=150>NAMA</td>
            <td>Alamat</td>
        </tr>
        <?php
            $i = 1;
            while($row = mysqli_fetch_row($result)){
        ?>  
            <tr>
                <td>
                    <?php echo $i ;?>
                </td>
                <td>
                    <?php echo $row[0];?>
                </td>
                <td>
                    <?php echo $row[1];?>
                </td>
                <td>
                    <?php echo $row[2];?>
                </td>
            </tr>
            <?php
                $i++;
            }
            ?>
        </table>
        </body>

        </html>
    <?php  echo '<a href="add_data.php">Tambah Data</a> | <a href="logout.php">Logout</a>'?>
    <?php
}
else{
    echo 'Data Tidak Ditemukan';
    }
mysqli_close($connect);
}
?>