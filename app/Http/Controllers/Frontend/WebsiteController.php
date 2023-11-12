<?php
namespace App\Http\Controllers\Frontend;
use App\Models\Menu;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller {
    public function __invoke() {
        return view('frontend.home', ['title' => 'Home']);
    }
}