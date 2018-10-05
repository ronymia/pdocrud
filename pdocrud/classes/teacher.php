<?php 
	include "Main.php";

/**
 * Student
 */
class Teacher extends Main{
	protected $table = 'tbl_teacher'; 
	private $name;
	private $dep;
	private $age;
	private $address;


	public  function setName($name){
		$this->name = $name;
	}
	public  function setDep($dep){
		$this->dep = $dep;
	}
	public  function setAge($age){
		$this->age = $age;
	}
	public function setAddress($address){
		$this->address = $address;
	}

//this query have made for inserting data to database
	public  function insert(){
		$sql = "INSERT INTO $this->table(name, dep, age, address) VALUES(:name, :dep, :age, :address)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':dep', $this->dep);
		$stmt->bindParam(':age', $this->age);
		$stmt->bindParam(':address', $this->address);
		return $stmt->execute();
	}

//this query have made for updating data
	public function update($id){
		$sql = "UPDATE $this->table SET name=:name, dep=:dep, age=:age, address=:address WHERE id=:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':dep', $this->dep);
		$stmt->bindParam(':age', $this->age);
		$stmt->bindParam(':address', $this->address);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}



}
?>