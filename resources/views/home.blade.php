<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
</head>
<body>
  {{-- @dump($trains) --}}
  @forelse ($trains as $train)
  <p>
      {{$train}}
  </p>

  @empty
<p>
    Non ci sono treni
</p>
  @endforelse
</body>
</html>
