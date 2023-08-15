<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1119482424649318431&redirect_uri=http%3A%2F%2Flocalhost%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds.members.read";
header("Location: $discord_url");
exit();

?>