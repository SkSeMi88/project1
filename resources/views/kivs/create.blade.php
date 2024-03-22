<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KIVSnet.Создание пользователя</title>


        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .span_mesto {
                width:  100px;
            }

            div .span_mesto {
                display:    flex;
                width:  100px;
                /* background: green; */
            }

            .div-label {
                margin-top: 5px;
                font-weight: bold;
            }
            </style>

        <script src="/js/kivsnet.js">
        </script>

    </head>
    <body>

        <form actiom={{route('users.create')}}  method="post">
        {{-- <form actiom='users/create'  method="post"> --}}

            @csrf
            <label>
                Заполните форму создания нового пользователя КИВС
            </label>

            <div class="div-label">
                <label>
                    Выберите организацию
                </label>
            </div>

            <div name="company_block" id="company_block">

                <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                <input list="company-list"  name="org" id="org" value="" style="width:50%" required>

                <datalist id="company-list" style="width:50%">
                    <?php
                    foreach($orgs As $org){
                        echo '<option>'.$org['name'].'</option>';
                    }
                    ?>

                </datalist>


            </div>

            <div class="div-label">
                <label>
                    Выберите комитет
                </label>
            </div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="committee-list"  name="committee" id="committee" value="" style="width:50%"  required>

            <datalist id="committee-list" style="width:50%">

                <option>Нет</option>
                <?php
                foreach($kommittees As $kommittee){
                    echo '<option>'.$kommittee['name'].'</option>';
                }
                ?>

            </datalist>


            <div class="div-label">
                <label>
                    Выберите управление
                </label>
            </div>


            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="manager-list"  name="manager" id="manager" value="" style="width:50%"  required>

            <datalist id="manager-list" style="width:50%">

                <option>Нет</option>

                <?php
                foreach($managers As $manager){
                    echo '<option>'.$manager['name'].'</option>';
                }
                ?>

            </datalist>

            <div class="div-label">
                <label>
                    Выберите отдел
                </label>
            </div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="department-list"  name="department" id="department" value="" style="width:50%"  required>

            <datalist id="department-list" style="width:50%">

                <option>Нет</option>

                <?php
                foreach($departments As $department){
                    echo '<option>'.$department['name'].'</option>';
                }
                ?>
            </datalist>

                <div>
                    <input type="checkbox" id="fact_flag" name="fact_flag" onchange="testjs(this);" value="1">
                    <span>
                        Совпадает с фактическим местом работы
                    </span>

                    <div>
                        <div class="div-label">
                            <label>
                                Организация (факт.)
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="company-list_fact"  name="company_fact" id="company_fact" value="" style="width:50%" required>

                        <datalist id="company-list_fact" style="width:50%">

                            <?php
                            foreach($orgs As $org){
                                echo '<option>'.$org['name'].'</option>';
                            }
                            ?>

                        </datalist>

                        <div class="div-label">
                            <label>
                                Комитет (факт.)
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="comite-list"  name="comite_fact" id="comite_fact" value="" style="width:50%"  required>

                        <datalist id="comite-list" style="width:50%">

                            <option>Нет</option>

                            <?php
                            foreach($kommittees As $kommittee){
                                echo '<option>'.$kommittee['name'].'</option>';
                            }
                            ?>


                        </datalist>
                        <div class="div-label">
                            <label>
                                Управление (факт.)
                            </label>
                        </div>


                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="management-list"  name="management_fact" id="management_fact" value="" style="width:50%"  required>

                        <datalist id="management-list" style="width:50%">

                            <option>Нет</option>
                            <?php
                            foreach($managers As $manager){
                                echo '<option>'.$manager['name'].'</option>';
                            }
                            ?>
                        </datalist>

                        <br>

                        <div class="div-label">
                            <label>
                                Отдел (факт.)
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="department-list"  name="department_fact" id="department_fact" value="" style="width:50%"  required>

                        <datalist id="department-list" style="width:50%">

                            <option>Нет</option>

                            <?php
                            foreach($departments As $department){
                                echo '<option>'.$department['name'].'</option>';
                            }
                            ?>
                        </datalist>

                    </div>
                </div>

            <div class="div-label">
                <label>
                    Выберите адрес
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="adr-list"  name="adr" id="adr" value="" style="width:50%"  required>

            <datalist id="adr-list" style="width:50%">
                <option>пр. Ленина, дом 2</option>
                <option>пр. Октябрьский, дом 5</option>
                <option>ул. Куйбышева, дом 10</option>
            </datalist>

            <div class="div-label">
                <label>
                    Введите должность (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="position" id="position" value="" placeholder="Должность" required class="position-text" style="width: 50%">

            <div class="div-label">
                <label>
                    Введите номер кабинета (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="kab-number" id="kab-number" value="" placeholder="Введите номер кабинета" required class="position-text" style="width: 50%">

            <div class="div-label">
                <label>
                    Введите номер компьютера (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="pc-number" id="pc-number" value="" placeholder="Введите номер кабинета" required class="pc-number-text" style="width: 50%">

            <div class="div-label">
                <label>
                    Введите номер телефона (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="phone" id="phone" value="" placeholder="Введите номер телефона" required class="phone-text" style="width: 50%">

            <div class="div-label">
                <label>
                    Введите фамилию (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="fname" id="fname" value="" placeholder="Фамилия" required  style="width: 50%">

            <div class="div-label">
                <label>
                    Введите имя (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="name" id="name" value="" placeholder="Имя" required  style="width: 50%">


            <div class="div-label">
                <label>
                    Введите Отчетство (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input type="text" name="sname" id="sfname" value="" placeholder="Отчество" required  style="width: 50%">

            <div>
                <input type="submit" name="create-user" value="Создать пользователя">
                <input type="reset" name="reset-user" value="Сбросить">
            </div>
        </form>

    </body>
</html>
