      <center>
      <table id="addnews">
      <caption><img src="/public/image/inscription/add-news.png" id="lenta" /></caption>
        <form action="addnews/addnews" method="post" enctype="multipart/form-data">
        <tr><td class="inscriptions">Заголовок</td></tr>
        <tr><td><input class="field" type="text" maxlength="40" name="title" ></td></tr>
        <tr class="inscriptions"><td>Содержание</td></tr>
        <tr><td><textarea class="field" maxlength="16600" name="text"></textarea></td></tr>       
        <tr><td class="inscriptions">Изображение*</td></tr>
        <tr><td><input class="button" name="image" type="file" accept="image/jpeg,image/png,image/gif"></td></tr>       
        <tr><td class="inscriptions">* - Помечены не обязательные поля</td></tr>
        <tr><td align="right"><input class="button" type="submit" value="Добавить новость" name="submit" ></td></tr>
        <br></form>