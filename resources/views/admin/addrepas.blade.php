<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<style>
    body {
        background-color: #f2f2f2; /* Couleur de fond que vous souhaitez */
    }

    .col-md-10 {
        width: 80%;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3), 0 1px 3px rgba(0, 0, 0, 0.08);
    }
</style>
<body class="g-sidenav-show  bg-gray-100">

@include("admin.dashbord")
<main class="main-content position-relative max-height-vh-120 h-100 border-radius-lg ">
    @include("admin.navbar")
    <div class="row col-md-5 mx-auto mt-5">
        <div class="col-md-10 mx-auto shadow-xl">
            @include('sweetalert::alert')
            <form action="{{ '/uploadfood' }}" method="post" enctype="multipart/form-data" class="my-4">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="Nomproduit" placeholder="Nom produit"  >
                    @error('Nomproduit')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="Prix" placeholder="Prix"  pattern="\d+(\.\d{2})?">
                    @error('Prix')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Image" style="color: black;">Image</label>
                    <input class="form-control" type="file" name="Image" placeholder="image">
                    @error('Image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select class="form-control" name="categorie" id="categorie" style="color: black;">
                        <option value="" disabled selected>Choisissez une catégorie</option>
                        <option value="petit-dejeuner">Petit-déjeuner</option>
                        <option value="dejeuner">Déjeuner</option>
                        <option value="diner">Dîner</option>
                        <option value="diner">Fast-foods</option>
                        <option value="diner">Boissons</option>
                        <option value="diner">Glaces</option>
                    </select>
                    @error('categorie')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="Description" placeholder="Description" >
                    @error('Description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit" style="color: black">Enregistrer</button>
            </form>
        </div>
    </div>
</main>

@include("admin.adminscript")
</body>
</html>
