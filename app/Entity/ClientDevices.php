<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClientDevices extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'client_devices';
    protected $primaryKey = 'device_id';
    
    protected $fillable = ["client_id","device_id","feature","sdk","sdk_sn","starting_date","device_expiration_policy","expiration_date","meta","user_limit"];
    const CREATED_AT = 'time_create';
    const UPDATED_AT = 'time_edit';

    public static function getList(){
        return DB::connection($this->connection)->select('Select * From `client_devices`');
    }

    /*public function test(){
        $this->connection;
    }*/
    
    public static function create($params){
        try{
            $data = $params;
            //$expiration = $params['expiration_date'];
            if (empty($params['expiration_date'])) {
                $expiration = date('Y-m-d H:i:s');
            } else {
                $expiration = $params['expiration_date'];
            }
            $data["expiration_date"] = date('Y-m-d H:i:s', strtotime($expiration));

            //ClientDevices::create($params);
            static::query()->create($data);
            //DB::commit();
            return ['success', '新增成功'];
        } catch(\Exception $e){
            return ['error', '新增失敗！'];
        }
    }
    public function show(){
        return $this;
    }
    /*public function edit($params){ //無法用
        $client_device = $this;
        $client_device->starting_date = $params['starting_date'];
        $client_device->expiration_date = $params['expiration_date'];
        $client_device->time_edit = date('Y-m-d H:i:s');

        $bool = $client_device->save();
        try {
            //$client_device->update($data);
            return ['success', '更新成功'];
        } catch(\Exception $e) {
            return ['error', '更新失敗',$e->getMessage()];
        }
        //Log::info(json_encode(['auth'=>Auth::id(), 'edit client'=>$client_id, 'request'=>$request->all()]));
        if ($bool) {
            //return redirect()->route('admin.bomdic.client', ['client_id'=>$client_id])->with('success', '新增成功');
            return ['success', '更新成功'];
        } else {
            return ['error', '更新失敗'];
        }
    }*/
    public function client() //
    {
        return $this->belongsTo('App\Entity\Client','client_id','client_id');
    }
}
