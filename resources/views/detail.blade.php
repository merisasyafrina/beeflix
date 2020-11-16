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
        <div class="card p-3 mb-3 container h-100 bg-dark text-white" style="max-width: 540px;">
            <div class="row no-gutters h-100 align-items-center">
                
                <div class="col-md-4">
                    <img src="{{asset($movies->photo)}}" class="card-img" alt="...">
                </div>
                
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$movies->title}}</h5>
                        <p class="card-text">Rating: {{$movies->rating}}/5</p>
                        <p class="card-text">{{$movies->description}}</p>
                        <p class="card-text">Category: <a class="text-danger" href="{{route('category',$movies->genre->id)}}">{{$movies->genre->name}}</a>
                        </p>
                    </div>
                </div>

                <div class="row no-gutters h-100 align-items-center p-3">
                    <!-- episode -->
                    <h5 class="card-title text-white">EPISODE</h5>

                    <table class="table text-white">
                        <thead>
                            <tr>
                            <th scope="col">episode</th>
                            <th scope="col">title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($episodes as $episode)
                            <tr>
                            <th scope="row">{{$episode->episode}}</th>
                            <td>{{$episode->title}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="">
                        {{$episodes->links()}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>