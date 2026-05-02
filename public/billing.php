<?php
$file="../storage/customers.txt";
$data=file_exists($file)?file($file):[];
?>
<html>
<body style="font-family:Arial;padding:30px">
<h2>Monthly Billing</h2>

<table border="1" cellpadding="10">
<tr><th>Name</th><th>Bill</th><th>Status</th></tr>

<?php
foreach($data as $row){
$x=explode("|",$row);
echo "<tr>
<td>$x[0]</td>
<td>500 BDT</td>
<td>Unpaid</td>
</tr>";
}
?>

</table>
</body>
</html>
