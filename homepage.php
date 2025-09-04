<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ff7e5f !important; /* Explicitly set the background color */
    }

    header {
      background-color: #333;
      padding: 20px;
      text-align: center;
      font-size: 35px;
      color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
    }

    header h2 {
      margin: 0;
    }

    section {
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
      justify-content: space-between;
    }

    nav {
      width: 25%;
      background-color: #444;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    nav ul {
      list-style-type: none;
      padding: 0;
    }

    nav ul li {
      margin-bottom: 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 18px;
      padding: 8px 15px;
      display: block;
      border-radius: 5px;
      background-color: #555;
      transition: background-color 0.3s;
    }

    nav ul li a:hover {
      background-color: #777;
    }

    article {
      width: 70%;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #333;
      padding: 10px;
      text-align: center;
      color: white;
      margin-top: 20px;
      border-radius: 8px;
    }

    footer p {
      margin: 0;
    }

    @media (max-width: 768px) {
      nav, article {
        width: 100%;
        margin-bottom: 20px;
      }
    }

    @media (max-width: 480px) {
      header {
        font-size: 28px;
      }

      nav ul li a {
        font-size: 16px;
      }
    }

  </style>
</head>
<body>

<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="homepage.php?page=london">London</a></li>
      <li><a href="homepage.php?page=paris">Paris</a></li>
      <li><a href="homepage.php?page=tokyo">Tokyo</a></li>
      <li><a href="homepage.php?page=rome">Rome</a></li>
      <li><a href="homepage.php?page=hongkong">Hongkong</a></li>
      <li><a href="homepage.php?page=manila">Manila</a></li>

    </ul>
  </nav>
  
  <article>
    <?php
    if (isset($_GET['page'])){
        $page=$_GET['page'];
        switch($page){
            case 'london';
            include 'london.php';
            break;
                case 'paris';
                    include 'paris.php';
                    break;
                        case 'tokyo';
                            include 'tokyo.php';
                            break;
                            case 'rome';
                            include 'rome.php';
                            break;
                            case 'hongkong';
                            include 'hongkong.php';
                            break;
                            case 'manila';
                            include 'manila.php';
                            break;
        }
    }
    ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
