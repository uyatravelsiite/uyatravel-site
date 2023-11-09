<?php


$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true;

// Define the navigation items
$navItems = array(
    array('text' => 'Home', 'url' => 'index.php'),
    array('text' => 'About', 'url' => 'about.php'),
    array('text' => 'Services', 'url' => 'deals.php'),
    array('text' => 'Contact', 'url' => 'contact.php')
);

// Add either "Login" or "Logout" based on the login status
if (!$isLoggedIn) {
 
    $navItems[] = array('text' => 'Logout', 'url' => 'logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>uyaTRAVEL</title>

    <style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.nav-links ul {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
}

.burger-menu {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.bar {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 3px 0;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: center;
  }

  .nav-links {
    display: none;
  }

  .nav-links.show {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .burger-menu {
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
  }

  .bar {
    margin: 3px 0;
  }
}

    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">uyaTRAVEL</div>
            <nav class="nav-links">
                <ul>
                    <?php foreach ($navItems as $item) : ?>
                        <li><a href="<?php echo $item['url']; ?>"><?php echo $item['text']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="burger-menu">
                <?php if (!$isLoggedIn) : ?>
                    <!-- Display "Login" for logged-out users -->
                    <div class="bar"><a href="LogIn.php">Login</a></div>
                <?php else : ?>
                    <!-- Display "Logout" for logged-in users -->
                    <div class="bar"><a href="logout.php">Logout</a></div>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <script>
        const burgerMenu = document.querySelector('.burger-menu');
        const navLinks = document.querySelector('.nav-links');

        burgerMenu.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                navLinks.classList.remove('show');
            }
        });
    </script>
</body>

</html>
