<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8">
   <title>PHP 1. Формы</title>
   <link rel="stylesheet" href="../css/style.css">
</head>



<body>
    <?php
        include 'header.php';
        showHeader(3);
        echo '<script>
            document.querySelector(".themes li:nth-of-type(3) a").classList.add("choosenPage");
        </script>'
    ?>
    
</body>
</html>