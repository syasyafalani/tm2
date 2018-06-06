<?php 
class Index extends Controller 

{
function __construct() 

{
parent::__construct();
}


function index () {
	$this->view->allrecords =$this->model->getAllrecords ();
	$this->view->render('index/index');
	

	
	
	
	
function view_index()


{ $data =$_GET ;

if ($data ['id'] =='')
	

	{
		$this -> view->pick;
		$this -> view->data =$data ; 
		
	}
else 
	
	{ 
	$this ->view->data =$data['id'];
	$this ->view->content =$this->model->viewOnerecord($data['id']);
	}
	$this->view->render('index/view_index');
}
}

	
	

function edit_submit_index(){ 
$action = $_POST['SUBMIT'];

if ($action == 'submit')
	
{echo'$action';
	
	$arg = $_POST['id'];
	$data = array 
	(
	'id' => null,
	'serv_no' => $_POST ['serv_no'],
	'seg_group' =>$_POST['seg_group'],
	'prod' =>$_POST['prod'],
	'remark' =>$_POST['remark'],
	'tix_stat' =>$_POST['tix_stat'],
	'state' =>$_POST['state']
	);
	
	$this->model->submit_index($data);
}
	
	header ('location:index');
	
	
}
	
}
	
	
