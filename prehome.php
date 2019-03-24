<?php

	session_start();
	
	require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass, user_type FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
			//	if(password_verify($upass, $userRow['user_pass']))
				{
					//$_SESSION['user_session'] = $userRow['user_id'];
					$_SESSION['user_type'] = $userRow['user_type'];
					return true;
				}
			//	else
				//{
				//	return false;
			//	}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	}
	$session = new USER();
	
	if(trim($_SESSION['user_type']) == "Admin")
	{
	
	//echo 'admin';
	header("Location: home.php");
	
	}
	elseif(trim($_SESSION['user_type']) == "pi")
	
	
	{
	
	//echo 'admin';
	header("Location: PI-dashboard.php");
	
	}
	else
	{
	
	header("Location: clienthome.php");
	
	}
	
?>

