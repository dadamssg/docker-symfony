<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class FirstController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new JsonResponse(["number" => $number]);
    }
}