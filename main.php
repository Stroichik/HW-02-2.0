<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашнее задание HW-02</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="flex-container">
        <div class="header">
            <?php
            include 'logo.inc.php';
            include 'menu.inc.php';
            ?>

        </div>
        <div class="about">
            <h1> <?php echo $greetings ?> </h1>

            <div class="data">

                <div class="Img">
                    <?php echo '<img src="img/Slon.jpg" alt="Дратути" width="360" height="260">'; ?>
                </div>

                <div class="fullname">
                    <p>Мой позывной
                        <?php echo $nickname . '<br>' ?>
                    </p>

                    <p>Мне
                        <?php echo $age, " года" . '<br>' ?>
                    </p>

                    <p>Я из города
                        <?php echo $city . '<br>' ?>
                    </p>

                    <p>Учусь искать уязвимости в программах, но пока прохожу РНР</p>
                </div>

                <div>
                    <h3>Мой учител</h3>
                    <?php echo '<img src="img/Учител.png" alt="Дратути" width="360" height="260">'; ?>
                </div>

            </div>



            <div class="knowledge">
                <?php include 'knowledge.inc.php';

                echo $a, " ", $b, " ", $c, ", но стили я честно подрезал с Гита." . '<br>';

                $a = 25;
                $b = 30;
                $c = $a + $b;
                echo "Сумма чисел $a и $b = $c" . '<br>';
                echo "Т.к. \$price = $price, то $d";
                ?>

            </div>

            <div class="article">
                <p class="text">
                    Тут какой-то текст, пусть будет, будем считать его временной затычкой.
                </p>

            </div>

        </div>

        <?php include 'footer.inc.php' ?>

    </div>

</body>

</html>