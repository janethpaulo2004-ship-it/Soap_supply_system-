<?php
include "db.php";

$products = mysqli_query($conn,"SELECT * FROM products");

while($p=mysqli_fetch_assoc($products)){
echo "
<div class='card'>
{$p['name']} <br>
<form method='POST' action='order.php'>
<input type='hidden' name='pid' value='{$p['id']}'>
<input name='qty' placeholder='Liters'>
<button>Order</button>
</form>
</div>
";
}
?>