
<html>
  <head>
    <link href="<?php echo URL::base(); ?>public/image/system/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"  rel="stylesheet" type="text/css" >
    <?php endforeach; ?>
    <?php foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/script/<?php echo $script; ?>.js"  type="text/javascript"></script>
    <?php endforeach; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>World Kitchens</title>
  </head>
  <body>
    <div id="main">
      <!-- Шапка сайта -->
      <div id="hat">
<!--        <a href="index.php">
        <svg>
        <defs>
          <path id="textpath" fill="none" stroke="#000000" d="M0.057,0.024c0,0,10.99,51.603,102.248,51.603c91.259,0,136.172,53.992,136.172,53.992"/>
        </defs>
        <use xlink:href="#textpath"/>
          <text x="10" y="100">
            <textPath xlink:href="#textpath" font-family="Pacifico">
              World's Kitchens
            </textPath>
          </text>
        </svg>
        </a> -->
        <center><a href="main"><h1 title="Перейти на главную">World's Kitchens</h1></a></center>
      </div>
            <div id='button_panel'>
              <div class='owl-carousel'>
                  <ul class='menu'><center>
                    <li><input type='button' id='button_menu' value='Добавить'>
                      <ul> 
                        <li><a href='<?php echo URL::base(); ?>add-news.php'>Новость</a></li> 
                        <li><a href='<?php echo URL::base(); ?>add-recipe.php'>Рецепт</a></li> 
                        <li><a href='<?php echo URL::base(); ?>php/add/add-kitchens.php'>Кухню</a></li> 
                        <li><a href='<?php echo URL::base(); ?>php/add/add-component.php'>Ингридиенты</a></li> 
                      </ul> 
                    </li></center> 
                  </ul>
                  <ul class='menu'><center>
                    <li><input type='button' id='button_menu' value='Кухни'>
                      <ul></ul> 
                  </li></center> 
                </ul>
                <input type='button' id='button_menu' value='Блюда' class='no_transparency'>
                <input type='button' id='button_menu' value='Поиск' class='no_transparency'>
                <input type='button' id='button_menu' value='Блюдо дня' class='no_transparency'>
                <input type='button' id='button_menu' value='Новости' class='no_transparency'>
                  <ul class='menu'><center>
                    <li><input type='button' id='button_menu' value='Избранное'>
                      <ul> 
                        <li><a href='<?php echo URL::base(); ?>add-news.php'>Хочу приготовить</a></li> 
                        <li><a href='<?php echo URL::base(); ?>add-recipe.php'>Уже готовил</a></li> 
                        <li><a href='<?php echo URL::base(); ?>php/add/add-kitchens.php'>Мои рецепты</a></li> 
                      </ul> 
                    </li></center> 
                  </ul>
              </div>
            </div>
      <!--Содержимое -->
       <?php echo $content; ?>
      <!-- Подвал -->
      <center><br><br><div id="copyright">
      <strong>&copy 2015. Михайлов Олег. Все права защищены.</strong>
      <p>Копирование материалов и использование их в любой форме, в том 
      числе и в электронных СМИ, возможны только с письменного разрешения 
      администрации сайта. При этом ссылка на сайт обязательна.</p>
      </div></center>  
    </div>
    <script type="text/javascript">
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
      $('#prev').bind('click', function () {
        carousel.prev();
        return false
      });
      $('#next').bind('click', function () {
        carousel.next();
        return false;
      });
      $('#reload').bind('click', function () {
        newOptions = eval("(" + $('#newoptions').val() + ")");
        carousel.reload(newOptions);
        return false;
      });
    </script>
    <script src="<?php echo URL::base(); ?>public/script/owl.carousel.js"></script>
    <script src="<?php echo URL::base(); ?>public/script/owl.carousel.min.js"></script>
    <?php echo $login ?>
  </body>
</html>