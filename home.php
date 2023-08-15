<?php

session_start();

if(!$_SESSION['logged_in']){
  header('Location: error.php');
  exit();
}
extract($_SESSION['userData']);

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

$discord_users_guild_url = "https://discordapp.com/api/users/@me/guilds/YOUR_GUILD_ID_HERE/member";
$header = array("Authorization: Bearer $discord_access_token", "Content-Type: application/x-www-form-urlencoded");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $discord_users_guild_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

$result = json_decode($result, true);

$hasWhitelistRole = in_array('1138567669528924251', $result['roles']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🛡️ FiveGate</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87304941be.js" crossorigin="anonymous"></script>
  </head>
<body>

<div class="container" style="text-align: center; font-size: 85%;">
  <a href="logout.php" class="btn btn-muted" style="margin-top: 2.5%;"><i class="fa-solid fa-right-from-bracket"></i> LOGOUT</a>
</div>

<div class="container" style="text-align: center; margin-top: 5%;">
  <div class="d-flex" style="margin-left: 40%;">
      <img class="flex-shrink-0 me-3 rounded" src="<?php echo $avatar_url?>">
    <div>
      <h5 class="mt-0" style="padding-top: 30%;"><?php echo $name;?></h5>
      <p style="opacity: 75%; font-size: 85%;">Whitelist: <?php echo ($hasWhitelistRole ? "<i class='fa-solid fa-check'></i>" : "<i class='fa-solid fa-x'></i>");?></p>
    </div>
  </div>
</div>

<?php echo ($hasWhitelistRole ? "<div class='container' style='text-align: center; margin-top: 2.5%;'><a href='YOUR_CFX_LINK_HERE' target='_blank' class='btn btn-fivem'><i class='fa-solid fa-play'></i> CONNECT TO SERVER</a><h5><i class='fa-solid fa-shield'></i> Code: </h5><h5 class='hover-blur'> HJK401LSR</h5></div>" : "");?>

<div class="container" style="text-align: center; margin-top: 2.5%;">
<div id="newsCarousel" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1"></button>
    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1" aria-label="1"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex justify-content-center">
      <img src="assets/img/banner.png" class="d-block w-100 rounded">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="news-text"><i class="fa-solid fa-shield"></i> FiveGate</h5>
        <p class="news-text">Selfhosted Web Panel with Discord Authentication and MFA</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</body>
</html>
