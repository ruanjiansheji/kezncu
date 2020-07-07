<?php
class conn {
	private $mysqli;
	private $result;
	public $sql;
	function __construct($sql) {
		$this->sql = $sql;
		$this->connect();
	}
	function connect() {
		$this->mysqli = new mysqli("172.17.0.2", "root", "123456", "libsystem");
		if (mysqli_connect_errno()) {
			die("Can not connect to mysql server");
		}
		$this->mysqli->query("set sql_mode ='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'");
	}

	function fetch_res() {
		$result = $this->mysqli->query($this->sql);
		while ($row = $result->fetch_assoc()) {
			$res_array[] = $row;
		}
		return $res_array;
	}
	function execute_sql() {
		$x = $this->mysqli->query($this->sql);
		return $x;
	}
	function setsql($value) {
		$this->sql = $value;
	}
	function __destruct() {
		if (!empty($result)) {
			$result->free();
		}
		$this->mysqli->close();
	}
}
?>
