<?php
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];

    $sql = "UPDATE courses SET title='$title', description='$description', duration='$duration' WHERE id=$id";
    $conn->query($sql);

    header("Location: index.php"); // Ganti "index.php" dengan halaman yang sesuai
    exit();
}

// Mendapatkan data kursus yang akan diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM courses WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $description = $row['description'];
        $duration = $row['duration'];
    } else {
        echo "Kursus tidak ditemukan.";
        exit();
    }
} else {
    echo "ID kursus tidak diberikan.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kursus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://previews.123rf.com/images/machacekcz/machacekcz1201/machacekcz120100017/12292012-computer-head-abstract-it-background.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Kursus</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="title">Judul:</label>
            <input type="text" name="title" id="title" value="<?php echo $title; ?>"><br>
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description"><?php echo $description; ?></textarea><br>
            <label for="duration">Durasi:</label>
            <input type="text" name="duration" id="duration" value="<?php echo $duration; ?>"><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
