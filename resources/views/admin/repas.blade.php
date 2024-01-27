<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body class="g-sidenav-show  bg-gray-100">

@include("admin.dashbord")
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include("admin.navbar")
    <div class="row col-md-10 mx-auto shadow-2xl m-5">
        <button type="submit" class="form-control" style="color: white; margin-left: 80%; background-color: #7f007f; width: 19%"><a href="{{url('/addrepas')}}">Ajouter</a></button>

        <table class="table table-striped text-center">
            <tr>
                <th>Nom repas</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->categorie}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->image}}</td>
                    <td>
                        <a href="{{ url('/deleteRepas', $item->id) }}">delete</a>
                        <a href="{{ url('/editRepas', $item->id) }}">edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</main>

@include("admin.adminscript")
</body>
</html>
