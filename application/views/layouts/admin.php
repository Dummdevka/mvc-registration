<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body style="background: #070707;">
    <a href="#">Switch to a user profile</a>
    <?php if (!file_exists('application/views/' . $this->path . '.php')) {
        View::error(404);
    } else {
        require 'application/views/' . $this->path . '.php';
    } ?>
</body>

</html>