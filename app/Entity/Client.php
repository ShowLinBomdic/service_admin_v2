<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'clients';
    protected $primaryKey = 'client_id';

    public function getList(){
        return DB::connection($this->connection)->select('Select * From `clients`');
    }

    public function test(){
        $this->connection;
    }
}