<?php
require '../default/header.html';
?>
<div class="container login border-red ">
    <img id="imageLogin" src="../default/logo_taskList.png">
    <h1 id="connexionTitre">Se connecter</h1>
    <form method="post" action="#">
        <input class="input-login" type="text" name="pseudo" placeholder="Entrer votre pseudo" /><br/><br/>
        <input class="input-login" type="password" name="password" placeholder="Entrer votre mot de passe" /><br/><br/>
        <input class="submit-login" type="submit" name="login" value="Se connecter"/>
    </form>
</div>
<?php
require '../default/footer.html';
?>
