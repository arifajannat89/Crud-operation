<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
	

.hero-image {
  background-image: url("https://cdn.wallpapersafari.com/49/34/ftBCER.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 

  color:white;
}
.liza{

  font-family: "Times New Roman", Times, serif;
}

</style>

</head>
<body class="hero-image">
	<h1 class="text-center mt-5 liza" > <br><br><b>Welcome to Blood Bank</h1>
		<div class="row mt-5">
			<div class="col-4">
				
				
			</div>
			<div class="col-4 text-center">
				<a class="btn btn-secondary" href="{{route('Blood1.create')}}">Register</a>	
    <a class="btn btn-success" href="{{route('Blood1.index')}}">View</a>
				
			</div>
			<div class="col-4">
				
				
			</div>

			
		</div>
	
</body>
</html>