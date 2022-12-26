<?php
	if ($_SESSION['id']!="") {
		function ContentLoad($searchElem, $id){
			include("Php_connect.PHP");
			$content_select="SELECT `$searchElem` FROM `content` WHERE `id`='$id'";
			$Load=mysqli_query($conn, $content_select);
			while ($obj = mysqli_fetch_object($Load)) {
		    	echo($obj->$searchElem);
			}
			mysqli_close($conn);
		}


		function commentLoad(){
			include("Php_connect.PHP");
			$elem = "text";
			$login = $_SESSION['login'];
			$data = "SELECT * FROM `comments` WHERE `author` = '$login'";
			$check = mysqli_query($conn, $data);
			if (mysqli_num_rows($check) == 1) {
				echo "<h3 style='text-align:center;'>Ваш комментарий</h3>
				<div style='max-width:50%; align-content: center; margin-left:24%; margin-right:24%;'>";
				$comment_select="SELECT `text` FROM `comments` WHERE `author`='$login'";
				$_Load=mysqli_query($conn, $comment_select);
				while ($obj = mysqli_fetch_object($_Load)) {
			    	echo($obj->$elem);
				}
				mysqli_close($conn);
				echo "</div>";
			}
			else {
				echo "
				<h3 style='text-align:center;'>Оставить комментарий</h3>
				<form method='post' action='addComment.php' style='margin-left: 24%;'>
					<textarea cols='50' rows='10' name='commentText'></textarea>
					<button name='commentButton' type='submit'>Оставить комментарий</button>
				</form>";
			}
		}
	}
	else {
		include 'index.php';
	}
?>