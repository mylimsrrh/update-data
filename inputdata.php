<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "db_admin";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
//    $No = $_POST['No'];
   $Keterangan = $_POST['Keterangan'];
   $No_hp = $_POST['No_hp'];
//    echo $Keterangan;

           
   // mysql query to Update data
   $query = "UPDATE `tb_admin` SET `No_hp`='".$No_hp."' WHERE `Keterangan` = '".$Keterangan."'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <body style="background-color:#073642;">


        <form action="inputdata.php" method="post">

            

        <body>

<p style="color:white">keterangan</p>  : <select class="form-control" name="Keterangan" >
                            <option value="">Chose</option>
                            <option value="admin1">admin1</option>
                            <option value="admin2">admin2</option>
                            <option value="admin3">admin3</option>
                            <option value="admin4">admin4</option>
                            <option value="admin5">admin5</option>
                            <option value="admin6">admin6</option>
                        </select>
                        <br><br>
            <!-- <input type="text" name="Keterangan" required><br><br> -->

            <body>

<p style="color:white">No HP</p> :<input type="text" name="No_hp" required><br><br>

            <input type="submit" name="update" value="update">
        </form>

    </body>


</html>

<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database  </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>

</html>
    <h2>Tabel Database </h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Keterangan</td>
                <td>No_hp</td>            
            </tr>
        </thead>
        <?php
    
      
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "db_admin";
       
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);


        $query = mysqli_query($connect, 'SELECT * FROM `tb_admin`');
        $no = 1;
        while ($data = mysqli_fetch_array($query)) { 
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['Keterangan'] ?></td>
                <td><?php echo $data['No_hp'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>