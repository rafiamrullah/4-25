<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Resource
     */
    public function index()
    {
        return view('contacts', [
            "title" => "Contacts"
        ]);
    }
}