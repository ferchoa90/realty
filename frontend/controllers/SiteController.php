<?php
namespace frontend\controllers;
use common\models\Clientesfelices;
use common\models\Colaboradores;
use common\models\Pais;
use common\models\Propiedades;
use common\models\Provincia;
use common\models\Ciudad;
use common\models\Tipobien;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\helpers\Url;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Contactenos;
use common\models\User;
use common\models\Noticias;
use common\models\Programas;
use common\models\Listadoprogramas;
use common\models\Menu;

use backend\components\Botones;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                  //  'logout' => ['post'],
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        /*if (Yii::$app->user->isGuest) {
            return $this->redirect(URL::base() . "/site/login");
        }*/
        $colaboradores= Colaboradores::find()->where(["isDeleted" => 0])->all();
        $pais= Pais::find()->where(["isDeleted" => 0])->all();
        $provincia= Provincia::find()->where(["isDeleted" => 0])->all();
        $ciudad= Ciudad::find()->where(["isDeleted" => 0])->all();
        $tipobien= Tipobien::find()->where(["isDeleted" => 0])->all();
        $propiedaddestacado= Propiedades::find()->where(["isDeleted" => 0])->one();
        $propiedades= Propiedades::find()->where(["isDeleted" => 0]);
        $clientessatisfechos= Clientesfelices::find()->where(["isDeleted" => 0, "estatus" => "ACTIVO"])->all();
        if ($propiedaddestacado)
        {
            $propiedades = $propiedades->andWhere("id <> ".$propiedaddestacado->id)->all();
        }

        return $this->render('index', [
            'pais' =>$pais,
            'provincia' =>$provincia,
            'ciudad' =>$ciudad,
            'tipobien' =>$tipobien,
            'colaboradores' =>$colaboradores,
            'propiedaddestacado' =>$propiedaddestacado,
            'propiedades' =>$propiedades,
            'clientessatisfechos' =>$clientessatisfechos,
            // 'entregasdetalle' => Diariodetalle::find()->where(['diario' => $entregas->diario, "isDeleted" => 0])->all(),
        ]);
    }

    public function actionQuienessomos()
    {
        return $this->render('quienessomos');
    }

    public function actionEquipo()
    {
        return $this->render('equipo');
    }

    public function actionContacto()
    {
        return $this->render('contacto');
    }

    public function actionNoticias()
    {
        $noticias= Noticias::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['fechavisual'=>SORT_DESC])->all();

        return $this->render('noticias',[ "noticias"=>$noticias ]);
    }

    public function actionPrograma($id)
    {
        $programa= Programas::find()->where(["id"=>$id])->one();
        $masprogramas= Programas::find()->andWhere(["<>",'id',$id])->andWhere(["idprograma" =>$programa->idprograma])->orderBy(["fechavisual"=>SORT_DESC])->all();
        $listadoprogramas= Listadoprogramas::find()->where("id",'<>',$programa->idprograma)->all();
        return $this->render('programa',[ "programa"=>$programa,"masprogramas"=>$masprogramas
            ,"listadoprogramas"=>$listadoprogramas]);
    }

    public function actionProgramas($id)
    {
        $programas= Programas::find()->where(["idprograma"=>$id])->orderBy(["fechavisual"=>SORT_DESC])->all();
        $programa= Listadoprogramas::find()->where(["id"=>$id])->one();
        return $this->render('programas',[ "programas"=>$programas, "programa"=>$programa]);
    }


    public function actionNotificaciones()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(URL::base() . "/site/login");
        }
        return $this->render('notificaciones');
    }

    protected function Sendemailbonos($bonos)
    {
        set_time_limit(0);
        $email = Yii::$app->mailer->compose('layouts/mailbonos', [
            'model' => $bonos,
        ])->setFrom('cpn_paginaweb@cpn.fin.ec')
            ->setTo("marlene.espinoza@cpn.fin.ec")
            ->setCc("mario.aguilar@fcbandfire.com")
            //->setTo("mario.aguilar@fcbandfire.com")
            ->setSubject("Nueva solicitud de Bono Estudiantil #" . $bonos->id)
            ->send();
    }
    public function actionBusqueda()
    {
        $s=$_GET["s"];
        $query = "SELECT * FROM `subproducto` where `nombre` LIKE '%".$s."%' ";
        $result = Subproducto::findBySql($query)->all();
        //var_dump($result);
        return $this->render('busqueda', [
            'result' => $result,
        ]);
    }

    public function actionContactenos()
    {
        $model = new Contactenos();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $postDatos=$_POST["Contactenos"];
            $model->cedula=$postDatos["cedula"];
            $model->nombres=$postDatos["nombres"];
            $model->ciudad=$postDatos["ciudad"];
            $model->agencia=$postDatos["agencia"];
            $model->direccion=$postDatos["direccion"];
            $model->celular=$postDatos["celular"];
            $model->telefonoc=$postDatos["telefonoc"];
            $model->correo=$postDatos["correo"];
            $model->requerimiento=$postDatos["requerimiento"];
            $model->detalle=$postDatos["detalle"];
            $model->descripcion=$postDatos["descripcion"];
            $model->peticion=$postDatos["peticion"];
            $model->archivo="-";
            $model->verifyCode="OK";
            $model->acepto=1;
            $model->documento="-";
            if ($model->save()){
                Yii::$app->session->setFlash('success', 'Gracias por escribirnos. Un asesor se contactará lo más pronto posible.');
            }else{
                Yii::$app->session->setFlash('error', 'Error al enviar la información.');
            }
            return $this->refresh();
        } else {
            return $this->render('contactenos', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */

     public function actionLogin()
    {
        $this->layout = 'mainlogin';
        if (!Yii::$app->user->isGuest) {
            //return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionRegistroweb()
    {
        $this->layout = 'pedidos';
        if (!Yii::$app->user->isGuest) {
            //return $this->goHome();
        }

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            $data = $_POST["SignupForm"];
            //var_dump($data["email"]);
            $model->username=$data["email"];
            $model->cedula="0900000000";

            if ($model->validate()){
                //&& $model->login()
                //return $this->goBack();
                //return $this->redirect(['site/pedidos']);
                //$model->signup();
                $user= $model->signup();
                //$model = new SignupForm();
           // var_dump($user);
                $login = new LoginForm();

                $login->username=$model->username;
                $login->password=$model->password;
                if ($model->load(Yii::$app->request->post()) && $login->login()){
                    return $this->redirect(URL::base() . "/site/pedidos");

                }

            }else{
              //  var_dump($model->errors);
            }

        } else {
            //var_dump($model->errors);
           // $model->password = '';
            return $this->render('registroweb', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Logs out the current user.
     *
     * @return mixed
     */

     public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    /**
     * Displays contact page.
     *
     * @return mixed
     */


}
