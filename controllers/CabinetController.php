<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\cabinet\Projects;
use app\models\cabinet\ProjectTeams;
use app\models\cabinet\Workers;
use app\models\cabinet\Tasks;
use app\models\cabinet\CreateForm;

class CabinetController extends Controller
{
	//Устанавливаем права доступа к действиям
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','projects','project'],
                'rules' => [                   
                    [
						//Доступ к странице личного кабинета возможен только авторизованному пользователю
                        'allow' => true,
                        'actions' => ['index','projects', 'project'],
                        'roles' => ['@'],
                    ],					
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * показываем главную страницу личного кабинета пользователя
     *
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	/**
     * показываем страницу проектов
     * 
     */
    public function actionProjects()
    {
		//выбираем проекты пользователя
		$authUserID = Yii::$app->user->id;
		
		//SELECT * FROM `projects` INNER JOIN `project_users` ON (`project_users`.`project_id` = `projects`.`id`) WHERE `user_id`=4
		$array = Projects::find()->where(['company_id' => 2])->all();		
        return $this->render('projects',['projectList' => $array]);                   
    }
	
	/**
     * показываем страницу одного проекта
     *  
     */
    public function actionProject()
    {
		//Добавить, важно!!! Нужна проверка на пользователЯ при выборке		
		$authUserID = Yii::$app->user->id; //кто смотрить
		$request = Yii::$app->request; 
		$projectID = $request->get('pid'); //id проекта на который смотрит
				
		$project = Projects::find()->where(['id' => $projectID])->all();
		
		$teamIDs = ProjectTeams::find()->where(['project_id' => $projectID])->all(); //выборка всех членов команды по ID проекта из таблицы команды проектов
		
		//Получаем только ID членов команды, записываем в массив $workerIDs
		$workerIDs = [];
		foreach($teamIDs as $workerModel)
		{			
			array_push($workerIDs, $workerModel['worker_id']);
		}
		
		//Получаем данные членов команды, записываем в массив $workerModels
		$workerModels = Workers::find() -> where (['id'=>$workerIDs]) -> all();
		
        return $this->render('project',['projectList' => $project, 'workersList' => $workerModels]);                   
    }
	
	/**
     * показываем страницу задач
     * 
     */
    public function actionTasks()
    {
		//выбираем пользователя
		$authUserID = Yii::$app->user->id;
		$taskList = Tasks::find()->where(['creator_user_id' => $authUserID])->all();
		
        return $this->render('tasks',['taskList' => $taskList]);                  
    }
    
    
    public function actionCreate(){
      
           $model = new CreateForm(); 
        
        
       // if($model->Yii::$app->getRequest()->isPost ){
           $data=Yii::$app->request->post();
           $projects= Projects::getAll();
           
           
           
            if($model->load(\Yii::$app->request->post()) && $model->validate()){
                $model->title=$data['CreateForm']['title'];
                $model->desc=$data['CreateForm']['desc'];
                
                
                $projects=Projects::find()->asArray()->all();
                
                
    
                
                if($model->create()){
                    echo '<pre>'; print_r($projects);
                    //return $this->goHome();
                }
       
            }
        //}   
        //Объект модели формы добавления задачи
            $authUserID=Yii::$app->user->id;//Получение id идентифицированного пользователя
            return $this->render('create',['creator_id'=>$authUserID, 'model' => $model,'projects'=>$projects]);//Открываем форму добавления
        
        
        
        
        
       
        
    }
}
