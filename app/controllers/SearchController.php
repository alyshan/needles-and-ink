<?php
class SearchController extends PageController{
	
	public function __construct($dbc){
		
		parent::__construct();
		$this->dbc = $dbc;
		$this->mustBeLoggedIn();
		$this->getSearch();
	}

	public function buildHTML(){
		
		echo $this->plates->render('search', $this->data);
	}

	public function getSearch(){

		if(strlen($_POST['search']) === 0){
			$searchTerm = "";
		
		} else {

			$result = $_POST['search'];
			$searchTerm = strtolower($result);
		}

		$this->data['searchTerm'] = $searchTerm;

		 $sql = "SELECT suggest.id, studio_name AS score_title, image, studio_address1, studio_address2 
				FROM suggest
				WHERE studio_name LIKE '%$searchTerm%' 
				ORDER BY score_title ASC";

		$result = $this->dbc->query($sql);

		if( !$result || $result->num_rows == 0){

			$this->data['searchResults'] = "No Results";
		} else{
			
			$this->data['searchResults'] = $result->fetch_all(MYSQLI_ASSOC);
		}
	}
}