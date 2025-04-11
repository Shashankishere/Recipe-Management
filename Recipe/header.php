<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="styles/header.css" />
    <script src="https://kit.fontawesome.com/0ba0f621bd.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="headerLeft">
            <a href="/Recipe/home.php">
                <img id="logo" src="/Recipe/images/logo.png" alt="logo" />
            </a>
        </div>
        <div class="headerRight">
            <div>
                <a id="login" href="/Recipe/UserLoginPage.php">
                    <i class="fas fa-user"></i> Login
                </a>
                <br />
                <a id="register" href="/Recipe/UserRegistrationPage.php">
                    <i class="fas fa-user-plus"></i> Register
                </a>
            </div>
            <a href="/Recipe/user-search.php">
                <i id="searchIcon" class="fas fa-search fa-2x"></i>
            </a>
        </div>
        <div class="navBar">
            <ul>
                <li><a href="/Recipe/home.php">Home</a></li>
                <li><a href="/Recipe/recipe/recipes.php">Recipes</a></li>
                <li><a href="/Recipe/contact-us.php">Contact Us</a></li>
                <li><a href="/Recipe/user-dashboard/user-dashboard.php">Dashboard</a></li>
            </ul>
        </div>
    </div>
</body>

</html>
