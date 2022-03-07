<?php

namespace App\Controllers;

class DemoController extends BaseController
{
    private string $title;

    public function __construct()
    {
        $this->title = "Demo Controller";
    }

    public function index()
    {
        return view('demo', [
            'title' => $this->title
        ]);
    }
}