<?php

namespace backend\controllers;

use yii\helpers\Url;
use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\base\DynamicModel;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\User;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['ajax'],
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'find','save-redactor-img', 'role', 'ajax'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],

            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $author = Yii::$app->user->identity->username;

        if ($model->load(Yii::$app->request->post())){
            $model->setAuthor($author);
            if($model->save()){
                return $this->redirect('index');
            }
        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSaveRedactorImg($sub = 'main')
    {
        $this->enableCsrfValidation = false;
        if (Yii::$app->request->isPost)
        {
            $dir = Yii::getAlias('@images') . '/' . $sub . '/'; # Передасться в змінну sub значення з View, щоб створилась папка, в оточенні Alias, і туда будуть кидатись картинки

            if (!file_exists($dir)) {
                FileHelper::createDirectory($dir);
            }

            $result_link = str_replace('/admin', '', Url::home(true) . 'upload/' . $sub . '/');
            $file = UploadedFile::getInstanceByName('file');
            $model = new DynamicModel(compact('file'));
            $model->addRule('file', 'image')->validate(); # Проводиться валідація, чи це картинка

            if ($model->hasErrors()) {
                $result = [
                    'error' => $model->getFirstError('file')
                ];
            } else {
                $model->file->name = strtotime('now') . '_' . Yii::$app->getSecurity()->generateRandomString(15) . '.' . $model->file->extension;
                if ($model->file->saveAs($dir . $model->file->name))
                {
                    // $imag = Yii::$app->image->load($dir . $model->file->name);
                    // $imag->resize($width = 500, $height = 200, \yii\image\drivers\Image::PRECISE)->save($dir . $model->file->name, 80);
                    $result = [
                        'filelink' => $result_link . $model->file->name,
                        'filename' => $model->file->name
                    ];
                }
                else {
                    $result = [
                        'error' => Yii::t('vova07/imperavi', 'ERROR_CAN_NOT_UPLOAD_FILE')
                    ];
                }
            }
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $result;
        } else {
            throw new BadRequestHttpException('Only POST is allowed');
        }
    }




    public function actionRole(){
/*
                $admin = Yii::$app->authManager->createRole('admin');
                $admin->description = 'Адміністратор';
                Yii::$app->authManager->add($admin);

                $content = Yii::$app->authManager->createRole('content');
                $content->description = 'Контент менеджер';
                Yii::$app->authManager->add($content);

                $doctor = Yii::$app->authManager->createRole('doctor');
                $doctor->description = 'Лікар';
                Yii::$app->authManager->add($doctor);
                return 1235;

                $user = Yii::$app->authManager->createRole('user');
                $user->description = 'Користувач';
                Yii::$app->authManager->add($user);

                $permit = Yii::$app->authManager->createPermission('canAdmin');
                $permit->description = 'Право входа в Адмінку';
                Yii::$app->authManager->add($permit);

                $doctor = Yii::$app->authManager->createPermission('canADoctor');
                $doctor->description = 'Право працювати з хвароми';
                Yii::$app->authManager->add($doctor);
*/


                //$role_admin = Yii::$app->authManager->getRole('admin');
               // $role_content = Yii::$app->authManager->getRole('content');
               // $permit = Yii::$app->authManager->getPermission('canAdmin');
                $role_doctor = Yii::$app->authManager->getRole('doctor');
                $permit1 = Yii::$app->authManager->getPermission('canADoctor');
               // Yii::$app->authManager->addChild($role_admin, $permit);
               // Yii::$app->authManager->addChild($role_content, $permit);
                Yii::$app->authManager->addChild($role_doctor, $permit1);

                $userRole = Yii::$app->authManager->getRole('admin');
                Yii::$app->authManager->assign($userRole, Yii::$app->user->getId());
                // Yii::$app->authManager->assign($userRole, 1); //Можна передати конкретний ID шнік користувача
                return 123;



    }
}
