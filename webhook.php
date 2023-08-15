<?php

require_once 'index.php';

$appDiscordName = $_POST['discordName'];
$appSteamName = $_POST['steamName'];
$appAge = $_POST['age'];
$appWhyYou = $_POST['whyYou'];
$appCharInfo = $_POST['charInfo'];
$appReadRules = $_POST['readRules'];
$appExtra = $_POST['extra'];

$message = 
"**What is your discord tag?**
- {$appDiscordName}

**What is your steam id?**
- {$appSteamName}

**How old are you?**
- {$appAge}

**Why should we accept you?**
- {$appWhyYou}

**Tell us about your character**
- {$appCharInfo}

**Have you read our rules?**
- {$appReadRules}

**Do you want to add anything?**
- {$appExtra}";
$webhook= 'YOUR_WEBHOOK_HERE'; /* Put your webhook here for logging whitelist applications */

$data = array('content' => $message);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
        )
);

file_get_contents($webhook, false, stream_context_create($options));

appReceived();