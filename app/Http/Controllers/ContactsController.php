<?php

namespace App\Http\Controllers;

use App\Http\Response;

class ContactsController
{
    public function index()
    {
        return new Response('contacts');
    }
}