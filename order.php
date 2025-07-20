<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EatYummy</title>
</head>
<body>
    <h3>Place Your Order</h3>
    <form action="order.php" method="post">
        <label for="item">Item: </label>
        <input type="text" name="item"><br><br>

        <label for="quantity">Quantity: </label>
        <input type="text" name="quantity"> <br><br>

        <input type="submit" value="Place Order"> 
    </form>
</body>
</html>

<?php
    $item = $_POST["item"];
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * 100;
    $discount_5 = $total -$total*(5/100);
    $discount_10 = $total - $total*(10/100); 
    
    echo"<br>You have Ordered {$quantity} {$item}'s " . "<br>";
    echo"Total Price: {$total}"."<br>";

    if($total < 250){
        echo"Woahh!! You got an discount of 5%";
        echo"your Total bill after Discount: {$discount_5}"."<br>";

    }
    elseif($total>201 && $total<400){
        echo"Woahh!! You got an discount of 10%"."<br>";
        echo"your Total bill after Discount: {$discount_10}"."<br>";
    }
?>