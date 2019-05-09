<html>
<head>
    <title>mostrar datos</title>
</head>
<body>
		<?php
			try
			{
			$host="tcp:hacktalent.database.windows.net, 1433";
			$user="luisgr95";
			$pwd="dqeea95i#";
			$db="baseddatos";
			$conn=new PDO ("sqlsrv:Server = $host; Database = $db",$user,$pwd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql=("SELECT * form IED ");
			$stmt = $conn->query("$sql");
			$row = $stmt->fetch();
			echo "$row[0]" $row[1] $row[2];
			$conn= NULL;
			}catch(Exception $e){die(print_r($e));}
			?>
</body>
</html>