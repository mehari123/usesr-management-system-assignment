
## Installation

1. Go to the GitHub repository of the project you want to install.
2. Click the "Code" button and select "Download ZIP" to download the project files.
3. Extract the ZIP file to a directory of your choice.

## Serving from localhost

1. Open a terminal or command prompt and navigate to the directory where you extracted the project files.
2. Run the command `php -S localhost:8000` to start a local PHP server on port 8000.
3. Open your web browser and go to `http://localhost:8000` to access the project.

## Running the code

1. Navigate to the directory where you extracted the project files.
2. Open the file containing the code you want to run (e.g. `add-user.php`) with a text editor.
3. Make any necessary changes to the code (e.g. database configuration).
4. Save the file.
5. Open your web browser and go to `http://localhost:8000/add-user.php` to run the code.

## Navigation

The project consists of several pages:

- `index.php`: The home page of the project.
- `add-user.php`: A form for adding a new user to the database.
- `edit-user.php`: A form for editing an existing user in the database.
- `delete-user.php`: A page for deleting an existing user from the database.
- `user-list.php`: A page for displaying a list of all users in the database.

To navigate between pages, simply click on the links in the navigation menu at the top of each page.


when you add a user it sends email to the addes email but you should configure as the below your server configuration files.
unless it willn't work 

## Configure php.ini File

1. Open your `php.ini` file in a text editor.
2. Locate the `[mail function]` section.
3. Set the `SMTP` value to your email server's hostname or IP address. For Gmail, set the `SMTP` value to `smtp.gmail.com`.
4. Set the `smtp_port` value to the port used by your email server. For Gmail, set the `smtp_port` value to `587`.
5. Save the changes to the `php.ini` file.
6. Restart your web server to apply the changes.

## Configure sendmail.ini File

1. Create a new file named `sendmail.ini` in the `C:\xampp\sendmail` directory (if it doesn't already exist).
2. Add the following lines to the `sendmail.ini` file:

```
[sendmail]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=your_email@gmail.com
auth_password=your_password
force_sender=your_email@gmail.com
```

3. Replace `your_email@gmail.com` with your Gmail email address and `your_password` with your Gmail account password or application-specific password.
4. Save the changes to the `sendmail.ini` file.



## Configure Gmail Account

1. Go to the Google Account Security page (https://myaccount.google.com/security).
2. Under "Signing in to Google", click on "2-Step Verification".
3. Follow the steps to enable 2-Step Verification for your account.
4. After enabling 2-Step Verification, go back to the Google Account Security page and under "Signing in to Google", click on "App passwords".
5. Select "Mail" from the list of "Select app" options.
6. Select the device or application you are using to send email from the "Select device" option.
7. Click on "Generate".
8. Copy the generated password and use it as the `auth_password` value in your `sendmail.ini` file.

