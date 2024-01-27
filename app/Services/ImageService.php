<?php

// app/Services/ImageService.php

namespace App\Services;

use Imagine\Image\Box;
use Imagine\Gd\Imagine;

class ImageService
{
    public function resizeImage($path, $width, $height)
    {
        $imagine = new Imagine();
        $image = $imagine->open($path);

        // Redimensionner l'image à la taille spécifiée
        $image = $image->resize(new Box($width, $height));

        // Enregistrer l'image redimensionnée
        $image->save($path);
    }
}
