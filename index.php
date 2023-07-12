<?php
include_once 'db_connect.php';

// Mendapatkan daftar kursus
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Course App</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.york.ac.uk/media/study/courses/postgraduate/management/hrm-hero-1200.png');
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
        }

        .action-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .action-links a {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .action-links a:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        .action-links a.view-lessons {
            background-color: #2196F3;
        }

        .action-links a.view-lessons:hover {
            background-color: #1976D2;
        }

        .action-links a.delete {
            background-color: #f44336;
        }

        .action-links a.delete:hover {
            background-color: #d32f2f;
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .action-links {
                flex-direction: column;
            }

            .action-links a {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Kursus</h1>
        <div class="action-links">
            <a href="add_course.php">Tambah Kursus Baru</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Durasi</th>
                <th>Aksi</th>
            </tr>
            <?php
            $counter = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["duration"] . " menit</td>";
                    echo "<td class='action-links'>";
                    echo "<a href='edit_course.php?id=" . $row["id"] . "'>Edit</a>";
                    echo "<a href='delete_course.php?id=" . $row["id"] . "' class='delete'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";

                    $counter++;
                    if ($counter >= 1 && $counter <= 5) {
                        echo "<tr>";
                        echo "<td colspan='4'></td>";
                        echo "<td class='action-links'>";
                        echo "<a href='lesson" . $counter . ".php?id=" . $row["id"] . "' class='view-lessons'>Lihat Pembelajaran</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada kursus</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
