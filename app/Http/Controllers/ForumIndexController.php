<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ForumIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return Inertia::render('Forum/Index');
    }
}
