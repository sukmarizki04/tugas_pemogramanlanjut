<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me | Sukma</title>
    
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <h1>Abou me</h1>
    <h2><?php echo $name; ?>  </h2>
    <h2> {{ $name }}</h2>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $img }}" alt=" {{ $name }}" width= "100">

</body>
</html>