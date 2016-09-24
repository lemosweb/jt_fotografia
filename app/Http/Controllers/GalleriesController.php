<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\ImageGallery;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GalleriesController extends Controller
{
    private $gallery;

    public function __construct(Gallery $gallery)
    {

        $this->gallery = $gallery;
    }

    public function index()
    {

        $galleries = $this->gallery->paginate(10);

        return view('admin.galleries.index',compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {

        $this->gallery->create($request->all());

        return redirect()->route('galleries.index');
    }

    public function edit($id)
    {
        $gallery = $this->gallery->find($id);

        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $this->gallery->find($id)->update($request->all());

        return redirect()->route('galleries.index');
    }


    public function destroy($id)
    {

        $this->gallery->deleteGallery($id);

        return redirect()->route('galleries.index');
    }
}
