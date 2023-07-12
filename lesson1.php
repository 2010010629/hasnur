<!DOCTYPE html>
<html>
<head>
    <title>Lesson 1 - Pendahuluan HTML</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://assets-global.website-files.com/5e39e095596498a8b9624af1/5f85a7ea952706520533a21f_editor.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        ul {
            margin-left: 20px;
        }

        .embed-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendahuluan HTML</h1>
        <p>Pelajaran ini memberikan pengenalan tentang HTML dan struktur dasar sebuah halaman web. Anda akan belajar tentang tag-tag dasar dan cara membuat elemen HTML.</p>
        <p>Dalam pelajaran ini, Anda akan belajar:</p>
        <ul>
            <li>Cara mengenal HTML dan peranannya dalam pengembangan web</li>
            <li>Struktur dasar sebuah halaman HTML</li>
            <li>Tag-tag dasar HTML, seperti tag `<html>`, `<head>`, `<body>`, dan lainnya</li>
            <li>Cara membuat elemen HTML, seperti judul (`<h1>`, `<h2>`, dst), paragraf (`<p>`), dan gambar (`<img>`)</li>
        </ul>
        <div class="embed-container">
            <iframe src="https://embed-link-1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>
