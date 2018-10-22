<?php
namespace Ketanninja1993\YTdownloader\Handlers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceHandler extends Controller{
    public function index(){
        return view('YTdownloader::index');
    }

    public function getLinks(Request $request){
        $url = $request->url;
        $url = parse_url($url);
        $id = !empty($url) ? explode('=',$url['query'])[1] : '';
        $data = file_get_contents('http://www.youtube.com/get_video_info?video_id='.$id);
        parse_str($data,$file);
        $title = $file['title'];
        $exploded = explode(',',$file['url_encoded_fmt_stream_map']);
        $data = '';
        foreach($exploded as $e){
            parse_str($e);
            $type = explode('/',explode(';',$type)[0])[1];
            $data .= '<a href="'.$url.'&title='.urlencode($title).'.'.$type.'">Download in '.$type.'</a><br/>';
        }
        return view('YTdownloader::index',compact('data'));
    }
}