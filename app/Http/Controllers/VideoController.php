<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests;



class VideoController extends Controller
{
    private $video;

    public function __construct(Video $video)
    {

        $this->video = $video;
    }

    public function index()
    {

        $videos = $this->video->paginate(3);

        return view('admin.videos.index',compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $link = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $request->input('link'));

        $request->request->add(['link' => $link]);

        $this->video->create($request->all());

        return redirect()->route('videos.index');
    }

    public function edit($id)
    {
        $video = $this->video->find($id);

        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $link = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $request->input('link'));

        $request->request->add(['link' => $link]);

        $this->video->find($id)->update($request->all());

        return redirect()->route('videos.index');
    }


    public function destroy($id)
    {

        $this->video->find($id)->delete();

        return redirect()->route('videos.index');
    }
}
