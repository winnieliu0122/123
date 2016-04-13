<html>
	<head>
		<title>
			巴里島旅行-參加者資料
		</title>
	</head>
	<body>
		<body bgcolor="#D4FFFF">
	
		<center><img src="http://www.festour.com.tw/board/bali/2000x500/bali.jpg"
		width="100%" height="40%"></image></center>
		<center>
		<br>
		<font size="5" color=#828282><b>.......................................所有參加者資料.......................................</b></font>
		<br>
		<br>
		<font size="4" color=#171717><b>
		<?php
			@mysql_connect("127.0.0.1","root","peter8765164!") ;
		
			mysql_select_db("bali_travel");
			$sql="SELECT * FROM user";
			$sql2=mysql_query($sql);
			$i=1;
			while($result=mysql_fetch_row($sql2))
			{
				echo $i;
				echo ".";
				echo "姓名：";
				echo $result[1];
				echo "　性別：";
				echo $result[2];
				echo "　血型：";
				echo $result[3];
				
				echo $result[4];
				echo "　生日：";
				echo $result[5];
				echo "/";
				echo $result[6];
				echo "/";
				echo $result[7];
				echo "　身分證字號：";
				echo $result[8];
				echo "　戶籍地址：";
				echo $result[9];
				echo "<br>";
				echo "　室話：";
				echo $result[10];
				echo "-";
				echo $result[11];
				echo "　手機：";
				echo $result[12];
				echo "　特別服務：";
				echo $result[13];
				echo "　建議事項：";
				echo $result[14];
				
				echo "<br>";
				echo "<br>";
				$i=$i+1;
			}
		?>
		
		<font size="5" color=#828282><b>..........................................................................................................</b></font>
		
		<center><font size="4" color=#FFA600>●●　回主畫面　●●</center>
		<a href="http://127.0.0.1/work-travel.php">
		<img src="http://star.morningstar.com.tw/epaper/humor/img/arrow.gif"
		width="5%" height="10%"></img></a>
		<br>
		<br>
		<br>
		<center><font size="2" color=#000000>designed by Frank Meng</center>
		<center><font size="2" color=#000000>Copyright 2006 National University of Kaohsiung</center>
	</body>
</html>