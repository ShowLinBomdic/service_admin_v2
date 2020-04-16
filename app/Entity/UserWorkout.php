<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserWorkout extends Model
{
    public $incrementing = false;
    protected $connection = 'mysql_bomdic';
    protected $table = 'user_workout';
    protected $primaryKey = 'user_workout_id';

    const CREATED_AT = 'time_create';
    const UPDATED_AT = 'time_edit';

    public static function getUserWorkouts($user_id)
    {
        $workouts = self::where('user_id',$user_id)->get();
        
        return $workouts;
    }
    public function user()
    {
        return $this->belongsTo('App\Entity\BomdicUser','user_id','user_id');
    }
}
