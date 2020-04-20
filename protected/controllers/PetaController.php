<?php

class PetaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column3';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
                                'expression'=>function($user){
                                        return $_SESSION['status_login']==1;
                                },
			),
                        array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex(){
            
        // $data_lokasi=Faskes::model()->getFaskesArea($_SESSION['areaCode']);

		// $data_view = array(
		// 	"data_lokasi" => $data_lokasi,
		// );

        //$this->render('index',$data_view);
        $this->render('index');
    }
        
   
}
