<?php

	session_start();
	
	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM ESP'",
		mysqli_real_escape_string($polaczenie))))
		{
			$ile = $rezultat->num_rows;
			if($ile>0)
			{
				for ($i=1; $i <= $ile; $i++)
				{
					$wiersz = $rezultat->fetch_assoc();
					$IDESP = $wiersz['IDESP'];
					$IDCHIP = $wiersz['IDCHIP'];
					$Status = $wiersz['Status'];
					$Data_stamp = $wiersz['Data_stamp'];		
				}
				
				
					unset($_SESSION['blad']);
					$rezultat->free_result();
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Brak wpisów</span>';
				header('Location: logowanie.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>