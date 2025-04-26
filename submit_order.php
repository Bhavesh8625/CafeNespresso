<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $_POST['customer-name'];
    $email = $_POST['customer-email'];
    $phone = $_POST['customer-phone'];
    
    // Convert JS orderList into JSON string in frontend and submit via hidden input
    $items = $_POST['order-items'];
    $total = $_POST['order-total'];

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, customer_phone, items, total_amount) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd", $name, $email, $phone, $items, $total);
    
    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
