<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('index', ['services' => $services]);
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('create', ['categories' => $categories]);
    }

    public function store()
    {
        $data = request()->all();

        $service = new Service;
        $service->name = $data['name'];
        $service->title = $data['title'];
        $service->description = $data['description'];
        $service->email = $data['email'];
        $service->price = $data['price'];
        $service->category_id = $data['category_id'];
        $service->save();
        return to_route('services.index');
    }

}
