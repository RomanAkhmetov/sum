<?php

namespace app\models\cabinet;

use Yii;
use yii\base\Model;
use app\models\cabinet\Tasks;

class CreateForm extends Model{
    
    public $title;
    public $desc;
    public $project_id;
    
    
    
   
    
    
    public function create(){
        $task=new Tasks();
        $task->task_title=$this->title;
        $task->task_description=$this->desc;
        return $task->save(false);
    }
    
}

