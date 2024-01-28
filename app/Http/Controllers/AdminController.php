<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Repas;
use App\Models\Reservation;
use App\Models\User;
use App\Services\ImageService;
use App\Services\RepasValidationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{

    private $imageService;

    public function __construct(ImageService $imageService, RepasValidationService $repasValidationService)
    {
        $this->imageService = $imageService;
        $this->repasValidationService = $repasValidationService;
    }

    public function user(){
        $data = User::all();
        return view("admin.users", compact("data"));
    }

    public function voirReservation(){
        $usertype = Auth::user()->usertype;
        if ($usertype == '1'){
            $data = Reservation::all();
            return view("admin.adminreservation", compact("data"));
        }else{
            return redirect('login');
        }

    }

    public function repas()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1'){
            $data = Repas::all();
            return view("admin.repas", compact("data"));
        }else {
            // L'utilisateur n'est pas authentifié, rediriger ou gérer cela en conséquence.
            return redirect('/login');
        }
    }

    public function addrepas()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1'){
            $data = Repas::all();
            return view("admin.addrepas", compact("data"));
        }else {
            // L'utilisateur n'est pas authentifié, rediriger ou gérer cela en conséquence.
            return redirect('/login');
        }
    }

    public function upload(Request $request)
    {
        // Check if the request method is POST
        if ($request->isMethod('post')) {
            $usertype = Auth::user()->usertype;
            if ($usertype == '1') {
                $this->repasValidationService->validateUploadRequest($request);

                $data = new Repas();

                $image = $request->Image;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->Image->move('repasimage', $imagename);
                $data->image = $imagename;

                $this->imageService->resizeImage('repasimage/' . $imagename, 250, 168);

                $data->nom = $request->Nomproduit;
                $data->prix = $request->Prix;
                $data->categorie = $request->categorie;
                $data->description = $request->Description;
                $data->save();

                Alert::success('succès', 'Les données ont été enregistrées avec succès.');

                return redirect()->back();
            } else {
                dd("Vous n'etes pas admin");
            }
        } else {
            // Handle the case where the request method is not POST
            // You can redirect back with an error message or handle it as needed
            return redirect()->back()->with('error', 'Only POST requests are allowed for this route.');
        }
    }


    public function reservation(Request $request)
    {
        $data = new Reservation();

        $data->nom = $request->input('nom');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->invite = $request->input('invite');
        $data->heure = $request->input('heure');
        $data->date = $request->input('date');
        $data->message = $request->input('message');

        $data->save();

        Session::flash('success', 'Les données ont été enregistrées avec succès.');

        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = User::find($id);
            $data->delete();
            return redirect()->back();
        }else{
            return redirect('/login');

        }
    }

    public function editRepas($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = Repas::find($id);
            return view("admin.editRepas", compact('data'));
        }else{
            return redirect('/login');

        }
    }

    public function update(Request $request, $id)
    {

        $data = Repas::find($id);

        if ($request->hasFile('Image') && $request->file('Image')->isValid()) {
            $image = $request->file('Image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('repasimage', $imageName);

            // Utiliser le service pour redimensionner l'image
            $this->imageService->resizeImage('repasimage/' . $imageName, 166, 166);

            $data->image = $imageName;
        }

        $data->nom = $request->input('Nomproduit');
        $data->prix = $request->input('Prix');
        $data->categorie = $request->input('categorie');
        $data->description = $request->input('Description');
        $data->save();
        return redirect()->back();
    }

    public function deleteRepas($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = Repas::find($id);
            $data->delete();
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }

    public function commandes()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = Order::all();
            return view("admin.commandes", compact('data'));
        }else{
            return redirect('/login');
        }
    }



}
