<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Person;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);
        return view('thank');
    }
}