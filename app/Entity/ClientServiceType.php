<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClientServiceType extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'client_service_type';
    protected $primaryKey = 'id';
    protected $fillable = ["client_id","service_type","new_user","service_type_expiration_policy","service_type_expiration"];
    public $timestamps = false;

    public static function getList(){
        return DB::connection($this->connection)->select('Select * From `client_service_type`');
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
    public function service_type_attributes()
    {
        return $this->hasOne('App\Entity\ServiceTypeAttribute','service_type','service_type');
    }
}
