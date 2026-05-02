<?php
include "../config/db.php";

if($_POST){
$stmt=$conn->prepare("INSERT INTO customers(name,phone,package,bill,status) VALUES(?,?,?,?,?)");
$stmt->execute([
$_POST['name'],
$_POST['phone'],
$_POST['package'],
$_POST['bill'],
'Active'
]);
}

if(isset($_GET['delete'])){
$id=$_GET['delete'];
$conn->exec("DELETE FROM customers WHERE id=$id");
}

$data=$conn->query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<body style="font-family:Arial;padding:30px">

<h2>Customers</h2>

<form method="post">
<input name="name" placeholder="Name"><br><br>
<input name="phone" placeholder="Phone"><br><br>
<input name="package" placeholder="Package"><br><br>
<input name="bill" placeholder="Bill"><br><br>
<button>Add</button>
</form>

<hr>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Package</th>
<th>Bill</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php foreach($data as $r){ ?>
<tr>
<td><?= $r['id'] ?></td>
<td><?= $r['name'] ?></td>
<td><?= $r['phone'] ?></td>
<td><?= $r['package'] ?></td>
<td><?= $r['bill'] ?></td>
<td><?= $r['status'] ?></td>
<td><a href="?delete=<?= $r['id'] ?>">Delete</a></td>
</tr>
<?php } ?>

</table>

</body>
</html>
