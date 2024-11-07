<?php if (empty($_POST)) : ?>

    <form action="" method="POST">
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom" value=""/>
        <input type="submit" value="Valider"/>
    </form>

<?php
endif;
if (isset($_POST['prenom'])) :
    echo "Bonjour," . $_POST['prenom'];
endif;
