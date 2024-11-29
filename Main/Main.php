<?php


session_start();
include_once("db.php");
$idUser = $_SESSION['user']['id'];  //Проверка на сессию


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/fonts2.css">
    <link rel="stylesheet" href="Styles/Main2.css">
</head>

<body>
    <div class="container_head">
        <div class="head_block">
            <div class="head">
                <div class="head_text">
                    <div class="logo">
                        <img id="logo" width="165" height="58" src="Img/logo.svg" />
                    </div>
                    <div class="head_func">
                        <a href="Main.php" id="Glavnaya">Главная</a>
                        <a href="#digital_portfolio_contacts_heading" id="O_nas">О нас</a>
                        <a href="../Cataloge/Cataloge.php" id="Katalog">Каталог<br>портфолио</a>
                        <div class="personal_account">
                            <a href="<?php if ($idUser == '') {
                                echo '../Registration_Authorization/Authorization.html';
                            } else {
                                echo '../Registration_Authorization/Script/login.php';
                            } ?>"><img id="personal_account" width="40px" height="40px"
                                    src="Img/personal_account.svg" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--для запроса-->
    <div class="container_head2">
        <div class="head_block2">
            <div class="head2">
                <div class="head_text2">
                    <div class="logo2">
                        <img id="logo" width="165" height="58" src="Img/logo.svg" />
                    </div>
                    <div class="head_func2">
                        <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                        <label class="burger" for="burger-checkbox"></label>
                        <ul class="menu-list2">
                            <li><a href="#" class="menu-item">Главная</a>
                            <li>
                            <li><a href="#" class="menu-item">О нас</a>
                            <li>
                            <li><a href="../Cataloge/Cataloge.php" class="menu-item">Каталог портфолио</a>
                            <li>
                            <li><a href="<?php if ($idUser == '') {
                                echo '../Registration_Authorization/Authorization.html';
                            } else {
                                echo '../Registration_Authorization/Script/login.php';
                            } ?>" class="menu-item">Личный кабинет</a>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="digital_portfolio">
        <div class="digital_portfolio_tree">
        </div>
        <div class="digital_portfolio_text">
            <h1 id="digital_portfolio">Digital Portfolio: Ваш<br>Профессиональный Путь<br>Онлайн</h1>
            <div class="digital_portfolio_text_button">
                <p id="digital_portfolio_text">Создайте впечатляющее цифровое портфолио, которое выделит вас среди
                    конкурентов и продемонстрирует ваши профессиональные достижения.</p>
                <form action="../Registration_Authorization/Registration.html"><button class="digital_portfolio_button">
                        <p id="digital_portfolio_create">Создать</p><img id="digital_portfolio_lighting" width="165"
                            height="40" src="Img/lightning.svg" />
                    </button></form>
            </div>
        </div>
    </div>
    <!--для запроса-->
    <div class="digital_portfolio2">
        <div class="digital_portfolio_text2">
            <h1 id="digital_portfolio2">Digital Portfolio: Ваш<br>Профессиональный Путь<br>Онлайн</h1>
            <div class="digital_portfolio_text_button2">
                <p id="digital_portfolio_text2">Создайте впечатляющее цифровое портфолио, которое выделит вас среди
                    конкурентов и продемонстрирует ваши профессиональные достижения.</p>
                <form class="digital_portfolio_button_form2" action="../Registration_Authorization/Registration.html">
                    <button class="digital_portfolio_button2">
                        <p id="digital_portfolio_create">Создать</p><img id="digital_portfolio_lighting" width="165"
                            height="40" src="Img/lightning.svg" />
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!---------------------------->
    <div class="digital_portfolio_what">
        <div class="digital_portfolio_background">
            <div class="digital_portfolio_background_sphere">
            </div>
            <div class="digital_portfolio_what_heading">
                <h2 id="digital_portfolio_what_heading_text">Что такое Digital<br> Portfolio?</h2>
            </div>
            <div class="test">
                <div class="digital_portfolio_what_сontainer">
                    <div class="digital_portfolio_what_block1">
                        <p id="digital_portfolio_what_block_text">Digital Portfolio - это онлайн-коллекция ваших
                            лучших
                            работ и достижений.</p>
                    </div>
                    <div class="digital_portfolio_what_block2">
                        <p id="digital_portfolio_what_block_text">Сервис позволяет эффективно презентовать свои
                            навыки и
                            опыт потенциальным работодателям или клиентам.</p>
                    </div>
                    <div class="digital_portfolio_what_block3">
                        <p id="digital_portfolio_what_block_text">Все ваши проекты организованы и доступны в одном
                            месте,
                            что упрощает их демонстрацию.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--для запроса-->
    <div class="digital_portfolio_what2">
        <div class="digital_portfolio_background">
            <div class="digital_portfolio_background_sphere">
            </div>
            <div class="digital_portfolio_what_heading2">
                <h2 id="digital_portfolio_what_heading_text2">Что такое Digital<br> Portfolio?</h2>
            </div>
            <div class="test">
                <div class="digital_portfolio_what_сontainer2">
                    <div class="digital_portfolio_what_block12">
                        <p id="digital_portfolio_what_block_text2">Digital Portfolio - это онлайн-коллекция ваших
                            лучших
                            работ и достижений.</p>
                    </div>
                    <div class="digital_portfolio_what_block22">
                        <p id="digital_portfolio_what_block_text2">Сервис позволяет эффективно презентовать свои
                            навыки
                            и
                            опыт потенциальным работодателям или клиентам.</p>
                    </div>
                    <div class="digital_portfolio_what_block32">
                        <p id="digital_portfolio_what_block_text2">Все ваши проекты организованы и доступны в одном
                            месте,
                            что упрощает их демонстрацию.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------->
    <div class="digital_portfolio_func">
        <div class="digital_portfolio_func_background">
            <div class="digital_portfolio_func_heading">
                <h2 id="digital_portfolio_func_heading_text">Ключевые Функции Сервиса</h2>
            </div>
            <div class="digital_portfolio_func_board_block">
                <div class="digital_portfolio_func_board_profile_text">
                    <img id="digital_portfolio_func_board_profile" src="Img/board_profile.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading">Профиль Пользователя</h3>
                    <p id="digital_portfolio_func_board_profile_text">Создайте персонализированный профиль с
                        информацией
                        о
                        вашем опыте и навыках.</p>
                </div>
                <div class="digital_portfolio_func_board_cataloge_text">
                    <img id="digital_portfolio_func_board_profile" src="Img/board_cataloge.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading">Каталог Проектов</h3>
                    <p id="digital_portfolio_func_board_profile_text">Организуйте свои работы по категориям для
                        удобного
                        просмотра и поиска.</p>
                </div>
                <div class="digital_portfolio_func_board_add_text">
                    <img id="digital_portfolio_func_board_profile" src="Img/board_add.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading">Добавление Проектов</h3>
                    <p id="digital_portfolio_func_board_profile_text">
                        Легко загружайте и обновляйте информацию о своих новых достижениях.</p>
                </div>
                <div class="digital_portfolio_func_board_publication_text">
                    <img id="digital_portfolio_func_board_profile" src="Img/board_publication.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading">Публикация</h3>
                    <p id="digital_portfolio_func_board_profile_text">Делитесь своим портфолио с потенциальными
                        работодателями или клиентами.</p>
                </div>
            </div>
        </div>
    </div>
    <!--для запроса-->
    <div class="digital_portfolio_func2">
        <div class="digital_portfolio_func_background">
            <div class="digital_portfolio_func_heading2">
                <h2 id="digital_portfolio_func_heading_text2">Ключевые Функции Сервиса</h2>
            </div>
            <div class="digital_portfolio_func_board_block2">
                <div class="digital_portfolio_func_board_profile_text2">
                    <img id="digital_portfolio_func_board_profile2" src="Img/board_profile.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading2">Профиль Пользователя</h3>
                    <p id="digital_portfolio_func_board_profile_text2">Создайте персонализированный профиль с
                        информацией
                        о
                        вашем опыте и навыках.</p>
                </div>
                <div class="digital_portfolio_func_board_cataloge_text2">
                    <img id="digital_portfolio_func_board_profile2" src="Img/board_cataloge.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading2">Каталог Проектов</h3>
                    <p id="digital_portfolio_func_board_profile_text2">Организуйте свои работы по категориям для
                        удобного
                        просмотра и поиска.</p>
                </div>
                <div class="digital_portfolio_func_board_add_text2">
                    <img id="digital_portfolio_func_board_profile2" src="Img/board_add.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading2">Добавление Проектов</h3>
                    <p id="digital_portfolio_func_board_profile_text2">
                        Легко загружайте и обновляйте информацию о своих новых достижениях.</p>
                </div>
                <div class="digital_portfolio_func_board_publication_text2">
                    <img id="digital_portfolio_func_board_profile2" src="Img/board_publication.svg">
                    <h3 id="digital_portfolio_func_board_profile_heading2">Публикация</h3>
                    <p id="digital_portfolio_func_board_profile_text2">Делитесь своим портфолио с потенциальными
                        работодателями или клиентами.</p>
                </div>
            </div>
        </div>
    </div>
    <!----------------------->
    <div class="digital_portfolio_create">
        <h2 id="digital_portfolio_create_heading">Как Создать Эффективное <br>Портфолио?</h2>
        <div class="digital_portfolio_create_text_container">
            <div class="digital_portfolio_create_text">

                <div class="digital_portfolio_create_text1">
                    <p id="digital_portfolio_create_num">1</p>
                    <p id="digital_portfolio_create_text"><strong>Выберите Лучшие Работы</strong><br>
                        Отберите проекты, которые наилучшим образом демонстрируют ваши навыки и опыт.</p>
                </div>

                <div class="digital_portfolio_create_text2">
                    <p id="digital_portfolio_create_num">2</p>
                    <p id="digital_portfolio_create_text"><strong>Структурируйте Информацию</strong><br>
                        Организуйте проекты по категориям или хронологии для удобного просмотра.</p>
                </div>

                <div class="digital_portfolio_create_text3">
                    <p id="digital_portfolio_create_num">3</p>
                    <p id="digital_portfolio_create_text"><strong>Добавьте Описания</strong><br>
                        Кратко опишите каждый проект, указав ваш вклад и использованные технологии.</p>
                </div>

                <div class="digital_portfolio_create_text4">
                    <p id="digital_portfolio_create_num">4</p>
                    <p id="digital_portfolio_create_text"><strong>Регулярно Обновляйте</strong><br>
                        Добавляйте новые проекты и удаляйте устаревшие, чтобы портфолио оставалось актуальным.</p>
                </div>
            </div>
            <div class="digital_portfolio_create_icon1"></div>
            <div class="digital_portfolio_create_icon2"></div>
            <div class="digital_portfolio_create_icon3"></div>
        </div>

    </div>
    <!--для запроса-->
    <div class="digital_portfolio_create2">
        <h2 id="digital_portfolio_create_heading2">Как Создать Эффективное <br>Портфолио?</h2>
        <div class="digital_portfolio_create_text_container2">
            <div class="digital_portfolio_create_text2">

                <div class="digital_portfolio_create_text12">
                    <p id="digital_portfolio_create_num2">1</p>
                    <p id="digital_portfolio_create_text2"><strong>Выберите Лучшие Работы</strong><br>
                        Отберите проекты, которые наилучшим образом демонстрируют ваши навыки и опыт.</p>
                </div>

                <div class="digital_portfolio_create_text22">
                    <p id="digital_portfolio_create_num2">2</p>
                    <p id="digital_portfolio_create_text2"><strong>Структурируйте Информацию</strong><br>
                        Организуйте проекты по категориям или хронологии для удобного просмотра.</p>
                </div>

                <div class="digital_portfolio_create_text32">
                    <p id="digital_portfolio_create_num2">3</p>
                    <p id="digital_portfolio_create_text2"><strong>Добавьте Описания</strong><br>
                        Кратко опишите каждый проект, указав ваш вклад и использованные технологии.</p>
                </div>

                <div class="digital_portfolio_create_text42">
                    <p id="digital_portfolio_create_num2">4</p>
                    <p id="digital_portfolio_create_text2"><strong>Регулярно Обновляйте</strong><br>
                        Добавляйте новые проекты и удаляйте устаревшие, чтобы портфолио оставалось актуальным.</p>
                </div>
            </div>
            <div class="digital_portfolio_create_icon1"></div>
            <div class="digital_portfolio_create_icon2"></div>
            <div class="digital_portfolio_create_icon3"></div>
        </div>

    </div>
    <!----------------------------------->
    <div class="digital_portfolio_users">
        <div class="digital_portfolio_users_students"></div>
        <div class="digital_portfolio_users_text">
            <h2 id="digital_portfolio_users_heading">Для Кого Подходит<br> Digital Portfolio?</h2>
            <div class="digital_portfolio_users_text_students">
                <p id="digital_portfolio_users_text">Студенты<br>
                    Создавайте портфолио своих учебных проектов и практик для будущих работодателей.</p>
                <img src="Img/digital_portfolio_users_text_students_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_developer">
                <p id="digital_portfolio_users_text">Начинающие Разработчики<br>
                    Демонстрируйте свои навыки программирования через примеры кода и готовые проекты.</p>
                <img src="Img/digital_portfolio_users_text_developer_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_freelance">
                <p id="digital_portfolio_users_text">Фрилансеры<br>
                    Привлекайте новых клиентов, показывая разнообразие и качество ваших работ.</p>
                <img src="Img/digital_portfolio_users_text_freelance_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_designer">
                <p id="digital_portfolio_users_text">Дизайнеры<br>
                    Визуально представляйте свои творческие работы в удобном онлайн-формате.</p>
                <img src="Img/digital_portfolio_users_text_designer_icon.svg" id="digital_portfolio_users_icon">
            </div>
        </div>
    </div>
    <!--для запроса-->
    <div class="digital_portfolio_users2">
        <div class="digital_portfolio_users_students"></div>
        <div class="digital_portfolio_users_text2">
            <h2 id="digital_portfolio_users_heading2">Для Кого Подходит<br> Digital Portfolio?</h2>
            <div class="digital_portfolio_users_text_students2">
                <p id="digital_portfolio_users_text2">Студенты<br>
                    Создавайте портфолио своих учебных проектов и практик для будущих работодателей.</p>
                <img src="Img/digital_portfolio_users_text_students_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_developer2">
                <p id="digital_portfolio_users_text2">Начинающие Разработчики<br>
                    Демонстрируйте свои навыки программирования через примеры кода и готовые проекты.</p>
                <img src="Img/digital_portfolio_users_text_developer_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_freelance2">
                <p id="digital_portfolio_users_text2">Фрилансеры<br>
                    Привлекайте новых клиентов, показывая разнообразие и качество ваших работ.</p>
                <img src="Img/digital_portfolio_users_text_freelance_icon.svg" id="digital_portfolio_users_icon">
            </div>
            <div class="digital_portfolio_users_text_designer2">
                <p id="digital_portfolio_users_text2">Дизайнеры<br>
                    Визуально представляйте свои творческие работы в удобном онлайн-формате.</p>
                <img src="Img/digital_portfolio_users_text_designer_icon.svg" id="digital_portfolio_users_icon">
            </div>
        </div>
    </div>
    <!----------------------------------->
    <div class="digital_portfolio_contacts">
        <div class="digital_portfolio_contacts_logo">
            <img src="Img/digital_portfolio_contacts_logo_icon.svg">
        </div>
        <div class="digital_portfolio_contacts_text_container">
            <div class="digital_portfolio_contacts_text">
                <h3 id="digital_portfolio_contacts_heading">О нас</h3>
                <div class="digital_portfolio_contacts_text_block">
                    <div class="digital_portfolio_contacts_text_subblock">
                        <div class="digital_portfolio_contacts_text_subblock1">
                            <p id="digital_portfolio_contacts_text">Поддержка</p>
                            <img id="digital_portfolio_contacts_icon"
                                src="Img/digital_portfolio_contacts_support_icon.svg">
                        </div>
                        <p id="digital_portfolio_contacts_mail">vlad04344@gmail.com</p>
                    </div>
                    <div class="digital_portfolio_contacts_text_subblock">
                        <div class="digital_portfolio_contacts_text_subblock1">
                            <p id="digital_portfolio_contacts_text">Пожелания</p>
                            <img id="digital_portfolio_contacts_icon"
                                src="Img/digital_portfolio_contacts_wishes_icon.svg">
                        </div>
                        <p id="digital_portfolio_contacts_mail">vlad04344@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <svg width="0" height="0" viewBox="0 0 215 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="digital_portfolio_what_texture1">
            <path d="M0.591309 58.4023L214.596 0.902344V250.902H0.591309V58.4023Z" fill="black" />
        </clipPath>
    </svg>
    <svg width="0" height="0" viewBox="0 0 215 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="digital_portfolio_what_texture2">
            <path
                d="M0.751953 46.6539C0.751953 36.7644 7.97992 28.3597 17.758 26.8792L192.758 0.383699C204.859 -1.44836 215.752 7.9199 215.752 20.1583V226.902C215.752 237.948 206.798 246.902 195.752 246.902H20.752C9.70626 246.902 0.751953 237.948 0.751953 226.902V46.6539Z"
                fill="black" />
    </svg>
    </clipPath>
    <svg width="0" height="0" viewBox="0 0 215 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="digital_portfolio_what_texture3">
            <path d="M0.608154 0.902344L215.608 55.9023V250.902H0.608154V0.902344Z" fill="black" />
    </svg>
    </clipPath>
</body>

</html>