<?php
namespace App\Services;

class RepasValidationService
{
    public function validateUploadRequest($request)
    {
        $rules = [
            'Nomproduit' => 'required|string',
            'Prix' => 'required|numeric|gt:0',
            'categorie' => 'required|string',
            'Description' => 'required|string|max:200',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $messages = [
            'Nomproduit.required' => 'Le champ Nomproduit est requis.',
            'Prix.required' => 'Le champ Prix est requis.',
            'Prix.numeric' => 'Le champ Prix doit être un nombre.',
            'Prix.gt' => 'Le champ Prix doit être supérieur à zéro.',
            'categorie.required' => 'Le champ categorie est requis.',
            'Description.required' => 'Le champ Description est requis.',
            'Description.max' => 'Longueur maximale de 255 caractères.',
            'Image.required' => 'Le champ Image est requis.',
            'Image.image' => 'Le fichier doit être une image.',
            'Image.mimes' => 'Le fichier doit être de type :values.',
            'Image.max' => 'La taille de l\'image ne doit pas dépasser :max kilo-octets.',
        ];

        return $this->validate($request, $rules, $messages);

    }

    protected function validate($request, $rules, $messages)
    {
        return $request->validate($rules, $messages);
    }
}
