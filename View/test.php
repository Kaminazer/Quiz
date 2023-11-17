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
        <div class="box p-3 header-box">
            <div>
                <p class="title">Тест з PHP</p>
            </div>
            <div>
                <a href="/">Статистика</a>
            </div>
        </div>
    </header>
    <div class="box container">
        <form action="/test/check/" method="post" class="pt-3">
            <div class="row">
                <div class="col-4">
                    <div class="input-group">
                        <input class="form-control border-dark border-3" type="text" name="name" placeholder="Введіть ім'я">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="mb-3">
                    <div>
                        <span>
                            1. Що означає абревіатура PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q1" value="1" id="answer1_q1">
                            <label for="answer1_q1">Public Hosting Platform</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q1" value="2" id="answer2_q1">
                            <label for="answer2_q1">Preformatted Hypertext Processor</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q1" value="3" id="answer3_q1">
                            <label for="answer3_q1">PHP: Hypertext Preprocessor</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q1" value="4" id="answer4_q1">
                            <label for="answer4_q1">Private Home Page</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            2. Як створити зміну name в PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q2" value="1" id="answer1_q2">
                            <label for="answer1_q2">$name</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q2" value="2" id="answer2_q2">
                            <label for="answer2_q2">let name</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q2" value="3" id="answer3_q2">
                            <label for="answer3_q2">variable name</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q2" value="4" id="answer4_q2">
                            <label for="answer4_q2">?name</label>
                        </div>
                    </div>
                </div>
                <div class=" mb-3">
                    <div>
                        <span>
                            3. Яка з наведених нижче функцій використовується для виведення тексту на екран у PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q3" value="1" id="answer1_q3">
                            <label for="answer1_q3">display </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q3" value="2" id="answer2_q3">
                            <label for="answer2_q3">echo </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q3" value="3" id="answer3_q3">
                            <label for="answer3_q3">write</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q3" value="4" id="answer4_q3">
                            <label for="answer4_q3">output</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            4. Який оператор використовується для виконання умовних операцій у PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q4" value="1" id="answer1_q4">
                            <label for="answer1_q4">for </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q4" value="2" id="answer2_q4">
                            <label for="answer2_q4">foreach </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q4" value="3" id="answer3_q4">
                            <label for="answer3_q4">loop</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q4" value="4" id="answer4_q4">
                            <label for="answer4_q4">if</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            5. Які з наступних функцій використовуються для з'єднання з базою даних PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q5" value="1" id="answer1_q5">
                            <label for="answer1_q5">mysqli_connect </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q5" value="2" id="answer2_q5">
                            <label for="answer2_q5">connect_to_db </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q5" value="3" id="answer3_q5">
                            <label for="answer3_q5">db_open</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q5" value="4" id="answer4_q5">
                            <label for="answer4_q5">db_connection</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            6. Що означає абревіатура PDO?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q6" value="1" id="answer1_q6">
                            <label for="answer1_q6">PHP Database Object </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q6" value="2" id="answer2_q6">
                            <label for="answer2_q6">Personal Data Organizer </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q6" value="3" id="answer3_q6">
                            <label for="answer3_q6">PHP Data Objects</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q6" value="4" id="answer4_q6">
                            <label for="answer4_q6">Public Database Operator</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            7. Який символ використовується для початку однорядкового коментаря в PHP?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q7" value="1" id="answer1_q7">
                            <label for="answer1_q7">/* </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q7" value="2" id="answer2_q7">
                            <label for="answer2_q7">//</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q7" value="3" id="answer3_q7">
                            <label for="answer3_q7">--</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q7" value="4" id="answer4_q7">
                            <label for="answer4_q7">^^</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <span>
                            8. Яким чином ви підключаєте файл з кодом PHP до іншого файлу?
                        </span>
                        <div class="mt-2">
                            <input type="radio" name="q8" value="1" id="answer1_q8">
                            <label for="answer1_q8">include “file.php”</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q8" value="2" id="answer2_q8">
                            <label for="answer2_q8">import “file.php”</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q8" value="3" id="answer3_q8">
                            <label for="answer3_q8">link “file.php” </label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="q8" value="4" id="answer4_q8">
                            <label for="answer4_q8">load “file.php”</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-cols-md-4 mt-3">
                <input type="submit" value="Надіслати відповіді" class="btn-success rounded-3 pt-2 pb-2">
            </div>

        </form>
    </div>
</body>
</html>