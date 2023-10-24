<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Server Access</title>

    <link rel="stylesheet" href="../css/serverRequest.css">
</head>

<body>
    <div class="mainModalWindow">

        <div class="modalContent">
            <form action="serverRequest.php" method="post">

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
</body>
</html>