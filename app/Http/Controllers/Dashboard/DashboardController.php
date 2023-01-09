<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Career;
use App\Models\Category;
use App\Models\City;
use App\Models\Clint;
use App\Models\ContactUs;
use App\Models\Country;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {




        return view('dashboard.home');

    }

}
