<?php 
namespace App\Services;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AuthService {
    public function authUser($code) {
        $appid = env('WECHAT_APPID');
        $secret = env('WECHAT_APPSECRET');
        $data = Http::withOptions([
            'verify' => false
        ])->get('https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code');
        
        if(!empty($data['openid'])) {
            $user = User::where('openid', $data['openid'])->first();
            if(!$user) {
                $user = User::create(['openid' => $data['openid'], 'name' => 'zs'.random_int(100, 1000)]);
                //return $user;
            }
            $success['token'] =  $user->createToken('crm')->accessToken;
            return $success;
        }
    }
}