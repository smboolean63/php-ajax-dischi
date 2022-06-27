<?php
    require_once __DIR__ . '/backend/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="container">
                <img src="images/download.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container container">
            <?php foreach($database as $cd) { ?>
            <div class="cd">
                <img src="<?php echo $cd['poster']; ?>">
                <h3><?php echo $cd['title']; ?></h3>
                <span class="author"><?php echo $cd['author']; ?></span>
                <span class="year"><?php echo $cd['year']; ?></span>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>