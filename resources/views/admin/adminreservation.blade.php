<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>

@include("admin.dashbord")
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include("admin.navbar")

    <div class="row  mx-auto shadow-2xl m-5">
        <table class="table table-striped text-center">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Invités</th>
                <th>Heure</th>
                <th>Date</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @foreach($data as $data)
                <tr>
                    <td>{{$data->nom}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->invite}}</td>
                    <td>{{$data->heure}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->message}}</td>
                    <td><a href="">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</main>

@include("admin.adminscript")
</body>
</html>
