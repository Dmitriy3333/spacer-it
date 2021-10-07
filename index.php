<?php
   require "php/funcs.php";
   if (!empty($_POST)){
		save_mess();
		header("Location: {$_SERVER['PHP_SELF']}");//
		exit;
	}
	$messages = get_mess();
	$messages = array_mess($messages);
   ?>

<!--Подключение файлов для регистрации/авторизации | комментарии-->
<head>
   <meta charset="utf-8">
   <title>Главная</title>
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="style/theme.css">
   <link rel="icon" href="images/faveico.svg" type="image/x-icon">
   <link rel="stylesheet" href="style/photo.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body id="bo">
   <!--блок закрытия для регистрации/авторизации-->
   <div id="closee"></div>
   <!-- Кнопка прокрутки -->
   <button type="button" class="up" style="background: none;"><img src="images/up.png"></button>
   <!-- Конец кнопки прокрутки -->
   <!-- это верхнее меню -->
   <div class="top" id="ttop">
      <!--блок закрытия для настроек-->
      <div id="closeee"></div>
      <!-- <div class="nr" id="loginn" onclick="r()"></div> -->
      <div class="zs gloo" id="open"></div>
      <div class="logoi glooe" id="logoi"></div>
      <div class="n gloo" id="button" onclick="myFunction()"></div>
      <!--кнопки в верхнем меню
         <img src="images/login.png" class="nr" id="loginn">
         <img src="images/set2.png" class="zs" id="open">
            <img src="images/menu.png" class="n" id="button"-->
      <!--Блок настроек-->
      <div id="settings" class="settings">
         <div class="color-filters">
            <span class="span">
            <label>
               Цвет текста:
               <select class="filter select color-setting" name="font-color">
                  <option class="select" value="inherit" selected>По умолчанию</option>
                  <option class="select" value="black">Чёрный</option>
                  <option class="select" value="white">Белый</option>
                  <option class="select" value="ghostwhite">Светло-серый</option>
                  <option class="select" value="pink">Розовый</option>
                  <option class="select" value="darkred">Тёмно-красный</option>
                  <option class="select" value="darkorange">Оранжевый</option>
                  <option class="select" value="saddlebrown">Коричневый</option>
                  <option class="select" value="gold">Золотой</option>
                  <option class="select" value="greenyellow">Салатовый</option>
                  <option class="select" value="forestgreen">Зелёный</option>
                  <option class="select" value="aquamarine">Аквамарин</option>
                  <option class="select" value="lightskyblue">Небесно-голубой</option>
                  <option class="select" value="lightsteelblue">Серо-голубой</option>
                  <option class="select" value="darkblue">Тёмно-синий</option>
                  <option class="select" value="indigo">Индиго</option>
                  <option class="select" value="mediumpurple">Фиолетовый</option>
                  <option class="select"  value="purple">Пурпурный</option>
               </select>
         </div>
         <table style="transition: 0.3s" class="">
         <tr>
         <td>
         <label><span style="font-size: 25px !important">Размер текста (<span class="pixels">25</span>)</span>
         </td>  
         <td style="padding-top: 3px"> 
         <span>
         <button class="theme-button"></button>
         </span>
         </td>
         </tr>
         </table>
         <input class="size-setting range" type="range" min="18" max="68" step="1" value="25">
         </label>
      </div>
   </div>
   <!-- конец верхнего меню -->
   <!--Блок закрытия бокового меню-->
   <div id="close" onclick="myFunction1()"></div>
   <!-- начало бокового меню-->
   <div id="box">
      <br>
      <div class="picDiv">
            <div class="picture">
               <video autoplay muted loop id="myVideo" width="100%" class="picc">
                  <source src="../images/logo.mp4" type="video/mp4">
               </video>
               <!--div class="picture2"></div-->
            </div>
      </div>
      <ul class="mainMenu">
         <a href="index.php">
            <li>Главная</li>
         </a>
         <!--li><a href="pages/page_2.html">Актуальность</a></li-->
         <a href="pages/page_2.html">
            <li>Развитие</li>
         </a>
         <a href="pages/page_3.html">
            <li>Влияние космоса на ИКТ</li>
         </a>
         <a href="pages/page_4.html">
            <li>
               Основные направления
         </a>
         <ul>
         <a href="pages/page_4_1.html"><li>ИКТ в исследованиях</li></a>
         <a href="pages/page_4_2.html"><li>Система жизнеобеспечения</li></a>
         <a href="pages/page_4_3.html"><li>Спутниковая связь</li></a>
         </ul>
         </li>
         <a href="pages/page_5.html">
            <li>
               Космические аппараты
         </a>
         <ul>
         <a href="pages/page_5_1.html"><li>Проблемы</li></a>
         <a href="pages/page_5_2.html"><li>Типы</li></a>
         <a href="pages/page_5_3.html"><li>Конструирование</li></a>
         </ul>
         </li>
         <a href="pages/page_6.html">
            <li>Интересные открытия
         </a>
         </li>
         <a href="pages/page_7.html">
            <li>Проекты будущего
         </a>
         </li>
         <a href="pages/test.html">
            <li>Тестирование</li>
         </a>
      </ul>
      <br>
      <br>
      <!--блок с кнопками поделиться-->
      <div class="buttu" style="z-index: 111 !important"></div>
      <div class="fut" style="z-index: 444 !important">
         <div class="fut2">
            <a href="https://plus.google.com/share?url=URL"><img src="images/googlePlus.png" class="to" alt="Поделиться в google plus" style="width: 20px"></a>
            <a href="https://vk.com/share.php?url=https://vk.com/&title=Сайт 'Информационные технологии в космосе'&description=Сайт 'Информационные технологии в космосе'&image=https://www.multibille.fr/b/wp-content/uploads/2018/07/Robert_McCall_1974_Apollo-Soyuz.jpg&noparse=false"><img src="images/vk.png" class="to" alt="Поделиться ВКонтакте"></a>
            <a href="https://twitter.com/intent/tweet?text=Сайт 'Информационные технологии в космосе'E&url=URL&via=TWITTER-HANDLE"><img src="images/twit.png" class="to" alt="Поделиться в twitter" style="width: 30px"></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=URL"><img src="images/facebook.png" class="to"s alt="Поделиться facebook"></a>
            <a href="https://pinterest.com/pin/create/button/?url=YOUR-URL&description=Сайт 'Информационные технологии в космосе'&media=https://www.multibille.fr/b/wp-content/uploads/2018/07/Robert_McCall_1974_Apollo-Soyuz.jpg"><img src="images/pint.png" class="to" alt="поделиться а Pinterest" style="width: 20px"></a>
         </div>
      </div>
   </div>
   <!-- Не трогать -->
   <!-- Не трогать-->
   <!-- конец бокового меню-->
   <!--блок для авторизации/регистрации-->
   <div style="height: 130px"></div>
   <div class="stat">
      <!--Попап-->
      <div class="tooltip">
         <span class="tooltip-text"></span>
         <button class="button close-button" type="button"><span>Закрыть</span></button>
      </div>
      <!--Конец попапа и начало текста сайта-->
      <!--article для настрок текста-->
      <article class="longread">
         <div class="maintext">
            <p>
               <!--span class="mainletter">S</span-->
               <!--Образец применения попапа-->
            <p>
               <!--button type="button" class="tooltip-button" data-tooltip-text="объяснение">слово</button-->  
            <h1 style="font-size: 50px">Информационные технологии в космосе</h1>
            <!--img src="../test/images/space.png" alt="space" id="myImg" width="300" height="200">
               <div id="myModal" class="modal">
                   <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                   <img class="modal-content" id="img01" >
                   <div id="caption"></div>
               </div-->
            <div class="podR rr">
               <img src="../images/main/mainPhoto.jpg" class="pro myImg" alt="Солнечный парус">
               <div class="modal myModal">
                  <span class="close" onclick="document.querySelector('.myModal').style.display='none'">&times;</span>
                  <img class="modal-content img01">
                  <div class="caption"></div>
               </div>
               <div class='tPod'>Солнечный парус</div>
            </div>
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ИКТ играют уникальную роль в развитии гуманитарного пространства, потому что эта инфраструктурная технология позволяет эффективнее использовать другие технологии и возможности. Это означает, что применение ИКТ должно рассматриваться системно, но не по частям. ИКТ активно используются в космической отрасли, обеспечивая безопасность, эффективность и производительность, а также снижая стоимость работ и продукции. <br><br> <!--h1> Актуальность темы</h1-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В жизни современного общества технологии занимают значительное
            место. Важность технологического компонента современной цивилизации
            состоит в том, что именно он определяет во многом устойчивое развитие
            общества. Практически все процессы в обществе, так или иначе, происходят
            в сопровождении технологии. Ее влияние на социальные процессы приводит
            к существенным трансформациям последних. Так, стремительное развитие
            информационно-коммуникационных технологий служит ключевым
            фактором, определяющим ускоряющийся процесс информационной
            глобализации, которая становится характерным явлением настоящего
            времени. 
            <br>
            <br>
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Космические технологии в основном являются технологиями двойного назначения. Есть много примеров того, как они находили применение в гражданском секторе и переводили целые отрасли экономики на новые технологические рельсы.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Информационное общество есть объективное условие современного
            существования человека. Социальный контекст бытия современного
            человека создается его жизнедеятельностью, опосредованной применением
            современных технологий. Их роль в жизни как отдельного человека, так и
            общества в целом отмечена расширением спектра опосредования. Тотальное
            проникновение технического во все без исключения сферы жизни общества
            инициирует трансформацию устоявшихся социальных отношений, что
            предполагает и трансформацию самого типа социальности. Однако связь
            технического и социального носит не односторонний характер:
            существующий тип социальности также оказывает непосредственное
            воздействие на бытие технического. Это выражается в том, что общество
            задает социально приемлемые рамки функционирования технологий.
            Взаимосвязь технического и социального создает сложную, многоплановую
            проблему их соотношения. 
            </p>
         </div>
         
      </article>
      <div class="cont">
         <div class="lines">
            <div class="phph"></div>
         </div>
      </div>
      
   
      <!--Система комментариев-->
      <form action="index.php" method="post">
            <p style="margin: 0px 0px 60px 100px; font-size: 1.5em"> Вы можете оставить свой комментарий </p>
         <p>
            <label for="login" style="margin-left: 100px; font-size: 1.4em">Введите Ваше имя:</label><br> 
            <input type="login" name="login" class="nme" id="login" required>
            </p>
         <p>
            <label for="text" style="margin: 60px 100px; font-size: 1.4rem;">Ваш комментарий: </label><br>
            <textarea name="text" id="text" class="text2" required></textarea>	
         </p>
         <button type="submit" class="MyButton" id="MyButton">Отправить</button> <br><br>
         <?php if(!isset($_SESSION['logged_user'])): ?>
         <?php endif; ?>
         <?php if(isset($_SESSION['logged_user'])): ?>
         <script>
            var txt = "";
            if (document.getElementById("text").validity.rangeUnderflow) {
            	//document.getElementById("MyButton").disabled = true; 
            	txt="1234"
            }
         </script>
         <?php endif; ?>
      </form>
      <!--Вывод комментариев-->
      <div class="layer">
         <?php if(!empty($messages)): ?>
         <?php foreach($messages as $message): ?>
         <?php $message = get_format_message($message);?>
         <div class="messages">
            <p> <span class="user" style=""><?=$message[0]?></span> <span style="color: #cdcdcd; font-size: 0.93em"><?=$message[2]?></span></p>
            <div class="text"><?=nl2br($message[1])?></div>
         </div>
         <?php endforeach; ?>
         <?php endif; ?>
      </div>
      </label>
      <br>
      <br>
      <br>
      <br>
      <br>

      
      <div class="mainNavDiv"><!--Главный контейнер-->
         <div class="leftNavDiv"> <!--Левый контейнер-->
            <a href="../pages/test.html" class="navBut"><img src="../images/main/navBack.png" alt=""><!--кнопка назад-->
            <a href="../pages/test.html" class="navText"><div> Перейти к тесту <br>  <br><br> <span>По информации сайта</span>  </div></a><!--текст-->
               <a href="../pages/test.html" class="biB"><div style="background-image: url('../images/test/test_9.jpg');"></div></a><!--картинка--> 
         </div><!--конец левого контейнера-->

         <div style="width: 20%; height: 100%; text-align: center;">
            <button class="butNav"></button>
         </div>

         <div class="rightNavDiv"><!--правый контейнер-->            
            <a href="../pages/page_2.html" class="biN"><div style="background-image: url('../images/page_2/forth.jpg');"></div></a><!--картинка-->
            <a href="../pages/page_2.html" class="navText"><div>Перейти на следущую <br> страницу <br><br><span>Развитие</span></div></a><!--текст-->
            <a href="../pages/page_2.html" class="navBut"><img src="../images/main/navNext.png"></a><!--кнопка вперед-->
         </div><!--конец правого контейнера-->
      
      </div><!---->
      <ul class="nav">
            <a href="../index.php"><li style="border-left: 0px;">Главная</li></a>
            <a href="../pages/page_2.html"><li>Развитие</li></a>
            <a href="../pages/page_3.html"><li>Влияние</li></a>
            <li><a href="../pages/page_4.html">Направления </a>
               <ul>
                  <a href="../pages/page_4_1.html"><li style="border-top:3px solid rgba(218, 218, 218, 0.658);">ИКТ в исследованиях</li></a>
                  <a href="../pages/page_4_2.html"><li>Система жизнеобеспечения</li></a>
                  <a href="../pages/page_4_3.html"><li>Спутниковая связь</li></a>
               </ul>
            </li>
            <li><a href="../pages/page_5.html">Спутники</a>
               <ul>
                  <a href="../pages/page_5_1.html"><li style="border-top:3px solid rgba(218, 218, 218, 0.658);">Проблемы</li></a>
                  <a href="../pages/page_5_2.html"><li>Типы</li></a>
                  <a href="../pages/page_5_3.html"><li>Конструирование</li></a>
               </ul>
            </li>
         
            <a href="../pages/page_6.html"><li>Открытия</li></a>
            <a href="../pages/page_7.html"><li>Проекты</li></a>
            <a href="../pages/test.html"><li style='border-right: none'>Тест</li></a>
      </ul>
   </div>
  

   <div class="footer"></div>
   <footer>
      <a href="http://na-lenskoy.ru/nauchno-tekhnicheskij-otdel/ot-stranichki-k-web-sajtu" target="_blank">
         <div id="footer-left"></div>
      </a>
      <div id="footer-right">
         <p>&copy; 2021 г. Автор сайта Карпенко Дмитрий.<br> Руководитель проекта: Петриченко В.А.</p>
      </div>
   </footer>
   <script type="text/javascript" src="js/script.js"></script>
   <script type="text/javascript" src="js/photo.js"></script>
</body>