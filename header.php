
<?php wp_head(); ?>

</head>

<body>

 <header>
     <div class="container">
        <div class="logo" id="headerLogo">
           <?php the_custom_logo();?>
        </div>
          <div class="menu" id="headerMenu">
            <a href="#" class="menu-button" id="menuHome">Главная</a>
            <a href="#" class="menu-button" id="menuAbout">О нас</a>
            <a href="#" class="menu-button" id="menuServ">Услуги</a>
            <a href="#" class="menu-button" id="menuPort">Портфолио</a>
            <a href="#" class="menu-button" id="menuKont">Контакты</a>
            <a href="#" class="menu-button" id="menuNew">Новости</a>
            <a href="#" class="menu-button" id="menuFAQ">FAQ</a>
          </div>
            <div class="login" id="headerLogin">
              <button class="login-button">Вход в личный кабинет</button>
            </div>
       </div>
 </header>