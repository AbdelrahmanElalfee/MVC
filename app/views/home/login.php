<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
</head>

<body>
  <form action="postLogin" method="POST">
    <input type="text" name="mail">
    <input type="text" name="password">
    <input type="submit" value="submit">
  </form>
</body>

</html>