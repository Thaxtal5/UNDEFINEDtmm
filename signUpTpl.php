<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Automatic Titles Generator">
    <title>UndefinedTMM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="border: 2px dashed black">
      <h1 class="text-center"><i>Login Page</i></h1>
      <form class="form-group" action="dataLog.php" method="post">
        <input style="width: 350px" class="form-control" type="text" name="user" value="" placeholder="Type username ...">
        <input style="width: 350px" class="form-control" type="text" name="p1" value="" placeholder="Type your password ...">
        <input style="width: 350px" class="form-control" type="text" name="p2" value="" placeholder="Repeat your password ...">
        <br />
        <button class="btn btn-success" type="submit">Log in</button>
        <button class="btn btn-danger" type="delete">Delete</button>

      </form>
    </div>
  </body>
</html>
