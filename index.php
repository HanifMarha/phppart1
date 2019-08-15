<?php
include_once("connection.php");
$hasil = mysqli_query($mysqli, "SELECT * FROM tabel_user ORDER BY id DESC");
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>

<table width='80%' border=1>
<tr>
<th>Nama</th> <th>Email</th> <th>Mobile</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>".$user_data['nama']. "</td>";
    echo "<td>".$user_data['email']. "</td>";
    echo "<td>".$user_data['mobile']. "</td>";
    
   }
?>
</table>
</body>
</html>