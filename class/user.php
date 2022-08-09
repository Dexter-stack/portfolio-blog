<?php 

class user{

    public $bname;
	public $id;
	public $fname;
	public $lname;
	public $username;
    public $address;
    public $city;
    public $country;
    public $mobile;
    public $about;
	public $date;
	public $file;
	private $table = 'user';
	private $conn;


    //create construction class
	public function __construct($db){
		$this->conn = $db;

	}






    public function read_user(){
		$querry = "SELECT * FROM " .$this->table." WHERE id = :id";
		//clean id 
		$this->id = htmlspecialchars(strip_tags($this->id));
		//prepare statement
		$stmt = $this->conn->prepare($querry);
		$stmt->bindParam(":id",$this->id);
		//execute stmt 
		$stmt->execute();
		return $stmt;
	}


    public function update_user(){
		$querry = "UPDATE " .$this->table. " SET bname = :bname, fname = :fname,lname = :lname, username = :username, email = :email, address = :address ,city = :city, country = :country, mobile = :mobile , about = :about WHERE id =:id";

        
		//clean data 
		$this->id= htmlspecialchars(strip_tags($this->id));
        $this->bname= htmlspecialchars(strip_tags($this->bname));
		$this->fname= htmlspecialchars(strip_tags($this->fname));
		 $this->lname= htmlspecialchars(strip_tags($this->lname));
		 $this->username= htmlspecialchars(strip_tags($this->username));
		 $this->email= htmlspecialchars(strip_tags($this->email));
         $this->address= htmlspecialchars(strip_tags($this->address));
         $this->city= htmlspecialchars(strip_tags($this->city));
         $this->country= htmlspecialchars(strip_tags($this->country));
         $this->mobile= htmlspecialchars(strip_tags($this->mobile));
         $this->about= htmlspecialchars(strip_tags($this->about));
		 //$this->file= htmlspecialchars(strip_tags($this->file));

		 //prepare querry
		  //prepare querry
		$stmt = $this->conn->prepare($querry);
		//  //bind parameters
		 
		$stmt->bindParam(":id",$this->id);
		 $stmt->bindParam(":bname",$this->bname);
		 $stmt->bindParam(":fname",$this->fname);
		 $stmt->bindParam(":lname",$this->lname);
		 $stmt->bindParam(":username",$this->username);
         $stmt->bindParam(":email",$this->email);
         $stmt->bindParam(":address",$this->address);
         $stmt->bindParam(":city",$this->city);
         $stmt->bindParam(":country",$this->country);
         $stmt->bindParam(":mobile",$this->mobile);
         $stmt->bindParam(":about",$this->about);
		 //$stmt->bindParam(":file",$this->file);

		 if(!($stmt)){
			return false;

		}else{

			if($stmt->execute()){
				return true;
			}
			return false;
	
    
		}
		return false;

		 

		

	}






















}

















?>