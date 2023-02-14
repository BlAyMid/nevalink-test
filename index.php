<?php

$data = $_POST;

if(isset($data['abc'])) {
    $errors = array();

    if (trim($data['a']) == '') {
        $errors[] = 'Введите параметр a!';
    }

    if (trim($data['b']) == '') {
        $errors[] = 'Введите параметр b!';
    }

    if ($data['c'] == '') {
        $errors[] = 'Введите параметр c!';
    }

    if (empty($errors)) {

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

                $x1 = (((-$data['b']) + (sqrt($d)))/(2 * $data['a']));;


                echo '<div style="color: green;">Единственный корень: '.($x1). '</div><hr>';
            }

            //нет корней
            if ($d < 0) {
                echo '<div style="color: green;">Нет корней</div><hr>';
            }
        }

    } else {

        //вывод ошибок
        echo '<div style="color: red;">'.array_shift($errors).
            '</div><hr>';
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
