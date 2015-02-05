<?php 
class indexcontroller{

	function indexcontroller(){
		include('/model/mindex.php');
		$this->model = new mindex();
	}


	function getMaterias(){
		return $this->model->getAllMaterias();
	}
}
 ?>
