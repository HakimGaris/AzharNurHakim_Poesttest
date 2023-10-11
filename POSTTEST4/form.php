<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        .container {
            width: 300px; /* Sesuaikan lebar container sesuai kebutuhan */
            margin: 0 auto; /* Mengatur margin horizontal auto untuk menengahkan konten */
            text-align: left; /* Menjaga teks berada di sebelah kiri */
        }

        form {
            padding: 20px; /* Mengatur jarak antara konten dan tepi formulir */
            border: 1px solid #ccc; /* Menambahkan garis tepi pada formulir */
            border-radius: 5px; /* Menambahkan sudut bulat pada formulir */
            background-color: #f7f7f7; /* Menambahkan latar belakang untuk formulir */
        }

        form label, form input, form textarea {
            display: block; /* Membuat elemen-elemen ini sejajar satu per satu */
            margin-bottom: 10px; /* Menambahkan jarak antara elemen-elemen */
        }
    </style>
</head>
<body>
    <!-- Add a form for user input -->
    <section class="content">
        <div class="container">
            <h2>Submit Your Information</h2>
            <form method="post" action="process_input.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required><br>
                
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="1" required></textarea><br><br><br> 
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>
