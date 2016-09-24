<?php

namespace App\Http\Controllers;



use App\Gallery;
use App\Http\Requests;
use App\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ImagesController extends Controller
{

    private $galleries;
    /**
     * @var ImageGallery
     */
    private $images;


    public function __construct(Gallery $galleries, ImageGallery $images)
    {
        $this->galleries = $galleries;

        $this->images = $images;
    }


    public function index($id)
    {

        $gallery = $this->galleries->find($id);


        return view('admin.images.index',compact('gallery'));
    }

    public function create($id)
    {
        $galleries = $this->galleries->all();

        $gallery = $this->galleries->find($id);

        return view('admin.images.upload',compact('galleries','gallery'));
    }

    public function createAll()
    {
        $galleries = $this->galleries->all();

        return view('admin.images.upload',compact('galleries'));
    }

    public function upload(Request $request, Gallery $gallery, ImageGallery $imageGallery, $id)
    {

        $file = $request->file('file');

        $name = md5($file->getClientOriginalName());

        $pathGallery = $gallery->find($request->input('gallery_id'));

        $request->request->add(['name' => md5($file->getClientOriginalName())]);

        $request->request->add(['extension' => $file->getClientOriginalExtension()]);

        $imageGallery->create($request->all())->save();

        $request->file('file')->move("uploads/", $name.'.'.$file->getClientOriginalExtension());

        return redirect()->route('images.index',['id' => $id]);
    }

    public function destroy($idImage)
    {
        $gallery = $this->images->find($idImage);

        $galleryId = $gallery->gallery_id;

        $this->images->deleteImage($idImage);

        return redirect()->route('images.index',['id' => $galleryId]);

    }

    public function setCover($idImage)
    {
        $this->images->coverDefine($idImage);

        $image = $this->images->find($idImage);

        return redirect()->route('images.index',['id' => $image->gallery_id]);
    }




}
