<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laravel-primi-passi</title>
</head>
<body>
  
  <h1>Hello {{ $who }}!</h1>

  <nav>
    <ul>
      @forelse ($nav_links as $key => $uri)
        <li><a href="{{ $uri }}">{{ ucfirst($key) }}</a></li>

        @empty
          <p>Where are all the teachers??</p>
      @endforelse
    </ul>
  </nav>
</body>
</html>