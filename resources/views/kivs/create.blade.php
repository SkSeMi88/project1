<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KIVSnet.Создание пользователя</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}

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

        <form method="POST" actiom="/users/create">

            @csrf

            <label>
                Заполните форму создания нового пользователя КИВС
            </label>


            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Выберите организацию
                </label>
            </div>

            <div name="company_block" id="company_block">

                <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                <input list="company-list"  name="company" id="company" value="" style="width:50%" required>

                <datalist id="company-list" style="width:50%">
                    <option>Администрация Петрозаводского городского округа</option>
                    <option>МУ "ХЭС"</option>
                    <option>МКУ "ЦУИ"</option>
                    <option>МКУ "ЦБО"</option>
                    <option>МКУ "ЖКХ"</option>
                    <option>МКУ "МАП"</option>
                    <option>МКУ "УКС"</option>
                    <option>МКУ "ЕДДС"</option>
                    <option>МКУ "Ритуал"</option>
                    <option>МКУ "Петроснаб"</option>
                    <option>МКУ "Служба заказчика"</option>
                    <option>МКУ "ЦИБС"</option>

                    {{-- АПГО, МУ "ХЭС", МКУ "ЦУИ", МКУ "ЕДДС", МКУ "Ритуал", МКУ "Петроснаб", МКУ "Служба заказчика", МКУ "МАП", МКУ "ЦБО", МКУ "УКС", МКУ "ЖКХ", Бибилиотека --}}

                </datalist>

            </div>
            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Выберите комитет
                </label>
            </div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="comite-list"  name="comite" id="comite" value="" style="width:50%"  required>

            <datalist id="comite-list" style="width:50%">

                <option>Нет</option>
                <option>Аппарат</option>
                <option>Комитет финансов</option>
                <option>Комитет Жилищно-комунального хозяйства</option>
                <option>Комитет градостроительства и землепользования</option>
                <option>Комитет социального развития</option>
                <option>Комитет экономического развития</option>

            </datalist>

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Выберите управление
                </label>
            </div>


            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="management-list"  name="management" id="management" value="" style="width:50%"  required>

            <datalist id="management-list" style="width:50%">

                <option>Нет</option>
                <option>Информационно аналитическое управление</option>
                <option>Управление культуры</option>
                <option>Управление образования</option>
                <option>Управление ЖКХ</option>
                <option>Управление дорожного хозяйства</option>
            </datalist>

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Выберите отдел
                </label>
            </div>

            <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
            <input list="department-list"  name="department" id="department" value="" style="width:50%"  required>

            <datalist id="department-list" style="width:50%">

                <option>Нет</option>
                <option>Пресс центр</option>
                <option>Финансовый отдел</option>
                <option>Отдел доходов бюджета</option>
                <option>Отдел по претензионой исковой работе</option>
                <option>Отдел технологического и программного обеспечения</option>
            </datalist>

            {{-- <br>
            <br> --}}
                <div>
                    <input type="checkbox" id="fact_flag" name="fact_flag" onchange="testjs(this);" value="1">
                    <span>
                        Совпадает с фактическим местом работы
                    </span>

                    <div>
                        <div class="div-label">
                            <label>
                                Организация
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="company-list"  name="company_fact" id="company_fact" value="" style="width:50%" required>

                        <datalist id="company-list" style="width:50%">
                            <option>Администрация Петрозаводского городского округа</option>
                            <option>МУ "ХЭС"</option>
                            <option>МКУ "ЦУИ"</option>
                            <option>МКУ "ЦБО"</option>
                            <option>МКУ "ЖКХ"</option>
                            <option>МКУ "МАП"</option>
                            <option>МКУ "УКС"</option>
                            <option>МКУ "ЕДДС"</option>
                            <option>МКУ "Ритуал"</option>
                            <option>МКУ "Петроснаб"</option>
                            <option>МКУ "Служба заказчика"</option>
                        </datalist>

                        {{-- <br> --}}

                        <div class="div-label">
                            <label>
                                Комитет
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="comite-list"  name="comite_fact" id="comite_fact" value="" style="width:50%"  required>

                        <datalist id="comite-list" style="width:50%">

                            <option>Нет</option>
                            <option>Аппарат</option>
                            <option>Комитет финансов</option>
                            <option>Комитет градостроительства и землепользования</option>
                            <option>Комитет социального развития</option>
                            <option>Комитет экономического развития</option>

                        </datalist>

                        {{-- <br> --}}

                        <div class="div-label">
                            <label>
                                Управление
                            </label>
                        </div>


                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="management-list"  name="management_fact" id="management_fact" value="" style="width:50%"  required>

                        <datalist id="management-list" style="width:50%">

                            <option>Нет</option>
                            <option>Информационно аналитическое управление</option>
                            <option>Управление культуры</option>
                            <option>Управление образования</option>
                            <option>Управление ЖКХ</option>
                            <option>Управление дорожного хозяйства</option>
                        </datalist>

                        <br>

                        <div class="div-label">
                            <label>
                                Отдел
                            </label>
                        </div>

                        <input type="button" name="login-btn" id="login-btn" value="Х" class="reset-field">
                        <input list="department-list"  name="department_fact" id="department_fact" value="" style="width:50%"  required>

                        <datalist id="department-list" style="width:50%">

                            <option>Нет</option>
                            <option>Финансовый отдел</option>
                            <option>Отдел доходов бюджета</option>
                            <option>Отдел по претензионой исковой работе</option>
                            <option>Отдел технологического и программного обеспечения</option>
                        </datalist>

                    </div>
                </div>
            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Выберите адрес
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input list="adr-list"  name="adr" id="adr" value="" style="width:50%"  required>

            <datalist id="adr-list" style="width:50%">
                <option>пр. Ленина, дом 2</option>
                <option>пр. Октябрьский, дом 5</option>
                <option>ул. Куйбышева, дом 10</option>
            </datalist>
{{--
            <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Введите должность (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="position" id="position" value="" placeholder="Должность" required class="position-text" style="width: 50%">

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Введите номер кабинета (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="kab-number" id="kab-number" value="" placeholder="Введите номер кабинета" required class="position-text" style="width: 50%">

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Введите номер компьютера (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="pc-number" id="pc-number" value="" placeholder="Введите номер кабинета" required class="pc-number-text" style="width: 50%">

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Введите номер телефона (полностью)
                </label>
            <div>

            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="phone" id="phone" value="" placeholder="Введите номер телефона" required class="phone-text" style="width: 50%">

            {{-- <br>
            <br> --}}

            <div class="div-label">
                <label>
                    Введите фамилию (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="fname" id="fname" value="" placeholder="Фамилия" required  style="width: 50%">

            {{-- <br>
            <br> --}}
            <div class="div-label">
                <label>
                    Введите имя (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="name" id="name" value="" placeholder="Имя" required  style="width: 50%">


            {{-- <br>
            <br> --}}
            <div class="div-label">
                <label>
                    Введите Отчетство (полностью)
                </label>
            <div>
            <input type="button" name="login-btn" id="login-btn" value="Х" >
            <input type="text" name="sname" id="sfname" value="" placeholder="Отчество" required  style="width: 50%">

            {{-- <br>
            <br>

            <input type="button" name="login-btn" id="login-btn" value="Получить логин" >
            <input type="text" name="login" id="login" value="" placeholder="Логин" style="width: 50%">

            <br>
            <br>

            <input type="button" name="email-btn" id="email-btn" value="Получить почту" >
            <input type="text" name="email" id="email" value="" placeholder="Почта" style="width: 50%"> --}}

            <div>
                <input type="submit" name="create-user" value="Создать пользователя">
                <input type="reset" name="create-user" value="Сбросить">
            </div>
        </form>

    </body>
</html>
