<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClientSecuritySource extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'client_security_source';
    protected $primaryKey = 'id';
    protected $fillable = ["client_id","source_ip"];
    public $timestamps = false;

    public static function getList(){
        return DB::connection($this->connection)->select('Select * From `client_security_source`');
    }

    /*public function test(){
        $this->connection;
    }*/
    
    public static function create($params){
        try{
            $data = $params;
            static::query()->create($data);
            return ['success', '新增成功'];
        } catch(\Exception $e){
            return ['error', '新增失敗！'];
        }
    }
    public function show(){
        return $this;
    }
    /*public function edit($params){
        $client_security_source = $this;

        try {
            $client_security_source->update($params);
            return ['success', '更新成功'];
        } catch(\Exception $e) {
            return ['error', '更新失敗',$e->getMessage()];
        }
    }
    public function delete(){
        $client_security_source = $this;
        try {
            static::query()->delete($this->id);
            return ['success', '刪除成功'];
        } catch(\Exception $e) {
            return ['error', '更新失敗',$e->getMessage()];
        }
    }*/
    public function client() //
    {
        return $this->belongsTo('App\Entity\Client','client_id','client_id');
    }
}
