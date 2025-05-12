<?php
require_once '../backend/script.php';
$orders = orders();
$pageTitle = "My Orders";
$css = '../assets/css/index.css';
require_once '../include/header.php';
?>
<style>
    .orders_table{
    width: 100%;
}
.order_table tbody,.order_table thead{
display:flex;
width:100%;
justify-content: space-between;
}
.orders_container h1{
    text-align:center;
}
th,td{
    text-align:center;
    width: 20%;
    border: 1px solid #000;
    padding: 10px 0px;
}
tr{
        border: 1px solid #000;
}
.orders_container{
    margin-top:30px;
}
.order_wrapper{
    max-width:90%;
    margin:40px auto;
    overflow:auto;
}
    </style>
<div class="orders_container">
    <h1>My Orders</h1>
    <div class="order_wrapper">
        <table class="orders_table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <!-- <td><?php echo htmlspecialchars($row['product']['title']); ?></td> -->
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['city']); ?></td>
                        <td>
                            <span class="status <?php echo $row['fulfilment'] == 1 ? 'delivered' : 'pending'; ?>">
                                <?php echo $row['fulfilment'] == 1 ? 'Fulfilled' : 'Pending'; ?>
                            </span>
                        </td>
                        <td>$<?php echo number_format($row['totalAmount'], 2); ?></td>
                    
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
