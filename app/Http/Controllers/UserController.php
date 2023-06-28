<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('http://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $apiData = $response->json();
        $users = $apiData['users'];

        $perPage = 10; // Número de itens por página

        $currentPage = Paginator::resolveCurrentPage();
        $pagedData = array_slice($users, ($currentPage - 1) * $perPage, $perPage);
        $users = new Paginator($pagedData, count($users), $currentPage);
        

    
        return view('users.index', compact('users'));
    }
}
