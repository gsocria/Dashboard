
<?php
include_once("./func/func.php");
if (isset($_POST['id'])) {
  $id = $_POST['id']; 

  deletar('cardapio', $id,'idcardapio');
}
?>

