<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display Categories page.
     * 
     * @return Renderable
     */
    public function index()
    {
        $this->data['users'] = User::all();
        return view('admin.users.index', $this->data);
    }
}