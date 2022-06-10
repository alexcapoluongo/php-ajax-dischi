<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>
    <!-- css custom -->
</head>
<body>
    <?php include "../database.php"?>
    <div class="card">
        <ul>
            <?php foreach($database as $album) {
                echo '<li>' . '<img src=' . $album['poster'] . '>' . '</li>';          
                echo '<li>' . $album['title'] . '</li>';
                echo '<li>' . $album['author'] . '</li>';
                echo '<li>' . $album['year'] . '</li><br>';
            }
            ?>
        </ul>
    </div>
</body>
</html>