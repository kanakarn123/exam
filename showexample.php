<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'exampleple.mysql.database.azure.com', 'jaooexample@exampleple', 'Jaoo01062544', 'exampleeee', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM exampleeee');
?>
    
<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>What kind of drink do you like</center></h1></p>
    </div>
<table width="600" border="1" class="table table-dark table-striped" class="center">
  <thead>
      <tr class="active">
          <th width="250"> <div align="center">Name</div></th>
          <th width="600"> <div align="center">Type </div></th>
          <th width="250"> <div align="center">Option </div></th>
      </tr>
    </thead>
<?php
$sum = 0;
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><center><?php echo $Result['A'];?></center></td>
    <td><center><?php echo $Result['B'];?></center></td>
    <td><center><?php echo $sum+$Result['A']+$Result['B'];?></center></td>
  </tr>
<?php
}
?>
</table>
<a href="exam.html"><input type="Submit" value="ADD" class="btn-default btn-sm"></a>
<?php
mysqli_close($conn);
?>
</div>
</body>
</html>
