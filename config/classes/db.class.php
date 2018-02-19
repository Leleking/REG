<?php 

/**
* 
*/
define('DB_HOST', 'localhost');
   define('DB_USERNAME', 'GPHA_1996');
   define('DB_PASSWORD', 'GPHA12345');
   define('DB_DATABASE', 'gpha');

class  database
{

	public $host 	=  DB_HOST;
    public $username = DB_USERNAME;
    public $password = DB_PASSWORD;
    public $database = DB_DATABASE;
	
	public $conn;
	public $link;
	public $error;


	public function __construct()
	{
		
		$this->connect();
	}
	public function connect(){
		$this->conn =  mysqli_connect($this->host,$this->username,$this->password,$this->database);

		if(!$this->conn) {
			$this->error = $this->conn->mysqli_error();
		}
		return $this->conn;

	}

	public function select($query){
		$stmt = $this->conn->query($query) or die($this->conn->error);
		$result = $stmt->num_rows;
		if($result > 0){
			return $result;
		}
		else
		{
			return false;
		}
	}
	public function select_assoc($query){
		$stmt = $this->conn->query($query);
         $row = $stmt->fetch_assoc();  
         return $row;

	}
	public function return_assoc_user($username){
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
		 $stmt->bind_param("s", $username);
    	 $stmt->execute();
    	 $result = $stmt->get_result();
         $stmt->close();
         $row = $result->fetch_assoc();  
         return $row;



	}

	public function insert($query){
		$result = $this->conn->query($query) or die($this->conn->error);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	public function update($query){
		$result = $this->conn->query($query) or die($this->conn->error);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	public function del($query){
		$result = $this->conn->query($query) or die($this->conn->error);
		if($result){
			return true;
		}else{
			return false;
		}
	}
}