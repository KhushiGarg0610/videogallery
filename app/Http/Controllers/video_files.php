<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class video_files extends Controller
{
    public function index(){
        $data = video::all();
        return view('gallery')->with('data',$data);
    }
    public function post(Request $request){
       
        //validation
        $request->validate(
            [
                "movie_name"=>["required"],
                "year_of_release"=>["required"],
                "language"=>["required"],
                "thumbnail"=>["required"],
                "video"=>["required"]
            ]
            );
            $video  = new video;
            $video->movie_name = $request->movie_name;
           $video->year = $request->year_of_release;
           $video->lang = $request->language;
           
            
            


            $img_file = $request->thumbnail;
            $img_name = time().".".$img_file->getClientOriginalExtension(); 
           $path1 = $request->file('thumbnail')->move('images',$img_name);
           $video->nail = $path1;
            $video_file = $request->video;
            $video_name = time().".".$video_file->getClientOriginalExtension(); 
           $path2 = $request->file('video')->move('videos',$video_name);
            $video->video = $path2;
            $video->save();
    


        // $movie_name = $request->$movie_name;
        // $y
        // $
        // $thumbnail = $request->$thumbnail;
        // $video = $request->$video;
        // $thumbnail_name = time() . $thumbnail->getClientOriginalName();
        // $video_name =time() . $thumbnail->getClientOriginalName();
        // $thumbnail->move('images',$thumbnail_name);
        // $video->move('videos',$video_name);  
        // $post->thumbnail = 'images/'.$thumbnail_name;
        // $post->video = 'videos/'.$video_name;
        // // $data->video = $video;
        // $post->save();
    return view('welcome',['uploaded'=>'true']);
    }

}
