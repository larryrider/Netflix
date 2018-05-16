<?php

namespace App;
use App\Serie;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{

    public static function create($s,$season,$title,$desc) {
        $c = new Chapter();
        $c->title = $title;
        $c->description = $desc;
        $c->season = $season;

        $c->serie()->associate($s);
        $c->save();
    }
    public static function deleteChapters($id,$season){
        $chapters = Chapter::where('season',$season)->where('serie_id',$id)->get();

        foreach($chapters as $c){
            $c->delete();
        }
    }

    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }
}
