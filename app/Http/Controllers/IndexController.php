<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render(
            'Index/Index',
            [
                'message' => 'Hello from the controller!',
                'myName' => 'Andi E.',
                
            ]
        );
    }

    public function show()
    {
        return Inertia::render('Index/Show');
    }
}
