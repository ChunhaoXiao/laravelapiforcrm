<?php 
namespace App\Services;
use App\Models\Agenda;

class MessageService {
   
    private $model;

    public function __construct($type)
    {
        if($type == 'agenda') {
            $this->model = new Agenda();
        }
    }

    public function getData($type) {
        
        $datas = $this->agenda->Coming()->get();
        return $datas;
    }

}