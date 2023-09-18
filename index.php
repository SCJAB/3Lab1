<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <title>Home</title>
</head>
<body class="min-h-screen flex flex-col">
    <div>
        <?php include "navbar.php" ?>
    </div>

    <div class="flex-grow flex flex-col items-center justify-center text-Darb">
        <?php echo '<h1 class="text-center text-7xl">Welcome to SHeAN!</h1>' ?>
        <?php echo '<h2 class="text-center text-xl mt-4">Discover Coffee\'s Delight. Your Daily Brew Guide!</h2>' ?>
    </div>

    <div class="flex justify-center items-end">
        <img class="mt-auto" src="./images/bg-image.jpg" alt="bg-image">
    </div>
</body>
</html>