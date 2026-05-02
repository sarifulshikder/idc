<?php
$name=$_GET['name'] ?? 'demoisp';
mkdir("../../storage/tenants/".$name,0777,true);
echo "Tenant Created: ".$name;
