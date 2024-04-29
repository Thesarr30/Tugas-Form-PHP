<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang!</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $firstName = isset($_GET['firstname']) ? $_GET['firstname'] : "";
            $lastName = isset($_GET['lastname']) ? $_GET['lastname'] : "";
            $gender = isset($_GET['gender']) ? $_GET['gender'] : "";
            $nationality = isset($_GET['nationality']) ? $_GET['nationality'] : "";
            $languages = isset($_GET['languages']) ? $_GET['languages'] : [];
            $bio = isset($_GET['bio']) ? $_GET['bio'] : "";

            echo "<h3>Nama: $firstName $lastName</h3>";
            echo "<h3>Jenis Kelamin: $gender</h3>";
            echo "<h3>Kewarganegaraan: $nationality</h3>";
            echo "<h3>Bahasa yang Dikuasai:</h3>";
            echo "<ul>";
            foreach ($languages as $language) {
                echo "<h3><li>$language</li></h3>";
            }
            echo "</ul>";
            echo "<h3>Bio:</h3>";
            echo "<h3>$bio</h3>";
        }
        ?>
    </div>
</body>
</html>
