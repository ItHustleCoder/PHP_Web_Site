<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <title>Php web sito</title>
</head>
<body>
    <?php require "bloks/header.php" ?>
<div class="container">
    <h3 style="text-align:center">Contact Form</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Write youre mail" class="form-control"><br/>
        <textarea name="message" class="form-control" placeholder="Write yore message"></textarea><br/>
        <button type="submit" name="send" class="btn btn-success" >Send</button>
    </form>
</div>
    <?php require "bloks/footer.php" ?>
   
</body>
</html>