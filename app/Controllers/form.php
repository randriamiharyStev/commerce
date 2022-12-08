<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([])) {
            return view('register', [
                'validation' => $this->validator,
            ]);
        }
        return view('Success');
    }
}