<?php 
session_start();


class post{
	

	public $tittle;
	public $id;
	public $content;
	public $aurthor;
	public $tag;
	public $date;
	public $file;
	private $table = 'post';
	private $conn;



	//create construction class
	public function __construct($db){
		$this->conn = $db;

	}


	// public function create(){
	// 	 $querry = "INSERT INTO " .$this->table. " SET tittle = :tittle, aurthor = :aurthor,tag = :tag, content = :content ,file = :file";
    //      //clean data
	// 	 $this->tittle= htmlspecialchars(strip_tags($this->tittle));
	// 	 $this->aurthor= htmlspecialchars(strip_tags($this->aurthor));
	// 	 $this->content= htmlspecialchars(strip_tags($this->content));
	// 	 $this->tag= htmlspecialchars(strip_tags($this->tag));
	// 	 $this->file= htmlspecialchars(strip_tags($this->file));
	// 	 //bind parameters

	// 	 //prepare querry
    //     $stmt = $this->conn->prepare($querry);
		
    //     //bind parameters
    //     $stmt->bindParam(":tittle",$this->tittle);
    //     $stmt->bindParam(":aurthor",$this->aurthor);
	// 	$stmt->bindParam(":tag",$this->tag);
    //     $stmt->bindParam(":content",$this->content);
    //     $stmt->bindParam(":file",$this->file);


	// 	if($stmt->execute()){
    //         return true;
    //     }
    //     return false;

        
        
    // }

	//method for creating post

	public function createPost(){
		$querry = "INSERT INTO " .$this->table. " SET tittle = :tittle, aurthor = :aurthor,tag = :tag, content = :content ,file = :file";
        
		


		//clean data
		 $this->tittle= htmlspecialchars(strip_tags($this->tittle));
		 $this->aurthor= htmlspecialchars(strip_tags($this->aurthor));
		 $this->content=$this->content;
		 $this->tag= htmlspecialchars(strip_tags($this->tag));
		 $this->file= htmlspecialchars(strip_tags($this->file));

		 //prepare querry
		$stmt = $this->conn->prepare($querry);
		//  //bind parameters
		 
		 
		 $stmt->bindParam(":tittle",$this->tittle);
		 $stmt->bindParam(":aurthor",$this->aurthor);
		 $stmt->bindParam(":tag",$this->tag);
		 $stmt->bindParam(":content",$this->content);
		 $stmt->bindParam(":file",$this->file);
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


	public function readPost(){
		$querry = "SELECT * FROM ".$this->table." ORDER BY date DESC";

		//prepare statement
		$stmt = $this->conn->prepare($querry);

		$stmt->execute();
		return $stmt;

	}

	public function read_singlePost(){
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

	public function update_content(){
		$querry = "UPDATE " .$this->table. " SET tittle = :tittle, aurthor = :aurthor,tag = :tag, content = :content ,file = :file WHERE id =:id";
        
		//clean data 
		$this->id= htmlspecialchars(strip_tags($this->id));
		$this->tittle= htmlspecialchars(strip_tags($this->tittle));
		 $this->aurthor= htmlspecialchars(strip_tags($this->aurthor));
		 $this->content=$this->content;
		 $this->tag= htmlspecialchars(strip_tags($this->tag));
		 $this->file= htmlspecialchars(strip_tags($this->file));

		 //prepare querry
		  //prepare querry
		$stmt = $this->conn->prepare($querry);
		//  //bind parameters
		 
		$stmt->bindParam(":id",$this->id);
		 $stmt->bindParam(":tittle",$this->tittle);
		 $stmt->bindParam(":aurthor",$this->aurthor);
		 $stmt->bindParam(":tag",$this->tag);
		 $stmt->bindParam(":content",$this->content);
		 $stmt->bindParam(":file",$this->file);

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