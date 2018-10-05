<?php 
include "Database.php";

abstract class Main{
		protected $table;

		abstract public  function insert();
		abstract public function update($id);
		
public  function readAll(){
		$sql = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


//this query will show data following by id
	public function readById($id){
	$sql = "SELECT * FROM $this->table WHERE id=:id";
	$stmt = DB::prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	return $stmt->fetch();
}

//this query for deleting data
	public function delete($id){
		$sql = "DELETE FROM $this->table WHERE id=:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
		
	}
	}
?>