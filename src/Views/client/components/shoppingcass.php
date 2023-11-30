<?php
session_start();

// Thêm sản phẩm vào giỏ hàng
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Nếu giỏ hàng chưa tồn tại, tạo mới
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
        $_SESSION['cart'][$product_id] = $quantity;
    }
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

    <h2>Products</h2>

    <ul>
        <li>
            Product 1
            <form action="index.php" method="post">
                <input type="hidden" name="product_id" value="1">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Add to Cart">
            </form>
        </li>
        <!-- Thêm các sản phẩm khác tương tự ở đây -->
    </ul>

    <h2>Shopping Cart</h2>

    <ul>
        <?php
        // Hiển thị giỏ hàng
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product_id => $quantity) {
                echo "<li>Product $product_id - Quantity: $quantity 
                        <a href='index.php?remove=$product_id'>Remove</a>
                      </li>";
            }
        } else {
            echo "<li>Your cart is empty</li>";
        }
        ?>
    </ul>

    <h2>Checkout</h2>

    <form action="checkout.php" method="post">
        <!-- Thêm các trường thông tin thanh toán ở đây -->
        <input type="submit" name="checkout" value="Proceed to Checkout">
    </form>

</body>
</html>
