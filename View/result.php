<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quiz</title>
        <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/Css/style.css">
    </head>
    <body>
        <header class="">
            <div class="box header-box p-3">
                <div>
                    <p class="title">Тест з РНР</p>
                </div>

                <div>
                    <a href="/test">Назад</a>
                </div>
            </div>
        </header>
        <div class="box">
            <div class="p-3">
                <p>
                    Ви пройшли тест!
                </p>
                <p>
                    Ось ваш результат:
                </p>
            </div>
            <div class="p-3">
                <p>
                    <?php
                        echo "Всього питань: " . $total;
                    ?>
                </p>
                <p>
                    <?php
                        echo "Правильно: $correct <br>";
                    ?>
                </p>
                <p>
                    <?php
                        echo "Неправильно: " . $total - $correct . "<br>";
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>