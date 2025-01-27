<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactformulier Bericht</title>
</head>
<body>
<h1>Nieuw Contactformulier Bericht</h1>
<p><strong>Naam:</strong> {{ $name }}</p>
<p><strong>E-mail:</strong> {{ $email }}</p>
<p><strong>Telefoonnummer:</strong> {{ $phone }}</p>
<p><strong>Onderwerp:</strong> {{ $subject }}</p>
<p><strong>Bericht:</strong></p>
<p>{{ $message }}</p>
</body>
</html>
