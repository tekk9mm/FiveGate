<?php

    session_start();

    if (isset($_SESSION['loggedin'])) {
        header('Location: panel.php');
        exit;
    }

    function appReceived() {
        echo "
            <script>Swal.fire({
                title: 'Application sent!',
                text: 'We have received your application, wait for answer.',
                icon: 'success',
                confirmButtonText: 'OK',
                timer: '5000'
            })</script>
        ";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🛡️ FiveGate</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/87304941be.js" crossorigin="anonymous"></script>
  </head>
<body>

    <div class="container" style="text-align: center; margin-top: 22%;">
        <div class="d-grid gap-2 col-6 mx-auto" style="max-width: 25%;">
            <a href="oauth.php" class="btn btn-discord"><i class="fa-brands fa-discord"></i> LOGIN WITH DISCORD</a>
            <button type="button" class="btn btn-whitelist" data-bs-toggle="modal" data-bs-target="#appModal"><i class="fa-solid fa-pen-to-square"></i> APPLY FOR WHITELIST</button>
        </div>
    </div>

<div class="modal fade" id="appModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="appModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">

        <form name="form" action="webhook.php" method="post">

        <div class="mb-3">
            <label for="discordName" class="form-label">What is your discord tag?</label>
            <input type="text" class="form-control" name="discordName" id="discordName" placeholder="username / Username#0000" required>
        </div>
        <div class="mb-3">
            <label for="steamName" class="form-label">What is your steam id?</label>
            <input type="text" class="form-control" name="steamName" id="steamName" placeholder="steamcommunity.com/id/slimephobia" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">How old are you?</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="16 years" required>
        </div>
        <div class="mb-3">
            <label for="whyYou" class="form-label">Tell us about your character?</label>
            <textarea class="form-control" id="whyYou" name="whyYou" placeholder="How do you stand out from other players?" required></textarea>
        </div>
        <div class="mb-3">
            <label for="charInfo" class="form-label">Tell us about your character</label>
            <textarea class="form-control" id="charInfo" name="charInfo" placeholder="Story, personality and plans" required></textarea>
        </div>
        <div class="mb-3">
            <label for="readRules" class="form-label">Have you read our rules?</label>
            <input type="text" class="form-control" name="readRules" id="readRules" required>
        </div>
        <div class="mb-3">
            <label for="extra" class="form-label">Do you want to add anything?</label>
            <textarea class="form-control" name="extra" id="extra" required></textarea>
        </div>
        
        <div class="row justify-content-center">
            <button type="submit" value="submit" class="btn btn-whitelist" style="display: inline-block; max-width: 95%;">Submit</button>
        </div>

        </form>
        
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>