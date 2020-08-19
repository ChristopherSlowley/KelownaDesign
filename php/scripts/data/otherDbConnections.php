<?php
require_once "database.php";

/**
* A specialized DBConnection class specifically for the library database
* @author Christopher Slowley 
*/
class LibraryConnection extends DBConnection 
{	
	/**
	*
	*/
	public function __construct()
	{
		parent::__construct('library');
	}

	function getAllBooksRaw()
	{
		return $this->runQuery("SELECT * FROM books");
	}

	function getAllBooksAsTable()
	{
		$results = $this->getAllBooksRaw();
		$tableStr = "<table><tr><th>Book Id</th><th>Book Title</th><th>Book Number</th><th>Collection Number</th></tr>";
		if($results){
			while($row = mysqli_fetch_array($results)){
				$tableStr.= "<tr>";
				$tableStr.= "<td>".$row['book_id']."</td>";
				$tableStr.= "<td>".$row['title']."</td>";
				$tableStr.= "<td>".$row['book_number']."</td>";
				$tableStr.= "<td>".$row['collection_number']."</td>";
				$tableStr.= "</tr>";
			}
		}
		$tableStr.="</table>";
		return $tableStr;
	}

	function getAllBooksAsJsonArray()
	{
		$results = $this->getAllBooksRaw();
		$jsonStr = '{"books":[';
		if($results){
			
			$recCount = mysqli_num_rows($results);
			for($idx =1; $idx < $recCount; $idx++){
				$row = mysqli_fetch_array($results);//read the next record

				$jsonStr.= '{';
				$jsonStr.= '"book_id":'		.$row['book_id'].',';
				$jsonStr.= '"book_title":"'	.$row['title'].'",';
				$jsonStr.= '"book_number":'	.$row['book_number'].',';
				$jsonStr.= '"collection_number":'.$row['collection_number'];
				$jsonStr.= '},';
				
			}//end for loop
			$row = mysqli_fetch_array($results); //get the last record
			$jsonStr.= '{';
			$jsonStr.= '"book_id":'		.$row['book_id'].',';
			$jsonStr.= '"book_title":"'	.$row['title'].'",';
			$jsonStr.= '"book_number":'	.$row['book_number'].',';
			$jsonStr.= '"collection_number":'.$row['collection_number'];
			$jsonStr.= '}';

		}
		$jsonStr.=']}';
		return $jsonStr;
	}//end method 
}//end class LibraryConnection


/**
* Creates an extension to the base DBConnection for the Pets database
* @author Christopher Slowley christopherslowley@gmail.com
*/
class PetsConnection extends DBConnection {

	function __construct()
	{
		parent::__construct('pets');
	}

	function getAllPetsRaw()
	{
		return $this->runQuery("SELECT name, pet_id, type, color FROM MyPets");
	}

	function getAllPetsAsTable()
	{
		echo "Hellow";
		$results = $this->getAllPetsRaw();
		//$results = $this->runQuery("SELECT * FROM MyPets"); 
		$tableStr = "<table><tr><th>Pet Id</th><th>Name </th><th>Type</th><th>Colour</th></tr>";
		echo print_r($results);
		if($results){
			while($row = mysqli_fetch_array($results))
			{
				$tableStr.="<tr><td>".$row['pet_id']."</td>";
				$tableStr.="<td>".$row['name']."</td>";
				$tableStr.="<td>".$row['type']."</td>";
				$tableStr.="<td>".$row['color']."</td></tr>";

			}
			
		}
		$tableStr.="</table>";
		echo $tableStr;
	}

}//end class PetsConnection
?>