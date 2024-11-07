<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <?php if (empty($_POST)) : ?>
        <form action="" method="POST" class="border p-4 shadow-sm">
            <div class="form-group">
                <label for="num1">Chiffre 1</label>
                <input type="number" id="num1" name="num1" class="form-control" placeholder="Votre premier numéro"
                       value=""/>
            </div>
            <div class="form-group">
                <label for="calcul">Choisissez l'opération</label>
                <select name="calcul" id="calcul" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                    <option value="%">%</option>
                </select>
            </div>
            <div class="form-group">
                <label for="num2">Chiffre 2</label>
                <input type="number" id="num2" name="num2" class="form-control" placeholder="Votre second numéro"
                       value=""/>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    <?php endif; ?>

    <?php if (isset($_POST['calcul'])) :
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['calcul'];
        $resultat = 0;

        switch ($operation) {
            case '+':
                $resultat = $num1 + $num2;
                break;
            case '-':
                $resultat = $num1 - $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $resultat = $num1 / $num2;
                } else {
                    $resultat = 'Erreur : Division par zéro';
                }
                break;
            case '*':
                $resultat = $num1 * $num2;
                break;
            case '%':
                if ($num2 != 0) {
                    $resultat = $num1 % $num2;
                } else {
                    $resultat = 'Erreur : Division par zéro';
                }
                break;
            default:
                $resultat = 'Opération non valide';
                break;
        }
        ?>
        <div class="alert alert-info mt-4">
            <strong>Résultat :</strong> <?= $resultat ?>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
