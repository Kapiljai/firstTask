<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <a href="{{ url('/') }}" class="btn btn-primary">Add More</a>
            </div>
        </div>
        <h1 class="mt-5 ">Favourite song list</h1>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Video</th>
                      </tr>
                    </thead>
                    <tbody>



                        @php
                            $i=0;
                        @endphp
                        @foreach ($data as $item)
                        @php
                            $i++;
                        @endphp
                        <tr>
                        <td>{{$i  }} </td>
                        <td> {{ $item->name}}</td>
                        <td> {{ $item->email}}</td>
                        <td><iframe width="560" height="315" src="
                            https://www.youtube.com/embed/{{
                            $item->video }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></tr>
                        </td>
                        @endforeach


                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>
