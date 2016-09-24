<?php

namespace App;

use App\ImageGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class Gallery extends Model
{
    protected $fillable = [

        'name',
        'description',

    ];

    public function images()
    {
        return $this->hasMany(ImageGallery::class);
    }

    public function deleteGallery($id)
    {
         $images = DB::table('image_galleries')->where('gallery_id', $id)->get();

         foreach($images as $image)
         {
             File::delete(public_path('uploads/'.$image->name.'.'.$image->extension));
         }

        return $this->where('id', $id)->delete();

    }
}
