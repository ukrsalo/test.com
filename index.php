<?php
include_once $_SERVER["SERVER_ROOT"].'/controller/EventController.php';
include_once $_SERVER["SERVER_ROOT"].'/controller/indexController.php';
?>
<!Doctype html>
<html lang="ru">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
    </head>
    <body>
        <div class="head">
            <?php include 'header.php'; ?>
        </div>
        <div class="all">
            <div class="my_menu">
                <?php include 'menu.php'; ?>
            </div>
            
            <!--таблица событий из БД-->
            <div class="my_table">
                <form action="/controller/indexController.php" method="POST">
                    <h2>(Дорабатывается)</h2>
                    <p>Начиная с: <input type="date" name="calendar_start"></p>
                    <p>Заканчивая: <input type="date" name="calendar_finish"></p>
                    <p></p><input type="submit" value="Показать">
                </form>
                <table border="1" cellpadding="5" cellspacing="0" width="50%">
                    <caption><h2>Предстоящие события (исправилено отображение событий)</h2></caption>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Очество</th>
                        <th>Фамилия</th>
                        <th>Начальное время</th>
                        <th>конечное время</th>
                        <th>Тема</th>
                        <th>Описание</th>                        
                    </tr>
                    <?php
                    //print_r($events);
                    $M = count($events);
                    for($i = 0; $i < $M; $i++)
                    {
                        echo '<tr>';
                        $N = count($events[$i]);
                        for($j = 0; $j < $N; $j++)
                        {
                            if($j==5 || $j==4)
                            {
                                echo '<td>';
                                echo date('d-m-Y', $events[$i][$j]);
                                echo '</td>';
                            }
                            else
                            {
                                echo '<td>';
                                echo $events[$i][$j];
                                echo '</td>';
                            }
                        }
//                        echo '<td>';
//                        echo '<a href="/controller/EventController.php?id=' .$events[$i][0]. '">Удалить</a>';
//                        echo '</td>';
//                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>    
    </body>
</html>