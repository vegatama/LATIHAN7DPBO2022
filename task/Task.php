<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Add data
	function addData(){
		// ambil input data
		$name = $_POST['tname'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$deadline = $_POST['tdeadline'];

		// Query mysql insert data ke tb_to_do
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) 
		VALUES ('$name', '$details', '$subject', '$priority', '$deadline', 'Belum')";
		// Mengeksekusi query
		return $this->execute($query);
	}

	// Delete data
	function deleteData($id){
		// Query mysql delete data di tb_to_do
		$query = "DELETE FROM tb_to_do WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Update data status
	function upstatData($id){
		// Query mysql update data di tb_to_do
		$query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
}

?>