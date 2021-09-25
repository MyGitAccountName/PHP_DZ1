<?php
    function showHeader($page) {
        echo '<div class="header">
                <a href="/DZ1/"><img class="logoPHP" src="/DZ1//image/PHP.png" alt="PHP"></a>
                <a href="/DZ1/"><h1 data-text="Домашняя работа №1">Домашняя работа №1</h1></a>
                <ul class="themes">
                    <li><a class="pages" href="/DZ1/php/conditions.php">Условия</a></li>
                    <li><a class="pages" href="/DZ1/php/cycles.php">Циклы</a></li>
                    <li><a class="pages" href="/DZ1/php/forms.php">Формы</a></li>
                    <li><a class="pages" href="/DZ1/php/arrays.php">Массивы</a></li>
                </ul>
            </div>';
        echo '<script>
            document.querySelector(".themes li:nth-of-type('.$page.') a").classList.add("choosenPage");
        </script>';
    }
?>