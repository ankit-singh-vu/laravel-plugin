<?php

namespace Plugins\Blog\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello from Blog plugin!']);
    }
}
