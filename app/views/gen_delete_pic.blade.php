<!DOCTYPE html>
<html>
<head>

	<title>(Picture to Delete)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page  -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( (!$found_Pic) )
	<h1>Picture Does not exist in the Database</h1>	
	<li><a href='/delete_pic'>Try Again - Delete an Existing Picture from the Database</a></li>	
    @else
	<h1>Picture Title</h1>
		<h2>Picture Deleted = {{{ $pic_name }}} </h2>	 
	@endif
	
	<br>
	
	<br>
		
</body>
</html>