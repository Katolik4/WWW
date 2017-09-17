<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.html');
		exit();
	}

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
					$row = mysqli_fetch_assoc($rezultat);
					$odpd = $row['odpd'];
					$answer = $row['answer'];
					$kategoria = $row['kategoria'];
					$rok = $row['rok'];		
		
echo<<<END
<td width="50" align="center">$id</td>
<td width="100" align="center">$tresc</td>
<td width="100" align="center">$odpa</td>
<td width="100" align="center">$odpb</td>
<td width="100" align="center">$odpc</td>
<td width="100" align="center">$odpd</td>
<td width="100" align="center">$answer</td>
<td width="100" align="center">$kategoria</td>
<td width="50" align="center">$rok</td>
</tr><tr>
END;
				}
				
				
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: ESP.php');
					
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Brak wpisów</span>';
				header('Location: logowanie.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>