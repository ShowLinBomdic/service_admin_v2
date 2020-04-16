<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class BomdicUser extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'user';

    protected $primaryKey = 'user_id';
    
    const CREATED_AT = 'time_create';
    const UPDATED_AT = 'time_edit';

    public static function getUsers()
    {
        $users = self::paginate(20);
        
        return $users;
    }
    public function user_workouts()
    {
        return $this->hasMany('App\Entity\UserWorkout','user_id','user_id');
    }
}
