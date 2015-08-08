<div id="registration" >
  <center>
    <h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">Регистрация<img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
    <form>
      <div class="l_block">
        <div style="text-align:right" class="ml_block">Логин:</div>
        <div><input class="r_field" type="text" maxlength="32" name="username"><?php if (isset($errors)){echo Arr::get($errors, 'username');}?></div>
      </div>
      <div class="l_block">
        <div style="text-align:right" class="ml_block">Пароль:</div>
        <div><input class="r_field" type="password" maxlength="16" name="password"></div>
      </div>
      <div class="l_block">
        <div style="text-align:right" class="ml_block">Подтверждение пароля:</div>
        <div><input class="r_field" type="password"  maxlength="16" name="password_confirm"><?php if (isset($errors)){echo Arr::get($errors, 'password');} ?><?php if (isset($errors)){echo Arr::get($errors, 'password_confirm');} ?></div>
      </div>
      <div class="l_block">
        <div style="text-align:right" class="ml_block">Имя:</div>
        <div><input class="r_field" type="text" maxlength="20" name="name"><?php if (isset($errors)){echo Arr::get($errors, 'name');}?></div>      
      </div>
      <div class="l_block">
        <div style="text-align:right" class="ml_block">Фамилия:</div>
        <div><input class="r_field" type="text" maxlength="30" name="family"><?php if (isset($errors)){echo Arr::get($errors, 'family');}?></div>      
      </div>
      <input class="r_button" type="submit" value="Зарегистроваться" name="submit">
    </form>
  </center>
</div>