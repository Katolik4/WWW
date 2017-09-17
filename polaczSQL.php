<?php

	session_start();
	
	require_once "connect.php";

	$polaczenie1 = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie1->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		if ($rezultat = @$polaczenie1->query(
		sprintf("SELECT * FROM ESP",
		mysqli_real_escape_string($polaczenie1))))
		{
			$ile1 = $rezultat1->num_rows;
			if($ile1>0)
			{
				
					$wiersz = $rezultat1->fetch_assoc();
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
					
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Brak wpisów</span>';
				header('Location: logowanie.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>