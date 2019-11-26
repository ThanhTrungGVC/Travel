
<?php

class Database {
	protected $conn;

	public function __construct() {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databasename = "travel";

		$this->conn = mysqli_connect($hostname, $username, $password, $databasename);

		mysqli_set_charset($this->conn, 'UTF8');
	}

	public function check_connect() {
		if ($this->conn) {
			return "Oke google!";
		}
		return "Error connect to database!";
	}

	public function get_info_hot_place() {
		$sql = "SELECT * FROM hotplaces LIMIT 3";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_package_cost() {
		$sql = "SELECT * FROM package_cost";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_place() {
		$sql = "SELECT * FROM place";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_cost($id_pk) {
		$sql = "SELECT * FROM cost_detail cd
				INNER JOIN place p ON cd.place_id = p.place_id 
				WHERE cd.package_cost_id = '$id_pk'
				LIMIT 6";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_comment() {
		$sql = "SELECT * FROM comment";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_tour() {
		$sql = "SELECT * FROM tour";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function get_info_hotel() {
		$sql = "SELECT * FROM hotels";
		$result = $this->conn->query($sql);
		return $result;
	}
}

?>