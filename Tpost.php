<?php
session_start();

class POST{

    private $conn;
    private $table='usuario';


	public $senha;
	public $email;

	public function __construct($db){
		$this->conn = $db;
	}

    public function read(){
		//Criando query
		$query = 'SELECT id,senha, email FROM ' . $this->table . ' ORDER BY id ASC';
		
		//Preparando a execução da consulta
		$stmt = $this->conn->prepare($query);
		//Executa query
		$stmt->execute();
		
		return $stmt;
		
	}


    public function read_single(){
		//Criando query
		$query = 'SELECT senha, id FROM ' . $this->table . ' WHERE email = ? LIMIT 1';
		
		//Preparando a execução da consulta
		$stmt = $this->conn->prepare($query);
		
		//Indicando o parâmetro na consulta
		$stmt->bindParam(1,$this->email);
		
		//Executa query
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if($row['senha']!=null){
		$this->senha = $row['senha'];
		$this->id = $row['id'];
	} else {
		$_SESSION['mensagem'] = "E-mail inválido!";
		header('Location:login.php');
	}
	
		return $stmt;
		
	}
    public function create(){
		$query = 'INSERT INTO '. $this->table . ' SET email = :email';
		
		//prepare statement
		$stmt = $this->conn->prepare($query);
		//clean data
		$this->email = htmlspecialchars(strip_tags($this->email));
		
		//binding of parameters
		$stmt->bindParam(':email', $this->email);
		
		//execute the query
		if($stmt->execute()){
			return true;
			
		}
		
		//print erro if something goes wrong
		printf("Error %s. \n", $stmt->error);
		
		return false;
	}
	
	public function update(){
		$query = 'UPDATE '. $this->table . ' SET email = :email WHERE id = :id';
		
		//prepare statement
		$stmt = $this->conn->prepare($query);
		//clean data
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->id = htmlspecialchars(strip_tags($this->id));
		
		//binding of parameters
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $this->id);
		
		//execute the query
		if($stmt->execute()){
			return true;
			
		}
		
		//print erro if something goes wrong
		printf("Error %s. \n", $stmt->error);
		
		return false;
	}
	
	
	public function delete(){
		$query = 'DELETE FROM '. $this->table . ' WHERE id = :id';
		
		//prepare statement
		$stmt = $this->conn->prepare($query);
		//clean data
		$this->id = htmlspecialchars(strip_tags($this->id));
		
		//binding of parameters
		$stmt->bindParam(':id', $this->id);
		
		//execute the query
		if($stmt->execute()){
			return true;
			
		}
		
		//print erro if something goes wrong
		printf("Error %s. \n", $stmt->error);
		
		return false;
	}













}
