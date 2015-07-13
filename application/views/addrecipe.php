    <center><h2 style="margin-top:0px;">Добавить рецепт</h2>
        <center><form action="<?php echo URL::base(); ?>add/addrecipe" method="post" enctype="multipart/form-data">
        <div>
            <div class="blok" style="margin-bottom: 0px;">
                <a class="inscriptions">Название</a><br>
                <input class="field_rec" type="text" maxlength="40" name="title" style='width: 550px;' placeholder='Введите название рецепта' >
            </div>
            <table style="text-align:center;">
            <tr>
            <td>
                
                  <div class="block_min">
                      <a class="inscriptions">Кухня</a><br>
                      <select name="kitchens" class='field_l' style="width: 235px;">
                      <?php foreach ($kitchens as $kitchen): ?>
                      <option value='<?php echo $kitchen['id']; ?>'><?php echo $kitchen['title']; ?></option>
                      <?php endforeach; ?>
                      </select><br>
                  </div>
                  </td><td>
                  <div class="block_min">
                    <a class="inscriptions">Изображение<sup>*</sup></a><br>
                    <input class="inscriptions_min" name="image" type="file" accept="image/jpeg,image/png,image/gif">
                    <br><a class='inscriptions_min'>Необязательное поле</a><br>
                  </div>
                  
              </div>
              <td>
             </tr>         
            </table>
            <div class="blok">
                <input id="add-component" class="plus" type="button" value="+" ><a class="inscriptions">Ингридиенты</a><input id="remove-component" class="plus" type="button" value="-" >
                <table style='text-align:center'>
                <tr>
                <td id="name_component">
                    <strong class='inscriptions_min'>Название ингридиента</strong><br>
                    <p><select name="parts0" class='field_l'>
                    <?php $comp = NULL ?>
                      <?php foreach ($components as $component): ?>
                      <?php $comp.="<option value=".$component['id'].">".$component['component']."</option>";?>
                       <?php endforeach; ?>
                       <?php echo $comp; ?>
                        </select></p>
                </td> 
                <td>
                <div id="count_component">
                    <strong class='inscriptions_min'>Количество</strong><br>
                    <p><input class='field_r' type='text' name='quantity0' placeholder='Введите количество'></p>
                </div>
                </div></td>
                </tr></table><br>Нет нужно ингридиента? Добавьте!<a id="go"> Нажмите сюда</a>
            </div>   
            <div class="blok">
                <a class="inscriptions">Рецепт</a><br>
                <textarea class="field_rec" maxlength="16600" name="recipe" style='width: 550px;' placeholder='Введите рецепт приготовления'></textarea>
            </div>
            <input id="add_button" type="submit" value="Добавить рецепт" name="submit" action="" >
        </div>
        </form></center>
</center>
<div id="modal_form">
    <span id="modal_close" class="plus">X</span>
    <center>
      <form action="<?php echo URL::base(); ?>add/addcomponent" method="POST" id="test_form">
  				<h2><input id="add-comp" class="plus" type="button" value="+"> Новый ингридиент <input id="remove-comp" class="plus" type="button" value="-"></h2>
            <table width="640px" style="text-align:center;">
              <tr>
                <td width="210"><strong class='inscriptions_min'>Название:</strong></td>
  				      <td width="215"><strong class='inscriptions_min'>Калории*:</strong></td>
                <td width="215"><strong class='inscriptions_min'>Цена*:</strong></td>
              </tr>
            </table>
            <div  style="max-height: 100px; overflow: auto;" >
            <table id="add_component"> 
                <tr>
                  <td><input class="field_r" type="text" id="name_comp" name="name_comp0" value="" style="width: 200px; text-indent: 5px;" placeholder="Введите название" title="Название ингридиента"></td>
                  <td>
                    <input class="field_r" type="text" id="calories" name="calories0" value="" style="width: 80px; text-indent: 5px;" placeholder="Кол-во" title="Введите количество калорий.Калории учитываються приблизительно на 100г продукта.">
                    <select class='field_l' style="width: 80px; text-indent: 5px;">
                      <option class='field_l' style="width: 80px; text-indent: 5px;">ККал</option>
                      <option class='field_l' style="width: 80px; text-indent: 5px;">Кал</option>
                    </select>
                  </td>
                  <td>
                    <input class="field_r" type="text" id="price" name="price0" value="" style="width: 80px; text-indent: 5px;" placeholder="Кол-во" title="Цена указываеться на 1 кг., 1л. или 1 упаковку. Пример: 1 кг. яблок, 1л. молока, 1 упаковка крабовых палочек.">
                    <select class='field_l' style="width: 100px; text-indent: 5px;">
                      <option>Рублей</option>
                      <option>Долларов</option>
                      <option>Евро</option>
                      <option>Гривен</option>
                    </select>
                  </td>
                </tr> 
            </table>
            </div>
            <table>
              <tr>
                <td colspan="3"><strong class='inscriptions_min'>* - Помечены не обязательные поля</strong></td>
              </tr>
            </table>
  				<input type="submit" id="add_button" value="Добавить">
  		</form>
    </center>
</div>
<div id="overlay"></div><!-- Подложка -->
<script>
// Отправка формы ajax 
$(function(){
  $('#test_form').submit(function(e){
    //отменяем стандартное действие при отправке формы
    e.preventDefault();
    //берем из формы метод передачи данных
    var m_method=$(this).attr('method');
    //получаем адрес скрипта на сервере, куда нужно отправить форму
    var m_action=$(this).attr('action');
    //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
    //то есть в стандартном формате передачи данных формы
    var m_data=$(this).serialize();
    $.ajax({
      type: m_method,
      url: m_action,
      data: m_data,
      success: function(result){
        $('#test_form').html(result);
      }
    });
  });
});


// Модальное окно
$(document).ready(function() { // вся магия после загрузки страницы
	$('a#go').click( function(event){ // ловим клик по ссылки с id="go"
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предъидущей анимации
				$('#modal_form') 
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
		});
	});
	/* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
	$('#modal_close, #overlay, #add_button').click( function(){ // ловим клик по крестику или подложке
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
	});
});


    var count = 1;
    $("#add-comp").click(function(){
        $("<tr><td><input class='field_r' type='text' id='name_comp' name='name_comp"+count+"' value='' style='width: 200px; text-indent: 5px;' placeholder='Введите название' title='Название ингридиента'></td><td><input class='field_r' type='text' id='calories' name='calories"+count+"' value='' style='width: 80px; text-indent: 5px;' placeholder='Кол-во' title='Введите количество калорий.Калории учитываються приблизительно на 100г продукта.'><select class='field_l' style='width: 80px; text-indent: 5px;'><option class='field_l' style='width: 80px; text-indent: 5px;'>ККал</option><option class='field_l' style='width: 80px; text-indent: 5px;'>Кал</option></select></td><td><input class='field_r' type='text' id='price' name='price"+count+"' value='' style='width: 80px; text-indent: 5px;' placeholder='Кол-во' title='Цена указываеться на 1 кг., 1л. или 1 упаковку. Пример: 1 кг. яблок, 1л. молока, 1 упаковка крабовых палочек.'><select class='field_l' style='width: 100px; text-indent: 5px;'><option>Рублей</option><option>Долларов</option><option>Евро</option><option>Гривен</option></select></td></tr>").appendTo("#add_component");
        count++;
    });
    $("#remove-comp").click(function(){
      $("#add_component tr:last-child").remove();
      count--;
    });

    var counter = 1;
    $("#add-component").click(function(){
        $("<p><select class='field_l' name='parts"+counter+"'><?php echo $comp; ?></select></p>").appendTo("#name_component");
        $("<p><input class='field_r' type='text' name='quantity"+counter+"' placeholder='Введите количество'></p>").appendTo("#count_component");
        counter++;
    });
    $("#remove-component").click(function(){
      $("#name_component p:last-child").remove();
      $("#count_component p:last-child").remove();
      counter--;
    }); </script>