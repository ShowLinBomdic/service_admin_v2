<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model
{
    protected $connection = 'mysql_bomdic';
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ["client_name","social_type","limit_device","limit_user","limit_workout","expiration"];

    const CREATED_AT = 'time_create';
    const UPDATED_AT = 'time_edit';

    public static function getList(){
        return DB::connection($this->connection)->select('Select * From `clients`');
    }

    /*public function test(){
        $this->connection;
    }*/
    /*public static function create($params){
        $client_id = hexdec(uniqid());
        DB::beginTransaction();
        try{
            $client = new Client();

            $client->client_id = $client_id;

            $client->client_name = $params['client_name'];
            $client->social_type = $params['social_type'];

            $client->secret_key = user_token_encrypt_decrypt('encrypt', $client_id);

            $client->limit_device = $params['limit_device'];
            $client->limit_user = $params['limit_user'];
            $client->limit_workout = $params['limit_workout'];

            $expiration = $params['expiration_date'];
            if (empty($expiration)) {
                $expiration = date('Y-m-d H:i:s');
            }
            $client->expiration = date('Y-m-d H:i:s', strtotime($expiration));

            //$client->time_create= date('Y-m-d H:i:s');
            //$client->time_edit = date('Y-m-d H:i:s');

            $client->save();
            DB::commit();
            return ['success', '新增成功'];
        } catch(\Exception $e){
            //if there is an error/exception in the above code before commit, it'll rollback
            //exception
            DB::rollBack();
            return ['error', '新增失敗！'];
        }
    }*/
    
    public static function create($params){
        $client_id = hexdec(uniqid());
        DB::beginTransaction();
        try{
            $data = $params;
            $expiration = $params['expiration_date'];
            if (empty($expiration)) {
                $expiration = date('Y-m-d H:i:s');
            }
            $data["expiration"] = date('Y-m-d H:i:s', strtotime($expiration));

            //$client->time_create= date('Y-m-d H:i:s');
            //$client->time_edit = date('Y-m-d H:i:s');

            $client->save();
            DB::commit();
            return ['success', '新增成功'];
        } catch(\Exception $e){
            //if there is an error/exception in the above code before commit, it'll rollback
            //exception
            DB::rollBack();
            return ['error', '新增失敗！'];
        }
    }
    
    public function show(){
        return $this;
    }
    public function edit($params){
        $client = $this;
        $client->client_name = $params['client_name'];
        $client->social_type = $params['social_type'];

        $client->limit_device = $params['limit_device'];
        $client->limit_user = $params['limit_user'];
        $client->limit_workout = $params['limit_workout'];

        $expiration = $request->input['expiration_date'];
        if (empty($expiration)) {
            $expiration = date('Y-m-d H:i:s');
        }
        $client->expiration = date('Y-m-d H:i:s', strtotime($expiration));

        $client->time_edit = date('Y-m-d H:i:s');

        $bool = $client->save();

        //Log::info(json_encode(['auth'=>Auth::id(), 'edit client'=>$client_id, 'request'=>$request->all()]));
        if ($bool) {
            //return redirect()->route('admin.bomdic.client', ['client_id'=>$client_id])->with('success', '新增成功');
            return ['success', '更新成功'];
        } else {
            return ['error', '更新失敗'];
        }
    }
    public function delete(){
        //$client = $this;
        self::delete();
    }
    public function client_devices()
    {
        return $this->hasMany('App\Entity\ClientDevices','client_id','client_id');
    }
    public function client_security_sources()
    {
        return $this->hasMany('App\Entity\ClientSecuritySource','client_id','client_id');
    }
    public function client_service_types()
    {
        return $this->hasMany('App\Entity\ClientServiceType','client_id','client_id');
    }
    //subscripttype 沒在用
    public function client_users()
    {
        $sql = 'SELECT
            user.user_id, user_social_site.social_type, user_service_type.service_type, user_devices.device_id,
            user_service_type.starting_date, user_service_type.service_type_expiration,
            user_service_type.time_create as user_service_type_time_create, user_service_type.time_edit as user_service_type_time_edit
            FROM user
            LEFT JOIN user_social_site ON user_social_site.user_id = user.user_id
            LEFT JOIN user_service_type ON user_service_type.user_id = user.user_id
            LEFT JOIN user_devices ON user_devices.user_id = user.user_id
            WHERE user_social_site.client_id=:client_id
            ORDER BY user_service_type.service_type, user.time_create DESC';

        $rows = DB::connection('mysql_bomdic')->select(DB::raw($sql),[
            'client_id'=>$client_id
        ]);

        return $rows;
    }
}
