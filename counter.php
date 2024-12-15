<?php
session_start() ;
// Якщо на сайт тільки зайшли, обнулюємо лічильник.
if (!isset($_SESSION['count']))
$_SESSION['count'] = 0;
// Збільшуємо лічильник у сесії.
$_SESSION['count'] += 1;
?>
<h2>Лічильник</h2>
У поточній сесії роботи з браузером Ви відкрили цю сторінку
<?php echo $_SESSION['count']?> раз(a).<br>
<a href="<?php echo $_SERVER['PHP_SELF']?>" target="_blank">відкрити дочірнє вікно браузера</а>.