<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function dashboardadm() {
        $u = User::count();
        $p = product::count();
        $c = Category::count();
        return view('pages.dashboardadm', compact('u','p', 'c'));
    }
}
