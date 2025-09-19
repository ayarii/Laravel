<!DOCTYPE html>
<html>
<head>
    <title>Conseil personnalisé</title>
</head>
<body>
<h1>Bienvenue sur la page de conseil</h1>
<p>Votre âge : {{ $age }}</p>
<p>Votre intérêt : {{ $interet }}</p>

@if($interet == 'developpement')
    <p>Conseil : Continuez à pratiquer le code tous les jours !</p>
@elseif($interet == 'design')
    <p>Conseil : Inspirez-vous des grandes interfaces modernes.</p>
@else
    <p>Conseil : Trouvez une passion et développez-la !</p>
@endif
</body>
</html>
