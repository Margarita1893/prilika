<?php

namespace App\Http\Controllers;


use App\Models\Vacancy;
use Illuminate\Http\Request;
//Controlador que retorna vistas  de vacante y welcome
class pageController extends Controller
{
    public function home()
    {
        return view('welcome');
    } 
    
    public function vacancy(Vacancy $vacancy)
    {
        return view('vacancy', compact('vacancy'));
    } 
   


}