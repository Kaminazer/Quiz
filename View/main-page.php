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
    <header>
        <div class="box header-box p-3">
            <div>
                <p class="title">Статистика</p>
            </div>

            <div>
                <a href="/test">Назад</a>
            </div>
        </div>
    </header>
    <div class="box">
        <table class="spacing">
            <thead>
                <tr>
                    <th>Ім'я</th>
                    <th>Всього</th>
                    <th>Правильні</th>
                    <th>Неправильні</th>
                </tr>
            </thead>
            <?php
            foreach ($results as $result):?>
                <tr>
                    <td><?php echo $result['name']?></td>
                    <td><?php echo $result['total']?></td>
                    <td><?php echo $result['correct']?></td>
                    <td><?php echo $result['incorrect']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>