<?php

class EditCommentController extends PageController {

	public function __construct($dbc){
		
		parent:: __construct();
	
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		$this->mustOwnComment();

		if(isset($_POST['edit-comment'])){
			$this->processComment();
		}

	}
	
	public function buildHTML(){

		echo $this->plates->render('edit-comment', $this->data);
		
	}

	private function mustOwnComment(){

		$userID = $_SESSION['id'];
		$commentID = $this->dbc->real_escape_string($_GET['id']);
		$sql = "SELECT comment, studio_id
				FROM comments
				WHERE id = $commentID
				AND user_id = $userID";

		$result = $this->dbc->query($sql);

		if(!$result || $result->num_rows == 0){

				header('Location: index.php?page=studio');

		}	else {

			$theComment = $result->fetch_assoc();
			$this->data['comment'] = $theComment['comment'];
			$this->date['studio_id'] = $theComment['studio_id'];

		}
	}

	private function processComment(){
		$totalErrors = 0;

		if(strlen($_POST['comment'])> 1000){
			$totalErrors++;
			$this->data['commentError'] = 'Must be less than 1000';
		}
		if( $totalErrors == 0 ){

			$commentID = $_GET['id'];

			$comment = $this->dbc->real_escape_string($_POST['comment']);

			$sql = "UPDATE comments
					SET comment = '$comment'
					WHERE id = '$commentID' ";

			$this->dbc->query($sql);

			header('Location: index.php?page=studio&studioid='.$this->data['studio_id']);					

		}
	}
}













