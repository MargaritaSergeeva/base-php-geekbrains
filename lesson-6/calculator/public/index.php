<?php require_once '../helpers.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= assets('css/main.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= assets('js/axios/axios.min.js') ?>"></script>
    <script src="<?= assets('js/main.js') ?>"></script>
    <title>Calculator</title>
</head>
<body>
<span id="error"></span>
<form>
    <div>
        <label>
            <span>Первое число</span>
            <input type="number" id="value-1" name="value-1" required>
        </label>
        <p>
            <label>
                <span>Второе число</span>
                <input type="number"  id="value-2" name="value-2" required>
            </label>
        </p>
    </div>

    <p>
        <label class="label">Математические операции:</label>
        <select id="select" required>
            <option value="">Пожалуйста, выберите операцию:</option>
            <option value="multiplication">Умножение</option>
            <option value="division">Деление</option>
            <option value="addition">Сложение</option>
            <option value="subtraction">Вычитание</option>
        </select>
    </p>
    <div id="success"></div>
    <button type="submit">Отправить</button>
</form>

</body>
</html>