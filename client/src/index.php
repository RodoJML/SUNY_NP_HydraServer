<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/template/header.css">
    <link rel="stylesheet" href="./assets/css/template/navbar.css">
    <link rel="stylesheet" href="./assets/css/template/footer.css">

    <link rel="stylesheet" href="./assets/css/index/index.css">
    <link rel="stylesheet" href="./assets/css/index/labhours.css">
    <link rel="stylesheet" href="./assets/css/index/announcements.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>SUNY New Paltz | Hydra Lab - Computer Science</title>
</head>

<body>    
    <div>
        <?php include './assets/components/template/header.php'; ?>
        <?php include './assets/components/template/navbar.php'; ?>
        <img class="indexMainPic" src="./assets/images/Hydralabpic.png">
        <?php include './assets/components/index/labhours.php'; ?>
        <?php include './assets/components/index/announcements.php'; ?>
        <?php include './assets/components/template/footer.php'; ?>
    </div>

    <script>
        $(document).ready(function () {
            console.log("ready!");
        });
    </script>
</body>

</html>