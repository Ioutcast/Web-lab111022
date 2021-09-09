<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web #1 </title>
    <meta name="description" content="WebLab№1">
    <meta name="author" content="Vasilkov.A.S">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script charset="utf-8" src=main.js></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/js" href="main.js">
</head>
<body>
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="border-bottom:solid ;" colspan="2">
          <span class="headerSpan">Васильков Александр Сергеевич <span>
            <span class="headerSpan" style="display:inline; position: absolute;right: 0;">P3211 вариант №11022<span>
        </td>
    </tr>
    <tr>
        <td width="50%">
            <div style="text-align: center;">
                <?php require "graphs.php"; ?>
                <div>
        </td>
        <td width="50%">
            <form method="POST" action="main.php" onsubmit="return checkAndSend()">
                <p> Значение Х:</p>
                <div style="margin-left: 2%;" id="outputX"></div>
                <div class="xValueUnit">
                    <input type="button" class="xValue" value="-4">
                    <input type="button" class="xValue" value="-3">
                    <input type="button" class="xValue" value="-2">
                    <input type="button" class="xValue" value="-1">
                    <input type="button" class="xValue" value="0">
                    <input type="button" class="xValue" value="1">
                    <input type="button" class="xValue" value="2">
                    <input type="button" class="xValue" value="3">
                    <input type="button" class="xValue" value="4">
                </div>

                <div class="yValueUnit">
                    <label for="textfieldY">Значение Y ∈ (-3;5):</label>
                    <input id='yValue' name="Y" type="text" minlength="1" maxlength="8">
                </div>
                <p>Значение R: </p>
                <div id="group">
                    <input type="checkbox" name="R" value="1">
                    <label for="1">1</label>
                    <input type="checkbox" name="R" value="2">
                    <label for="2">2</label>
                    <input type="checkbox" name="R" value="3">
                    <label for="3">3</label>
                    <input type="checkbox" name="R" value="4">
                    <label for="4">4</label>
                    <input type="checkbox" name="R" value="5">
                    <label for="5">5</label>
                </div>

                <button class="button" style="vertical-align:middle" id="submit" class="form__submit" type="submit"> <span>Отправить </span></button>
                <button class="button" style="vertical-align:middle" id="reset" type="reset" onclick="hide()"><span>Стереть </span>
                </button>
                <input id="someInputId" name="X" type="text" hidden>
                <!--                       Поле для X,для POST[]-->
                <input type="hidden" name="uniqid" value="<?= uniqid() ?>">
                <!--                      Поле для уникального id-->
            </form>
        </td>
    </tr>
    <?php include "setupScript.php"; include "getResult.php"; ?>
    <tr>

        <td colspan="2">
            <table style="margin: 0 auto; " border="1" id="answer" ;>
                <tr id="bold">
                    <td class="col1">X</td>
                    <td class="col2">Y</td>
                    <td class="col3">R</td>
                    <td class="col4">Ответ</td>
                    <td class="col5">Время</td>
                    <td class="col6">Время работы скрипта (в мс)</td>
                </tr>

                </td>
                <?php
                if ($setup_script == true) {
                    $answer = getResult($x, $y, $r);
                    //Высчитывание время исполнения скрипта
                    setlocale(LC_ALL, 'ru_RU.UTF-8');
                    $time = strftime(' %d %b %Y %H:%M:%S', time());
                    $script_time = round((microtime(true) - $start) * 10 ** 3, 3);// время в мс
                    $script_time = str_ireplace(",", ".", $script_time);
                    $uniqid = $_POST['uniqid'];

                    if ($history[0]["uniqid"] !== $uniqid) {
                        array_unshift($history, [
                            'X' => $x,
                            'Y' => $y,
                            'R' => $r,
                            'Ans' => $answer,
                            'time' => $time,
                            'script' => $script_time,
                            'uniqid' => $uniqid
                        ]);
                    }

                    $_SESSION['history'] = $history;

                }
                //Заполнение таблицы
                foreach ($history as $result) {
                    ?>

                    <tr>
                        <td><?= $result['X'] ?></td>
                        <td><?= $result['Y'] ?></td>
                        <td><?= $result['R'] ?></td>
                        <td><?= $result["Ans"] ?></td>
                        <td><?= $result["time"] ?></td>
                        <td><?= $result["script"] ?></td>
                    </tr>
                    </tr>
                <?php } ?>
            </table>

</body>
</html>