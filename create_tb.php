<?php
if(isset($_POST['btn_create_tb'])){
    Table::CreateTab(trim($_POST['name_tb']));
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <legend>Создание анкеты</legend>
       <label>Введите название анкеты: </label>
       <input name="name_tb" type="text" placeholder="Text input">
        <button name="btn_create_tb" type="submit" class="btn">Создать</button>
</form>