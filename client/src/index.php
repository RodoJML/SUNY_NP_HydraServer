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
    <link rel="stylesheet" href="./assets/css/serverRequest/serverRequest.css">
    <link rel="stylesheet" href="./assets/css/about/about.css">
    <link rel="stylesheet" href="./assets/css/calendar/calendar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <title> ⚛️ Hydra Lab | Computer Science SUNY NP </title>
</head>

<body>    
    <div class="bodyContainer">
        <?php include './assets/components/template/header.php'; ?>
        <?php include './assets/components/template/navbar.php'; ?>
        <div class="displayArea" style="display: none"></div>
        <img class="indexMainPic" src="./assets/images/hydralabwithtext.png" alt="indexMainPic">
        <?php include './assets/components/index/labhours.php'; ?>
        <?php include './assets/components/index/announcements.php'; ?>
        <?php include './assets/components/template/footer.php'; ?>
    </div>

    <div class="mobile">
        <img class="mobilepic" src="./assets/images/computer.gif">
        <h2>📴 This website is ment to be displayed on a desktop computer.</h2>
        <p>Please visit this website on a desktop computer to view the full website.</p>
    </div>

</body>

</html>