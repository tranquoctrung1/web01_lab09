<?php 
        session_start();
        include('./lib/DataProvider.php');

        $_SESSION['path'] = $_SERVER['REQUEST_URI'];
        $a = 1;
        if(isset($_GET['a']) == true)
        {
            $a = $_GET['a'];
        }

        switch ($a)
            {
                case 1:
                    include('./pages/index.php');
                    break;
                case 2:
                    include('./pages/productbrand.php');
                    break;
                case 3:
                    include('./pages/producttype.php.php');
                    break;
                case 4:
                    include('./pages/productdetail.php');
                    break;
                case 5:
                    include('./pages/cart.php');
                    break;
                case 6:
                    include('./pages/register.php');
                    break;
                default:
                    include('./pages/error.php');
                    break;
            }   
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <title><?php echo $tittle ?></title>
</head>
<body>
    
    <?php
    
        include('./modules/FLayout.php');
    ?>
</body>
</html>


