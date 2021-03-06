<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="chatbot.css">
<link rel="stylesheet" type="text/css" href="responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="jquery.convform.css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.convform.js"></script>
<script type="text/javascript" src="chatbot.js"></script>
<?php require_once "homepageHeader.php" ?>
</head>
<body>
<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">
        <input type="text" name="name" data-conv-question="Please, Enter your name">

        <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <select data-conv-question=" How can I help you" name="category">
        <option value="WebNav">Website Navigation?</option>
        <option value="bookSea">Book Search ?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="WebNav">
        <input type="text" data-conv-question="You can access all the book categories from the navigation bar" data-no-answer="true">  
        </div>
        <div data-conv-case="bookSea" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="What Book are you searching for?"> 
          <input type="text" data-conv-question="Narrow your search and use the Search Bar." data-no-answer="true">
        </div>
      </div>

      <select data-conv-question="Please Conform">
        <option value="Yes">Conform</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end -->
</body>
</html>


<div class="container">
    <h3 class="col-md-12 py-3 my-3" style="background: grey; color: white">Recommended books</h3>
</div>


<div class="container">
    <h3 class="col-md-12 py-3 my-3" style="background: grey; color: white">All books</h3>
</div>
<?php require_once "homepageFooter.php" ?>