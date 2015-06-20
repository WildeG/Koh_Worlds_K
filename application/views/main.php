<html>
  <head>
    <link href="<?php echo URL::base();?>image/system/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
    <?php endforeach; ?>
    <?php foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/script/<?php echo $script; ?>.js" type="text/javascript"></script>
    <?php endforeach; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <div id="main">
      <!- Шапка сайта ->
      <div id="hat">       
        <center><a href='index.php'><img src="image/name.png" id="name" title="Перейти на главную"></a></center>
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
                      <ul> </ul> 
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
                    </li></center> 
                  </ul>
                  <ul class='menu'><center>
                    <li><input type='button' id='button_menu' value='Кухни'>
                      <ul>
      
      <!-Содержимое ->

      
      <!- Подвал ->

      <center><br><br><div id="copyright">
      <strong>&copy 2015. Михайлов Олег. Все права защищены.</strong>
      <p>Копирование материалов и использование их в любой форме, в том 
      числе и в электронных СМИ, возможны только с письменного разрешения 
      администрации сайта. При этом ссылка на сайт обязательна.</p>
      </div></center>  
    </div>
  </body>
</html>
