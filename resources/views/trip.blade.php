<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>migration-seeder-Trip</title>
</head>
<body>
      <h1>Le destinazioni</h1>
      @foreach ($allTrips as $trip)
      <div class="travel">
            <h2>{{$trip->country}}</h2>
            <img src="{{$trip->img}}" alt="img-cover">
            <div>Destinazione:{{$trip->destination}}</div>
            <div>Mezzo:{{$trip->transfer}}</div>
            <div>Prezzo:{{$trip->price}}</div>
            <div>Durata:{{$trip->duration}}</div>
      </div>

      @endforeach

      <span>questo</span>
</body>
</html>