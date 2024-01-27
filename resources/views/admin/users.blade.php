<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body class="g-sidenav-show  bg-gray-100">
    @include("admin.dashbord")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include("admin.navbar")
        <div class="col-md-8 mx-auto m-5">
        <table class="table table-dark table-striped">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    @if ($item->usertype == "0")
                        <td><a href="{{ url('/delete', $item->id) }}">Delete</a></td>
                    @else
                        <td>Interdit</td>
                    @endif

                </tr>
            @endforeach
        </table>
        </div>
    </main>

@include("admin.adminscript")
</body>
</html>
