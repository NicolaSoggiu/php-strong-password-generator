<?php
include_once __DIR__ .  "/functions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body style="background-color:#001632">
    <div class="container text-center mt-5 d-flex flex-column align-items-center">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h2 class="text-light">Generate a secure password</h2>
        <form action="" method="get" class="bg-white d-flex justify-content-between w-75">
            <div class="mb-3 d-flex flex-column p-4">
                <label for="password" class="form-label text-dark">Password length : </label>
                <label for="password" class="form-label text-dark pt-2">Character repeat : </label>
                <div style="margin-top:150px">
                    <button type="submit" name="password" class="btn btn-primary">Send</button>
                    <a href="/php-strong-password-generator/" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
            <div class="p-2 d-flex flex-column align-items-start">
                <input type="number" class="form-control w-50 mt-3" style="margin-right:150px" placeholder="Enter a number" id="password" name="password">
                <div class="pt-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        No
                    </label>
                </div>
                <div class=" mt-3 d-flex flex-column align-items-start">
                    <div>
                        <input class="form-check-input" type="letters" value="" id="letters">
                        <label class="form-check-label" for="letters" name="chars[]">
                            Letters
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="numbers" value="" id="numbers">
                        <label class="form-check-label" for="numbers" name="chars[]">
                            Numbers
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="symbols" value="" id="symbols">
                        <label class="form-check-label" for="symbols" name="chars[]">
                            Symbols
                        </label>
                    </div>
                </div>
        </form>

    </div>
    <div class="container bg-white text-center d-flex flex-column align-items-center w-75" style="max-width:fit-content">
        <?= stampPassword($password_length);
        ?>
    </div>
</body>

</html>