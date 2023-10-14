<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {

        $emp= new Emp();
        $emp->id=2;
        $emp->name="Neha Guleria";
        $emp->gender="Male";

        print($emp->id."<br>");
        print($emp->name."<br>");
        print($emp->gender."<br>");
    }
}
