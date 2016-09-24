<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ImageGallery extends Model
{
    protected $fillable = [
        'gallery_id',
        'name',
        'title',
        'description',
        'extension',
        'cover'
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function getCovers()
    {
        return $this->where('cover',  1)->get();
    }

    public function coverDefine($id)
    {
        $idG = $this->find($id);

        DB::table('image_galleries')->where('gallery_id', $idG->gallery_id)->update(['cover' => 0]);

        return $this->where('id', $id)->update(['cover' => 1]);

    }

    public function deleteImage($id)
    {
        $image = $this->find($id);


            File::delete(public_path('uploads/'.$image->name.'.'.$image->extension));


        return $this->where('id', $id)->delete();

    }






}
