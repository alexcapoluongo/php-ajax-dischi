<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>
    <!-- css custom -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include __DIR__ . "../database.php"?>
        <ul>
            <?php foreach($database as $album) {
                echo '<div class="card">' . '<li>' . '<img src=' . $album['poster'] . '>' . '</li>';          
                echo '<li>' . '<h2>' . $album['title'] . '</h2>' . '</li>';
                echo '<li>' . $album['author'] . '</li>';
                echo '<li>' . $album['year'] . '</li>' . '</div>' . '<br>';
            }
            ?>
        </ul>

</body>
</html>