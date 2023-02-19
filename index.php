<?php

$data = $_POST;

if(isset($data['abc'])) {

    //параметр a никогда не может быть пустым
    if (trim($data['a']) == '') {
        $data['a'] = 1;
    }

    //полные уравнения, где мы знаем все переменные
    if ($data['a'] != '' and $data['b'] != '' and $data['c'] != '') {

        $d = (($data['b']) * ($data['b'])) - (4 * ($data['a']) * ($data['c']));

        //2 корня
        if ($d > 0) {

            $x1 = (((-$data['b']) + (sqrt($d)))/(2 * $data['a']));
            $x2 = (((-$data['b']) - (sqrt($d)))/(2 * $data['a']));

            echo '<div style="color: green;">Первый корень: '.($x1). '</div>';
            echo '<div style="color: green;">Второй корень: '.($x2). '</div><hr>';
        }

        //1 корень
        if ($d == 0) {

            $x1 = (((-$data['b']) + (sqrt($d))) / (2 * $data['a']));;

            echo '<div style="color: green;">Единственный корень: '.($x1). '</div><hr>';
        }

        //нет корней
        if ($d < 0) {
            echo '<div style="color: green;">Нет корней</div><hr>';
        }
    }


    //неполное уравнение, когда c == 0, но a != 0 и c != 0
    if ($data['a'] != '' and $data['b'] != '' and $data['c'] == '') {

        $x1 = 0;
        $x2 = (-($data['b']) / ($data['a']));

        echo '<div style="color: green;">Первый корень: '.($x1). '</div>';
        echo '<div style="color: green;">Второй корень: '.($x2). '</div><hr>';
    }

    //неполное уравнение, когда b == 0, но a != 0 и c != 0
    if ($data['a'] != '' and $data['b'] == '' and $data['c'] != '') {

        $z = (-($data['c']) / ($data['a']));

        if ($z > 0) {

            $x1 = (-(sqrt($z)));
            $x2 = (sqrt($z));

            echo '<div style="color: green;">Первый корень: '.($x1). '</div>';
            echo '<div style="color: green;">Второй корень: '.($x2). '</div><hr>';

        } else {
            echo '<div style="color: green;">Нет решения</div><hr>';
        }

    }

    //неполное уравнение формата ax^2 = 0, когда b == 0 и c == 0
    if ($data['a'] != '' and $data['b'] == '' and $data['c'] == '') {
        echo '<div style="color: green;">Единственный корень: 0</div><hr>';
    }
}
?>


<!DOCTYPE html>
<html lang="ru">

<form action="/index.php" method="post">
    <section id="input">
            <section id="input-data">
                <section id="input-data-a">
                    <p>Введите параметр a</p>
                    <input type="text" name="a">
                </section>
                <section id="input-data-b">
                    <p>Введите параметр b</p>
                    <input type="text" name="b">
                </section>
                <section id="input-data-c">
                    <p>Введите параметр c</p>
                    <input type="text" name="c">
                </section>
            </section>
        <section>
            <button type="submit" name="abc">Далее</button>
        </section>
    </section>
</form>
