<?php 
    $isSubmitted = isset($_REQUEST['submit']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulieren GET Methode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<?php if($isSubmitted): ?>
        <p>First Name: <?= $_POST['firstname']; ?></p>
        <p>Last Name: <?= $_POST['lastname']; ?></p>
        <p>E-mail: <?= $_POST['email']; ?></p>
        <p>Password: <?= $_POST['password']; ?></p>
        <p>Message: <?= $_POST['message']; ?></p>
<?php else: ?>
        <form action="" method="POST">
            <div class="form-group row mt-5">
                <label for="input-name">First Name:</label>
                <input class="form-control" type="text" name="firstname">
            </div>
            <div class="form-group row mt-5">
                <label for="input-name">Last Name:</label>
                <input class="form-control" type="text" name="lastname">
            </div>
            <div class="form-group row mt-5">
                <label for="input-name">E-mail:</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group row mt-5">
                <label for="input-name">Password:</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group row mt-5">
                <label for="input-name">Message:</label>
                <input class="form-control" type="text" name="message">
            </div>
            <div  class="row">
                <input type="submit" class="btn btn-primary" name="submit" value="Verzenden">
            </div>
        </form>
<?php endif ?>
    </div>
</body>
</html>