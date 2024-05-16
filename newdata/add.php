<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triple Thread Craft</title>
    <link rel="stylesheet" href="add.css">
    
</head>
<body>
<div class="container">
        <div class="side-nav">
            <div class="logo">
                <img src="LOGO.JPG" alt="logo">
                <h1>Triple T</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Inventory</a></li>
                    <li><a href="add.php">Add</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="delete.php">Delete</a></li>
                </ul>
            </nav>
            <div class="logout-btn">
                <a href="loginpage.php">LOGOUT</a>
            </div>
        </div>
    
    <!-- Form for Adding a Product -->
    <div class="addform">
    <h2>Add Product</h2>
    <form action="crud.php" method="post">
        <input type="hidden" name="action" value="add">
        <label for="Pname">Product Name:</label>
        <input type="text" id="Pname" name="Pname" required>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <label for="total_price">Total Price:</label>
        <input type="text" id="total_price" name="total_price" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Add Product</button>
    </form>
</div>
    <!-- Display Products Table -->
    
</body>
</html>
