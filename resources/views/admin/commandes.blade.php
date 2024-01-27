<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body class="g-sidenav-show  bg-gray-100">

@include("admin.dashbord")
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include("admin.navbar")

    <div class="row  mx-auto shadow-2xl m-5">
        <table class="table table-striped text-center">
            <tr>
                <th>Qté</th>
                <th>Repas</th>
                <th>Prix</th>
                <th>Client</th>
                <th>Adresse</th>
                <th>Phone</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach($data as $data)
                <tr>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->nomrepas}}</td>
                    <td>{{$data->prix}}</td>
                    <td>{{$data->nom}}</td>
                    <td>{{$data->adresse}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->quantity * $data->prix}}</td>
                    <td><a href="">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</main>

@include("admin.adminscript")
</body>
</html>
