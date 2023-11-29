<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DataMasterController extends Controller
{
    public function index() : Response {
        $clients = Client::latest()->paginate(10);

        return Inertia::render('Welcome', [
            'clients' => $clients, 
        ]);
    }
}
