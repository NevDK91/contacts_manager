<section id="addContact">
<span class="action">Добавление контакта</span>
<form role="form" id="formAddContact">
   <div class="form-group">
      <label for="name">Имя</label>
      <input type="text" class="form-control" id="name" name="name" 
         placeholder="Введи имя">
   </div>

   <div class="form-group">
      <label for="surname">Фамилия</label>
      <input type="text" class="form-control" id="surname" name="surname"
         placeholder="Введи фамилию">
   </div>

   <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email"
         placeholder="Введи Email">
   </div>

   <div class="form-group">
      <label for="phone">Телефон</label>
      <input type="tel" class="form-control" id="phone" name="phone"
         placeholder="Введи номер телефона">
   </div>

   <div class="form-group">
      <label for="description">Описание</label>
      <input type="text" class="form-control" id="description" name="description"
         placeholder="Введи описание контакта">
   </div>
<!--
   <div class="form-group">
      <label for="inputfile">Изображение</label>
      <input type="file" id="inputfile">
      <p class="help-block">Добавь аватар</p>
   </div>
   <div class="checkbox">
      <label>
      <input type="checkbox"> Check me out
      </label>
   </div>
   -->
   <button type="submit" class="btn btn-default">Добавить контакт</button>
</form>

</section>