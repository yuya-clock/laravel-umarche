<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1()
    {
        $goku_dialogue = 'クリリンのことかー！！';
        return view('tests.component-test1', compact('goku_dialogue'));
    }

    public function showComponent2()
    {
        return view('tests.component-test2');
    }
}
