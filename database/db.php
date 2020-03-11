/*データベースの接続設定*/
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "mentor_member";
 
/*データベースに接続*/
$conn = mysql_connect($server, $user, $password);
mysql_select_db($dbname);