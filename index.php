<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="formulaire.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<form method="post" action="traitement.php">
        <ul>
            <li>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" />
            </li>
            <li>
                <label for="mail">E-mail :</label>
                <input type="email" id="mail" name="user_mail" />
            </li>
            <li>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="user_password">
            </li>
        </ul>

    <label for="marques-select">Choisir une marque :</label>
    <select name="marque" id="marque">
        <option value="Renault">Renault</option>
        <option value="Volkswagen">Volkswagen</option>
        <option value="Peugeot">Peugeot</option>
        <option value="Honda">Honda</option>
        <option value="Ford">Ford</option>
        <option value="Audi">Audi</option>
        <option value="BMW">BMW</option>
    </select>

    <label for="marques-select">Choisir un modele :</label>
    <select name="modele" id="modele">
        <optgroup label="Renault">
            <option value="Clio">Clio</option>
            <option value="Megane">Megane</option>
            <option value="Captur">Captur</option>
        </optgroup>
        <optgroup label="Volkswagen">
            <option value="Golf">Golf</option>
            <option value="Polo">Polo</option>
            <option value="Tiguan">Tiguan</option>
        </optgroup>
        <optgroup label="Peugeot">
            <option value="208">208</option>
            <option value="308">308</option>
            <option value="3008">3008</option>
        </optgroup>
        <optgroup label="Honda">
            <option value="Civic">Civic</option>
            <option value="Accord">Accord</option>
            <option value="CR-V">CR-V</option>
        </optgroup>
        <optgroup label="Ford">
            <option value="Focus">Focus</option>
            <option value="Fiesta">Fiesta</option>
            <option value="Escape">Escape</option>
        </optgroup>
        <optgroup label="Audi">
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="Q5">Q5</option>
        </optgroup>
        <optgroup label="BMW">
            <option value="Series 3">Series 3</option>
            <option value="Series 5">Series 5</option>
            <option value="X3">X3</option>
        </optgroup>
    </select>

    <input type="submit" value="Envoyer">

    </form>

</body>
</html>
