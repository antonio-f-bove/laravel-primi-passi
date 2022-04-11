<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laravel-primi-passi-teachers</title>
</head>
<body>

  @foreach ($teachers as $teacher)
    <p>Hello {{ $teacher }}</p>
  @endforeach

  <h2>a me Laravel me piace!</h2>
  
</body>
</html>