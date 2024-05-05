<?php

namespace backend\controllers;

use backend\components\Botones;
use Yii;
use common\models\Programas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;


/**
 * ProgramasController implements the CRUD actions for Programas model.
 */
class ProgramasController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Programas models.
     * @return mixed
     */
    public function actionIndex()
    {
        /*$dataProvider = new ActiveDataProvider([
            'query' => Programas::find(),
        ]);*/

        return $this->render('index', [
            //'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programas model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Programas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionVerprograma($id)
    {
        $programa= Programas::find()->where(['id' => $id, "isDeleted" => 0])->one();

        return $this->render('verprograma', [
            'data' =>$programa,
            // 'entregasdetalle' => Diariodetalle::find()->where(['diario' => $entregas->diario, "isDeleted" => 0])->all(),
        ]);

    }

    public function actionNuevoprograma()
    {
        //$profesiones= new Medico_profesiones;
        //$profesiones= $profesiones->getSelect();
        $programa= New Programas();
        return $this->render('nuevoprograma', [
            'data' => $programa,
        ]);
    }

    public function actionEditarprograma($id)
    {
        return $this->render('editarprograma', [
            'data' => Programas::find()->where(['id' => $id, "isDeleted" => 0])->one(),
        ]);
    }

    /**
     * Updates an existing Programas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        //$this->findModel($id)->delete();
        if (Yii::$app->user->isGuest) {
            return $this->redirect(URL::base() . "/site/login");
        }

        $model = $this->findModel($id);
        $model->isDeleted = 1;
        $model->save();

        return $this->redirect(['index']);
    }

    public function actionProgramasreg()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(URL::base() . "/site/login");
        }

        $page = "torneo";

        $model = Programas::find()->where(['isDeleted' => '0'])->orderBy(["id" => SORT_DESC])->all();
        $arrayResp = array();
        $count = 1;

        foreach ($model as $key => $data) {
            foreach ($data as $id => $text) {
                //$arrayResp[$key]['num'] = $count;
                $botones= new Botones;
                $arrayResp[$key]['num'] = $count+1;
                $view='programa';

                $arrayResp[$key]['programa'] = '';
                if ($id == "id") {
                    $botonC=$botones->getBotongridArray(
                        array(
                            array('tipo'=>'link','nombre'=>'ver', 'id' => 'editar', 'titulo'=>'', 'link'=>'ver'.$view.'?id='.$text, 'onclick'=>'' , 'clase'=>'', 'style'=>'', 'col'=>'', 'tipocolor'=>'azul', 'icono'=>'ver','tamanio'=>'superp',  'adicional'=>''),
                            array('tipo'=>'link','nombre'=>'editar', 'id' => 'editar', 'titulo'=>'', 'link'=>'editar'.$view.'?id='.$text, 'onclick'=>'', 'clase'=>'', 'style'=>'', 'col'=>'', 'tipocolor'=>'verdesuave', 'icono'=>'editar','tamanio'=>'superp', 'adicional'=>''),
                            array('tipo'=>'link','nombre'=>'eliminar', 'id' => 'editar', 'titulo'=>'', 'link'=>'','onclick'=>'deleteReg('.$text. ')', 'clase'=>'', 'style'=>'', 'col'=>'', 'tipocolor'=>'rojo', 'icono'=>'eliminar','tamanio'=>'superp', 'adicional'=>''),
                        )
                    );
                    $arrayResp[$key]['acciones'] = '<div style="display:flex;">'.$botonC.'</div>' ;
                    //$arrayResp[$key]['button'] = '-';
                }

                if ($id == "estatus" and $text == 'ACTIVO') {
                    $arrayResp[$key][$id] = '<small class="badge badge-success"><i class="fa fa-circle"></i>&nbsp; ' . $text . '</small>';
                } elseif ($id == "estatus" and $text == 'INACTIVO') {
                    $arrayResp[$key][$id] = '<small class="badge badge-secondary"><i class="fa fa-circle-thin"></i>&nbsp; ' . $text . '</small>';
                } else {
                    if (($id == "titulo") || ($id == "descripcion") || ($id == "fechacreacion") ) { $arrayResp[$key][$id] = $text; }
                    if (($id == "video")  ) { $arrayResp[$key][$id] = $text; }
                }
            }
            $count++;
        }

        return json_encode($arrayResp);
    }

    /**
     * Finds the Programas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Programas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Programas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
