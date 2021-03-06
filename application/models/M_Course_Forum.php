<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Course_Forum extends Eloquent
{
    protected $table = 'course_forum';
    const CREATED_AT = 'cfr_timecreated';
    const UPDATED_AT = 'cfr_timemodified';
//    public $timestamps = false;
    protected $primaryKey = 'cfr_id';

    public function insert_forum($data)
    {
        $forum = new M_Course_Forum;
        $forum->cfr_desc = $data['cfr_desc'];
        $forum->usr_id = $data['usr_id'];
        $forum->lsn_id = $data['lsn_id'];
        $forum->save();

        return $forum->cfr_id;
    }

    public function update_forum($data)
    {
        $update = M_Course_Forum::where('cfr_id',$data['cfr_id'])->first();
        $update->cfr_desc = $data['cfr_desc'];
        return $update->save();
    }

    public function selectByUser($usr_id,$limit = NULL){
        if($limit != NULL){
            $data = M_Course_Forum::where('course_forum.usr_id',$usr_id)->orderBy('cfr_timecreated', 'desc')->limit($limit)->get();
        }
        else{
            $data = M_Course_Forum_Thread::where('course_forum.usr_id',$usr_id)->orderBy('cfr_timecreated', 'desc')->get();
        }
        return $data;
    }
}

?>