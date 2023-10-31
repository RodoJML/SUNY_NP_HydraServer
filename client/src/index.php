<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/index/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title> ⚛️ Hydra Lab | CS SUNY NP</title>
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

        <!-- This is displayed for small devices, this is temporary while mobile version is built -->
        <?php include './assets/components/mobile/mobile.php'; ?>

    </body>

    <script>
        document.getElementById("noRefreshForm").addEventListener("submit", function(event){
            event.preventDefault()
                    
            var studentid = document.getElementById("studentid").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;

            <?php mail("someone@example.com","My subject",$studentid);?>

            console.log(studentid);

            $(".modalContent").fadeOut(300);
            $(".mainModalWindow").append("<img style='width:10rem; margin-left:33%; margin-top:20%' src=./assets/images/sent.png>").fadeIn(300);
            $(".displayArea").delay(1300).slideUp(300).hide('slow');
        });
    </script>

</html>

