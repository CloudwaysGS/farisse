<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Repas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id()){
            return redirect('redirects');
        }else
        $data = Repas::all();
        return view('accueil', compact("data"));
    }

    public function menu(){

        $data = Repas::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view('menu', compact("data", "count"));
    }

    public function redirects()
    {
        if (Auth::check()) {
            $data = Repas::all();
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.admin');
            } else {
                $user_id = Auth::id();
                $count = Cart::where('user_id', $user_id)->count();
                return view('accueil', compact("data", "count"));
            }
        } else {
            // L'utilisateur n'est pas authentifié, rediriger ou gérer cela en conséquence.
            return redirect('/login');
        }
    }


    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;

            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();
            $count = Cart::where('user_id', $user_id)->count();

            return response()->json([
                'success' => true,
                'message' => 'L\'article a été ajouté au panier avec succès.',
                'count' => $count,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'L\'utilisateur n\'est pas authentifié.',
            ], 401); // Utilisation du statut 401 Unauthorized
        }
    }

    public function showcart(Request $request, $id) {


        $count = Cart::where('user_id', $id)->count();

        if (Auth::id() == $id) {
            $data = Cart::where('user_id', $id)
                ->join('repas', 'carts.food_id', '=', 'repas.id')
                ->select('repas.*', 'carts.*') // Ajoutez les colonnes nécessaires à la sélection
                ->get();

            $data2 = Cart::select('*')->where('user_id', '=', $id)->get();

            //$totalPrice = $data->sum('prix');
            $totalPrice = 0;

            foreach ($data as $meal) {
                $totalPrice += $meal->prix * $meal->quantity; // Si la quantité est également prise en compte
                // Si la quantité n'est pas prise en compte, utilisez simplement $meal->prix
            }

            $livraison = 500;

            return view('showcart', compact('count', 'data', 'data2', 'totalPrice', 'livraison'));
        }else{
            return redirect()->back();
        }
    }


    public function remove(Request $request, $id){

        $data = Cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function orderconfirm(Request $request){

        if (isset($request->nomrepas) && is_array($request->nomrepas)) {
            foreach ($request->nomrepas as $key => $nomrepas) {

                $data = new Order();

                // Vérifiez si l'index existe avant d'accéder aux valeurs
                $data->nomrepas = isset($request->nomrepas[$key]) ? $request->nomrepas[$key] : '';
                $data->prix = isset($request->prix[$key]) ? $request->prix[$key] : '';
                $data->quantity = isset($request->quantity[$key]) ? $request->quantity[$key] : '';

                $data->nom = $request->nom;
                $data->adresse = $request->adresse;
                $data->phone = $request->phone;

                $data->save();
            }
        }
        return redirect()->back();
    }

    public function incrementQuantity(Request $request, $id) {

        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        }

        return redirect()->back();
    }

    public function decrementQuantity($id) {

        $cartItem = Cart::find($id);

        if ($cartItem && $cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        }

        return redirect()->back();
    }




}
