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
		if ($rezultat = @$polaczenie->query("SELECT * FROM ESP"))
		{
			$ile = $rezultat->num_rows;
			if($ile>0)
			{
				
					$wiersz = $rezultat->fetch_assoc();
					$IDESP = $wiersz['IDESP'];
					$IDCHIP = $wiersz['IDCHIP'];
					$Status = $wiersz['Status'];
					$Data_stamp = $wiersz['Data_stamp'];

					echo "IDESP =" $IDESP;
					echo "IDCHIP =" $IDCHIP;
					echo "Satus =" $Status;
					echo "Data =" $Data_stamp;
					
							
				
					unset($_SESSION['blad']);
					$_SESSION['ESP_ok']=true;
					$rezultat->free_result();
					header('Location: ESP.php');
					
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Brak wpisów</span>';
				header('Location: ESP.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>