
session_start();
if(session_destroy())
{
	header('Location: http://localhost/to_do');
}
?>