<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/serverRequest/serverRequest.css">
    <title>Document</title>
</head>
<body>

    <div class="serverRequest">
        <h1 class="heading">Request Server Access</h1>
        <div class="mainModalWindow">
            <div class="modalContent">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="studentid">STUDENT ID #</label><br>
                    <input type="text" id="studentid" name="studentid" required><br><br>
                    <label for="name">FULL NAME</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="email">NEW PALTZ EMAIL</label><br>
                    <input type="email" id="email" name="email" required><br><br><br>
                    <input type="submit" value="Send Request">
                </form>

            </div>
        </div>

        
    </div>

    <?php
        echo $_POST["studentid"];
        echo "<br>";
        echo $_POST["name"];
        echo "<br>";
        echo $_POST["email"];;
    ?>

</body>
</html>



