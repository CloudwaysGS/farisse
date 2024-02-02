<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
</head>
<body class="g-sidenav-show  bg-gray-100">
@include("admin.dashbord")
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include("admin.navbar")
    <div class="row col-md-5 mx-auto shadow-2xl">
        <div class="col-md-10 mx-auto">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ url('/update', $data->id)  }}" method="post" enctype="multipart/form-data" class="my-4">
                @csrf
                <div class="form-group">
                    <label for="Nomproduit" style="color: black;">Nom produit</label>
                    <input class="form-control" type="text" name="Nomproduit" value="{{$data->nom}}" placeholder="Nom produit" required>
                </div>
                <div class="form-group">
                    <label for="Prix" style="color: black;">Prix</label>
                    <input class="form-control" type="number" name="Prix" value="{{$data->prix}}" placeholder="Prix" required pattern="\d+(\.\d{2})?">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="categorie" value="{{$data->categorie}}" placeholder="categorie" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="Description" value="{{$data->description}}" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <img width="50px" height="50px" src="/repasimage/{{$data->image}}">
                </div>

                <div class="form-group">
                    <label for="Image" style="color: black;">Nouvelle image</label>
                    <input class="form-control" type="file" name="Image" value="{{$data->image}}" required>
                </div>
                <button class="btn btn-primary" type="submit" style="color: black">Enregistrer</button>
            </form>
        </div>
    </div>
</main>

@include("admin.adminscript")
</body>
</html>
