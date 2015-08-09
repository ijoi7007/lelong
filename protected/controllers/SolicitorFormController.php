<?php

class SolicitorFormController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
                array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('create', 'berjaya'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'view', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new SolicitorForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SolicitorForm'])) {
            $model->attributes = $_POST['SolicitorForm'];
            if ($model->save()) {
                //mail function
                $nama = '=?UTF-8?B?' . base64_encode($model->nama) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode('Solicitor : ' . $model->nama) . '?=';
                $headers = "From: $nama <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";
                $body = "\n$model->nama, \n$model->phone, \n$model->propinfo, \n$model->service\n\n$model->note\n\n";

                mail(Yii::app()->params['adminEmail'], $subject, $body, $headers);
                // end of mail function
                
                $url = Yii::app()->createUrl('solicitorForm/berjaya');
                //Yii::app()-request->redirect($url);
                $this->redirect($url);
                //Yii::app()->user->setFlash('solicitor', 'Thank you for contacting us. We will respond to you as soon as possible.');
                //$this->refresh();
                //$this->redirect(array('view','id'=>$model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
         * redirect to success page.
         * @param null
         */
        public function actionBerjaya() {
            //echo "berjaya";
         $this->render('solicitor-berjaya');
        }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SolicitorForm'])) {
            $model->attributes = $_POST['SolicitorForm'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('SolicitorForm');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new SolicitorForm('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['SolicitorForm']))
            $model->attributes = $_GET['SolicitorForm'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = SolicitorForm::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'solicitor-form-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
