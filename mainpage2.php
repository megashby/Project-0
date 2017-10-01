<!Doctype html>
<html>

<head>
    <title>Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <h1>Pho-toh</h1>
    <hr width="700">
    <hr width="1000" align="left">
    <hr width="1000" align="right">
    <hr width="1000" align="left">
    <hr width="1000" align="right">
    <h3>Website</h3>
</head>

<body>
    <style>
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid black;
        margin: 1em 0;
        padding: 0; 
        margin:8px;
    }
    h3{
        font-family: "Helvetica";
        text-align: center;
        margin: 10px;
    }
    html{
        min-height: 100%;
    }
    body{
        background: linear-gradient(to right, #FF8C00 0%, #ffffff 100%);
    }
    h1{
        font-family: "Helvetica";
        font-size: 65px;
        text-align: center;
    }
    img{
        border: 3px solid black ;
    }
    a{
        border: 1px solid solid black;
        position: relative;
    }
    .btn-first {
        background-color: white;
        color: black;
        margin: 0 0 20px;
    }
    .btn-second {
        background-color: white;
        color: black;
        margin: 0 0 20px;
    }
    .btn-third {
        background-color: white;
        color: black;
        margin: 0 0 20px;
    }
    </style>

    <p align="center">
        <img src="https://c1.staticflickr.com/6/5470/9627383721_9f4b809956_b.jpg">
    </p>

    <form action="getdata.php" method="POST" enctype="multipart/form-data">
        <input class = 'btn btn-first' type="file" name="myimage">
        <input type="submit" value="Upload" name="submit_image">
    </form>
	
    <a href="index.html">
        <button type="button"> Logout </button>
    </a>

	<iframe src="passwd.txt">
    
	<?php
		$file = "pages/file.txt";
		if(isset($_POST))
		{
			$postedHTML = $_POST['html']; // You want to make this more secure!
			file_put_contents($file, $postedHTML);
		}
	?>
	<form action="" method="post">
		<?php
		$content = file_get_contents($file);
		echo "<textarea name='html'>" . htmlspecialchars($content) . "</textarea>";
		?>
		<input type="submit" value="Edit page" />
	</form>
	
</body>

<!-- <footer class="container">
    <div class="row text-center">
      <a class="btn btn-first" href="#">Choose File</a>
    </div>
    <div class="row text-center">
      <a class="btn btn-second" href="#">Upload Image</a>
    </div>
    <div class="row text-center">
      <a class="btn btn-third" href="#">Logout</a>
    </div>
</footer> -->
</html>