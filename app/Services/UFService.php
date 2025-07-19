<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UFService
{
    public function obtenerUF()
    {
        $response = Http::get('https://mindicador.cl/api/uf');

        if ($response->successful()) {
            return $response->json()['serie'][0]['valor'];
        }

        return null;
    }
}
