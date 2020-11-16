<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BEEFLIX</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-dark">

    <!-- NavBar -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-danger" href="{{route('home')}}">BEEFLIX</a>
            <div class="btn-group btn-group-toggle float-right">
                <a href="{{url()->previous()}}" class="btn btn-danger btn-sm">Back</a>
                <a href="{{route('home')}}" class="btn btn-danger btn-sm">View All</a>
            </div>
        </div>
    </nav>

    <div class="p-3 mb-2 bg-dark">
        @foreach($genres as $genre)
        <div class="p-1 bg-dark text-white text-center">
            <h3 class="navbar-brand p-1 pl-3 text-danger">{{$genre->name}}</h3>
        </div>
        
        <div class="card-group p-3 mb-2 bg-dark text-white">
            @foreach($genre->movie as $movie)
            <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                <img src="{{$movie->photo}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <a href="{{route('detail',$movie->id)}}" class="btn btn-danger">View</a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    

</body>
</html>