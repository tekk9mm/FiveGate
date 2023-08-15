![image](https://raw.githubusercontent.com/slimephobia/FiveGate/main/assets/img/banner.png)

# 📝 Features
- **Application system (send to webhook)**
- **Show discord avatar & username**
- **Discord authentication**
- **Whitelist role checker**

# 🔨 WIP (Work in progress)
- **Changing MFA code (default: 15 min)**
- **FiveM script requesting MFA code**
- **Discord app to accept/deny applications**

# 📸 Screenshots
## Home Page
![image](https://raw.githubusercontent.com/slimephobia/FiveGate/main/screenshots/home.png)
## Application Form
![image](https://raw.githubusercontent.com/slimephobia/FiveGate/main/screenshots/application.png)
## Home Buttons (more to come)
![image](https://raw.githubusercontent.com/slimephobia/FiveGate/main/screenshots/login.png)

# ❓ Installation
- **Create an application (https://discord.com/developers/applications)**

- **Specify an OAuth2 Redirect URL (https://discord.com/developers/applications)**
   - **(ex. http://localhost/process-oauth.php)**

- **Generate an url and check "identify" & "guilds.members.read"**
  - **Place the generated url here (https://github.com/slimephobia/FiveGate/blob/main/oauth.php#L3)**

- **Change the Client ID and Secret here (https://github.com/slimephobia/FiveGate/blob/main/process-oauth.php#L17#L18)**

- **Change this to your redirect url here (https://github.com/slimephobia/FiveGate/blob/main/process-oauth.php#L20)**

- **Create a webhook for whitelist applications**
  - **Place your webhook here (https://github.com/slimephobia/FiveGate/blob/main/webhook.php#L34)**

- **Place your cfx.re join link here (https://github.com/slimephobia/FiveGate/blob/main/home.php#L60C112-L60C130)**

- **Replace this with your Guild ID (https://github.com/slimephobia/FiveGate/blob/main/home.php#L13C73-L13C91)**

# ⚠️ Known Issues
- **Requesting homepage too many times can cause rate limit**
