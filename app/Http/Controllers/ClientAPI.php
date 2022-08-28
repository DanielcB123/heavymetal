<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientAPI extends Controller
{
    public function showClient() {   
        
        return Client::take('10')->get();     
    }
}
