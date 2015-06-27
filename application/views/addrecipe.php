
    <center><h2>Добавить рецепт</h2>
        <center><form action="addrecipe/addrecipe" method="post" enctype="multipart/form-data">
        <div>
            <div class="blok" style="margin-bottom: 0px;">
                <a class="inscriptions">Название</a><br>
                <input class="field_rec" type="text" maxlength="40" name="title" style='width: 550px;' placeholder='Введите название рецепта' >
            </div>
            <table style="text-align:center;">
            <tr>
            <td>
                <div id="news">
                  <div class="block_min">
                      <a class="inscriptions">Кухня</a><br>
                      <select name="kitchens" class='field_l' style="width: 235px;">
                      <?php foreach ($kitchens as $kitchen): ?>
                      <option value='<?php echo $kitchen['title']; ?>'><?php echo $kitchen['title']; ?></option>
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
                </tr></table>
            </div>   
            <div class="blok">
                <a class="inscriptions">Рецепт</a><br>
                <textarea class="field_rec" maxlength="16600" name="recipe" style='width: 550px;' placeholder='Введите рецепт приготовления'></textarea>
            </div>
            <input id="add_button" type="submit" value="Добавить рецепт" name="submit" action="" >
        </div>
        </form></center>
</center>
<script>
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