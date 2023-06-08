<?php

function generatePassword($length)
{
    $characters = "rewgvgsdfbaffgraedlfmajefvlanv@3r43t.324asdfergr";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

if (isset($_GET["password"])) {
    $password_length = $_GET["password"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body style="background-color:#001632">
    <div class="container text-center mt-5 d-flex flex-column align-items-center">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h2 class="text-light">Generate a secure password</h2>
        <form action="" method="get" class="bg-white d-flex justify-content-between w-75">
            <div class="mb-3 d-flex flex-column p-4">
                <label for="password" class="form-label text-dark">Password length : </label>
                <div class="mt-5">
                    <button type="submit" name="password" class="btn btn-primary">Send</button>
                    <a href="/php-strong-password-generator/" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
            <div class="p-2">
                <input type="number" class="form-control w-50 mt-3" style="margin-right:150px"
                    placeholder="Enter a number" id="password" name="password">
            </div>
        </form>
        <?php if (isset($password_length)) {
            echo generatePassword($password_length);
        } ?>

    </div>
</body>

</html>