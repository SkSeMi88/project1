<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Заявки на авто
    </title>
</head>
<body>
    <div>
        <div>
            Дата
            Время
            Откуда
            Куда
            Время ожидания
            Время возврата
            Автор заявки
            Пассажиры
            Комментарий
            Статус
            Авто
            Водитель
        </div>
        <div>
            <input type="date" value="30.03.1988">
            <input type="time">
            <input type="text">
            <input type="time" name="wait_time">
            <input type="time" name="return_time">
            <input type="text" name="author">
            <input type="text" name="pas">
            <input type="text" name="komment">
            <input list="statuses" id="status" name="status">
            <datalist id="statuses">
                <option>На согласовании</option>
                <option>В работе</option>
                <option>Выполнена</option>
                <option>Отменена</option>
            </datalist>

            <input list="avtos" name="avto">
            <datalist id="avtos">
                <option value="Chrome"></option>
                <option value="Firefox"></option>
                <option value="Opera"></option>
                <option value="Safari"></option>
                <option value="Microsoft Edge"></option>
            </datalist>

            <input list="driver" name="driver">
            <datalist id="drivers">
                <option value="Chrome"></option>
                <option value="Firefox"></option>
                <option value="Opera"></option>
                <option value="Safari"></option>
                <option value="Microsoft Edge"></option>
            </datalist>

            <label for="myBrowser">Choose a browser from this list:</label>
            <input list="browsers" id="myBrowser" name="myBrowser" />
            <datalist id="browsers">
            <option value="Chrome"></option>
            <option value="Firefox"></option>
            <option value="Opera"></option>
            <option value="Safari"></option>
            <option value="Microsoft Edge"></option>
            </datalist>

            Время
            Откуда
            Куда
            Время ожидания
            Время возврата
            Автор заявки
            Пассажиры
            Комментарий
            Статус
            Авто
            Водитель
        </div>
    </div>
</body>
</html>
