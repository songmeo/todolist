<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login_style.css">
  </head>
  <body>
    <div class="row">
        <div class="column">
          <div class="card">
            <form name="input" action="login_check.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" pattern="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}" required>
                <br>
                <label for="password">Password&nbsp</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
                <br>
                <input type="submit" name="submit" value="Login">
              </form>
          </div>
        </div>
    </div>
  </body>
</html>
