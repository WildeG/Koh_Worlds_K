<div>
<center>
<div id='news'>
          <table id='table_recipe'>
          <tr>
          <td colspan='2' align='center'><h2><?php echo $recipes[0]['title']; ?></h2></td>
          </tr>
          <tr>
          <td colspan='2'><center><img class='image_recipe' src="<?php echo $recipes[0]['image']; ?>"></center><td>
          </tr>
          <tr>
         <td colspan='2' class='inscriptions'><h3>Ингридиенты</h3></td>
         </tr>
                  <?php
          $i=0; 
          while (isset($comps[$i])){
          echo $comps[$i]['component'].' '.$comps[$i]['quantity'].'</br>';
          $i++;}?>
          <tr>
          <td colspan='2' class='inscriptions'><h3>Рецепт</h3></td>
          </tr>
          <tr>
          <td colspan='2'><?php echo $recipes[0]['recipe'];?></td>
          </tr>
          </table>
          <center><script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
          <div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'></div>
          Мне нравиться
          Мне не нравится
          <li><input type='button' value='Метка'>
            <ul> 
              <li>Хочу приготовить</li> 
              <li>Приготовил</li> 
            </ul> 
          </li></center>

</div>