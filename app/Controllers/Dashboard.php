<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller 
{
    public function index() {
        echo view('templates/header', ['title' => 'Dashboard']);
        echo view('dashboard');
        echo view('templates/footer');
    }
}