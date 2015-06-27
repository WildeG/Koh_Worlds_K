<div>
            <ul id="accordion" class="accordion">
            <li>
              <div class="link">Добавить<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
                <li><a href='<?php echo URL::base(); ?>news'>Новость</a></li>
                <li><a href='<?php echo URL::base(); ?>recipe'>Рецепт</a></li>
                <li><a href='<?php echo URL::base(); ?>php/add/add-kitchens'>Кухню</a></li>
                <li><a href='<?php echo URL::base(); ?>php/add/add-component'>Ингридиенты</a></li>
              </ul>
            </li>
            <li>
              <div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
              <?php foreach ($kitchens as $kitchen): ?>
              <li><a href="<?php echo URL::base(); ?>kitchens=<?php echo $kitchen['title']; ?>"><?php echo $kitchen['title']; ?></a></li>
              <?php endforeach; ?>
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
                <li><a href='<?php echo URL::base(); ?>wantprep'>Хочу приготовить</a></li> 
                <li><a href='<?php echo URL::base(); ?>doneprep'>Уже готовил</a></li>
                <li><a href='<?php echo URL::base(); ?>user/myreceipts'>Мои рецепты</a></li>
              </ul>
            </li>
            </ul>
          </div>
<div id='user'><center>
              
							<a href='user' title='Редактировать информацию о себе'><?php echo "Вы зашли как ".$_SESSION['family']." ".$_SESSION['name']."." ?><h3></h3></a>
							<a href='logout' >(Выход)</a></center>
						</div></div>