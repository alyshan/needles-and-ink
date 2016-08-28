<?php

class StudioController extends PageController {

	public function __construct($dbc){
		parent:: __construct();
		$this->dbc = $dbc;

		if( isset($_POST['new-comment']) ){
			$this->processNewComment();
		}

		$this->getPostData();

	}



	public function buildHTML(){

		echo $this->plates->render('studio', $this->data);
		
	}

	private function getPostData(){

		$studioID = $this->dbc->real_escape_string($_GET['studio_id']);

		$sql = "SELECT studio_name, studio_email, studio_phone, studio_address1, studio_address2, description, image
				FROM suggest
				WHERE id = $studioID";

		$result = $this->dbc->query($sql);

			if( !$result || $result->num_rows == 0 ){
				header('Location: index.php?page=404');
			}else{
				$this->data['studio'] = $result->fetch_assoc();
			}

			$sql = "SELECT comments.id, user_id, comment, display_name AS author
					FROM comments
					JOIN users
					ON comments.user_id = users.id
					WHERE studio_id = $studioID
					ORDER BY created_at DESC";

			$result = $this->dbc->query($sql);

			$this->data['allComments'] = $result->fetch_all(MYSQLI_ASSOC);

		}

	private function processNewComment(){

		$totalErrors = 0;

			if($totalErrors == 0){
				$comment = $this->dbc->real_escape_string($_POST['comment']);
				$userID = $_SESSION['id'];
				$studioID = $this->dbc->real_escape_string($_GET['studio_id']);
				
				$sql = "INSERT INTO comments (comment, user_id, studio_id)
						 VALUES ('$comment', $userID, $studioID)";

			$this->dbc->query($sql);
		}

	}

}
