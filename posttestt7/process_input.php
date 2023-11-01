<!DOCTYPE html>
<html>
<head>
    <title>Hardware PC - Submitted Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="content">
        <div class="container">
            <h1>Selamat datang di Website Hardware PC</h1>
            <p>Selamat datang di halaman web kami yang membahas seputar hardware PC.</p><br>
            <a href="hard.php"><h1>Masuk Ke website</h1></a>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h2></h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                
                
                echo "<p>Name: <b>$name</b></p>";
                echo "<p>Phone Number: <b>$phone</b></p>";
                echo "<p>Address: <b>$address</b></p>";
                

            } else {
                echo "No information received.";
            }

            
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Hardware PC</p>
    </footer>
    

</body>
</html>
