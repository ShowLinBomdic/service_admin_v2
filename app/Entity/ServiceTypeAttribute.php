<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;
//沒在用
class ServiceTypeAttribute extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'service_type_attribute';
    protected $primaryKey = 'id';
    protected $fillable = ["service_type","category","priority","type_ids","allow_type_ids","service_type_api","service_type_attribute_api","service_type_attribute_sdk","service_type_attribute_zip_v2"];

    public static function getList(){
        return DB::connection($this->connection)->select('Select * From `service_type_attribute`');
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
    public function client_service_type() //
    {
        return $this->belongsTo('App\Entity\ClientServiceType','service_type','service_type');
    }
}
