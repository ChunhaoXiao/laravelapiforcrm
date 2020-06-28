<?php 
namespace App\Services;
use Illuminate\Support\Facades\Auth;
use App\Models\DataSource;

class DataSourceService {
    public function getData($type) {
        if(in_array($type, ['customers', 'products', 'businesses', 'contracts'])) {
            return Auth::user()->$type()->latest()->paginate();
        }

        
        // switch($type) {
        //     case 'customer':
        //         $datas =  Auth::user()->customers()->latest()->paginate(20);
        //     break;
        //     case 'product':
        //         $datas = Auth::user()->products()->latest()->paginate(20);
        //     break;
        //     case 'business':
        //         $datas = Auth::user()->businesses()->latest()->paginate(20);
        //     break;
        //     case 'contract':
        //         $datas = Auth::user()->contracts()->latest()->paginate();
        //     break;
        // }
        // return $datas;
    } 
}
