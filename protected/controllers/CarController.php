<?php 
#http://localhost:8080/Carwash/Carwash/car/
class CarController extends Controller
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("Car")->findAll();
		$this->render("index",array("model"=>$model));
	}
}
?>