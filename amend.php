
<?php
if(isset($_GET['nome_usuario'])){
    echo '<h2>Olá, ' . $_GET['nome_usuario'] . '<h2>';
}
?>
<form>

<input type="checkbox" name="contatos[]" id="joao" value="João">

<label for="joao"> João </label>

<input type="checkbox" name="contatos[]" id="ana" value="Ana">

<label for="ana"> Ana </label>

<button type="submit">Enviar</button>

</form>
