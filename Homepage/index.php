<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>BiblioTeca</title>
    
    <link rel="stylesheet" href="homepageHeaderstyle.css">
</head>
<body>
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo">BiblioTeca</div>
        <div class="nav-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">Novels</a></li>
            <li><a href="#">Textbooks</a></li>
            <li><a href="#">Journals</a></li>
            <li><a href="#">Articles</a></li>
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
        <a name="login" id="login" class="btn btn-primary" href="/SWE-G3-Project/login.php" role="button">Login</a>
    </nav>

    <div class="container container-fluid">
        <h2 class="display-4 text-center">Ashesi</h2>
        <h3 class="display-5 text-center">Online Library</h3>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search books, articles, journals, textbooks" aria-label="Search"
              aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
    
    <?php include_once "homepageFooter.php" ?>

    
</body>
</html>