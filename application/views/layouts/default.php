
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <?php 
     require 'application/views/' . $this->path . '.php';
    ?>
    <footer>
        <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae provident odio praesentium. Vel laudantium eligendi ex illo molestiae, sunt iste deserunt iure corporis. Incidunt dolorum veritatis, praesentium impedit maxime iste.</small>
    </footer>
</body>
</html>