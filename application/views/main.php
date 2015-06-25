<html>
  <head>
    <!-- Иконка сайта -->
    <link href="<?php echo URL::base(); ?>public/image/system/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- Подключенные CSS стили -->
    <?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"  rel="stylesheet" type="text/css" >
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--  Шрифт иконки в меню  -->
    <?php endforeach; ?>

    <!-- Скрипты для подключения карусели картинок -->
    <?php foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/script/<?php echo $script; ?>.js"  type="text/javascript"></script>
    <?php endforeach; ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>World Kitchens</title>
  </head>
  <body>
  <div id="body"> 
    <div id="head">
      <div id="hat">
        <center><a href="<?php echo URL::base(); ?>index.php"><h1 title="Перейти на главную">World's Kitchens</h1></a></center>
      </div>
    </div>
    <div id='left_panel'>
      <div id="left_bord">
      <h2 style="margin-top:0px;">Меню</h2>
      </div>
    <?php
      // Проверяем, пусты ли пересменные логина и id пользователя
      if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
          ?>
          <div>
            <ul id="accordion" class="accordion">
            <li>
              <div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">

              </ul>
            </li>
            <li>
              <div class="link"><a href="#">Блюда</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Поиск</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Блюдо дня</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Новости</a></div>
            </li>
            </ul>
          </div>
          <div id='user'>
               <form method='post' action='testreg.php'>
                <table>
                  <tr>
                    <td colspan='2'><input type='text' class='verification' size='25' maxlength='25' placeholder='Логин' name='login'></td>
                  </tr>
                  <tr>
                    <td colspan='2'><input type='password' class='verification' size='25' maxlength='25' placeholder='Пароль' name='password'></td>
                  </tr>
                  <tr>
                    <td><input type='submit' name='submit' class='button' value='Вход'></td>
                    <td><a href='reg.php'><input type='button' class='button' value='Регистрация'></a></td>
                  </tr>              
                </table>
              </form>
            </div>
          </div> 
          <?php ;
      }
        else {
          // Если не пусты, то мы выводим ссылку ?>
          <div>
            <ul id="accordion" class="accordion">
            <li>
              <div class="link">Добавить<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu"><?php echo "
                <li><a href='<?php echo URL::base(); ?>add-news.php'>Новость</a></li>
                <li><a href='<?php echo URL::base(); ?>add-recipe.php'>Рецепт</a></li>
                <li><a href='<?php echo URL::base(); ?>php/add/add-kitchens.php'>Кухню</a></li>
                <li><a href='<?php echo URL::base(); ?>php/add/add-component.php'>Ингридиенты</a></li>
              </ul>";?>
            </li>
            <li>
              <div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
                <?php
                while($res = mysql_fetch_array($query)){
                  echo "<li><a href='".$link."kitchens.php?kitchens=".$res['title']."'>".$res['title']."</a></li>";
                }
                ?>
              </ul>
            </li>
            <li>
              <div class="link"><a href="#">Блюда</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Поиск</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Блюдо дня</a></div>
            </li>
            <li>
              <div class="link"><a href="#">Новости</a></div>
            </li>
            <li>
              <div class="link">Избранное<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
                <li><a href='".$link."add-news.php'>Хочу приготовить</a></li> 
                <li><a href='".$link."add-recipe.php'>Уже готовил</a></li>
                <li><a href='".$link."php/add/add-kitchens.php'>Мои рецепты</a></li>
              </ul>
            </li>
            </ul>
          </div>
          
          <?php 
                    echo 
          " <div id='user'><center>
              <a href='user.php' title='Редактировать информацию о себе''><h3>".$_SESSION['family']."&nbsp".$_SESSION['name']."</h3></a>
              <a href='exit.php' >(Выход)</a></center>
            </div></div>";} ?>



    <div id="main">
      <!--Содержимое -->
       <?php echo $content; ?>
      <!-- Подвал -->
      <center>
        <br><br>
        <div id="copyright">
          <strong>&copy 2015. Михайлов Олег. Все права защищены.</strong>
          <p>Копирование материалов и использование их в любой форме, в том 
          числе и в электронных СМИ, возможны только с письменного разрешения 
          администрации сайта. При этом ссылка на сайт обязательна.</p>
        </div>
        </center>
      </div>  
    </div>
    <script type="text/javascript">
      // Кнопка вверх
      $(function() {
      var Accordion = function(el, multiple) {
      this.el = el || {};
      this.multiple = multiple || false;
      var links = this.el.find('.link');
      links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
      }
      Accordion.prototype.dropdown = function(e) {
      var $el = e.data.el;
      $this = $(this),
      $next = $this.next();
      $next.slideToggle();
      $this.parent().toggleClass('open');
      if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
      };
      }
      var accordion = new Accordion($('#accordion'), false);
      });
      $(document).ready(function(){
        $('.owl-carousel').owlCarousel();
      });
      var carousel = $("#carousel").waterwheelCarousel({
        flankingItems: 3,
        movingToCenter: function ($item) {
          $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
        },
        movedToCenter: function ($item) {
          $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
        },
        movingFromCenter: function ($item) {
          $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
        },
        movedFromCenter: function ($item) {
          $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
        },
        clickedCenter: function ($item) {
          $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
        }
      });
    </script>
  </body>
</html>