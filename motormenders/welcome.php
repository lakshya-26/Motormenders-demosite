<?php
include_once("dbconnect.php");
$sql="select * from services";
$inter_res=mysqli_query($dbcon,$sql);
?>
<html>
<head>
<title>Application Details</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 10px;
            padding: 10px;
			background-color:#ded9ee;
        }
		table {
  display: flex;
  justify-content: center;
  align-items: center;
}
		</style>
<body>
<h1>Welcome</h1><br>
<h1>Applications for Service</h1><br><br>
<table border="2" cell-spacing="10">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>State</th>
<th>City</th>
<th>Pin Code</th>
<th>Car Manufacturer</th>
<th>Model</th>
<th>Year</th>
<th>Service</th>
<th>Source</th>
<th>Comments</th>
<th>Car Image</th>
</tr>
<?php
while($res=mysqli_fetch_array($inter_res))
{
?>
<tr>
<td><?php echo $res[0];?></td>
<td><?php echo $res[1];?></td>
<td><?php echo $res[2];?></td>
<td><?php echo $res[3];?></td>
<td><?php echo $res[4];?></td>
<td><?php echo $res[5];?></td>
<td><?php echo $res[6];?></td>
<td><?php echo $res[7];?></td>
<td><?php echo $res[8];?></td>
<td><?php echo $res[9];?></td>
<td><?php echo $res[10];?></td>
<td><?php echo $res[11];?></td>
<td><img src='<?php echo $res[12];?>'height=200 width=300 ></td>
</tr>
<?php
}
?>
</table>
Back to <a href="main.php"><b>Home Page</b></a>
</body>
</html>