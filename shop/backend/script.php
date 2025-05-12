<?php
session_start();
require_once 'db.php';

// Get all products
function getAllProducts() {
    global $conn;
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $products = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}
function orders() {
    global $conn;

    // Only start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['username'])) {
        return [];
    }

    $username = $_SESSION['username'];
    $orders = [];

    $stmt = $conn->prepare("SELECT * FROM orders WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        // Debug line (remove in production)
        // Fetch related product info
        if (isset($row['proId'])) {
            $product = getProductById($row['proId']);
            $row['product'] = $product;

        } else {
            $row['product'] = null;
        }

        $orders[] = $row;
    }

    $stmt->close();
    return $orders;
}


function getProductById($id) {
    
    global $conn;

    $id = (int) $id; // ensure it's an integer
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }

    return null;
}

// Add more functions for Create, Update, Delete as needed
?>
