
      <img src="image/white.jpg" id="white" class="transparency">
      <img src="image/name.png" id="name" class="no_transparency" >
      <img src="image/lenta_registration.png" id="lenta" /> 
      <div id="registration" >
      <br>
      <center><table>
        <form action="<?php echo URL::base(); ?>registration" method="post" enctype="multipart/form-data">
        <tr>
          <td class="inscriptions">Логин:</td>
          <td> <input class="field" type="text" size="30" maxlength="32" name="username">
          <?php if (isset($errors)){echo Arr::get($errors, 'username');}?>
          </td>
        </tr>
        <tr>
          <td class="inscriptions">Пароль:</td>
          <td><input class="field" type="password" size="30" maxlength="16" name="password" ></td>
        </tr>
        <tr>
          <td class="inscriptions">Подтверждение пароля:</td>
          <td><input class="field" type="password" size="30" maxlength="16" name="password_confirm"><?php if (isset($errors)){echo Arr::get($errors, 'password');} ?><?php if (isset($errors)){echo Arr::get($errors, 'password_confirm');} ?></td>
        </tr>
        <tr>
          <td class="inscriptions">Имя:</td>
          <td><input class="field" type="text" size="30" maxlength="20" name="name"><?php if (isset($errors)){echo Arr::get($errors, 'name');}?></td>
        </tr>
        <tr>
          <td class="inscriptions">Фамилия:</td>
          <td><input class="field" type="text" size="30" maxlength="30" name="family"><?php if (isset($errors)){echo Arr::get($errors, 'family');}?></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3" align="right"><input class="button" type="submit" value="Зарегистроваться" name="submit" ></td>
        </tr>
        <br>
        </form>
      </table></center>
      </div>

