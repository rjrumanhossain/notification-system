<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('welcome');
    }
}
