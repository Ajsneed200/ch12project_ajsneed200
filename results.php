<!DOCTYPE HTML>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="styles/main.css" media = "screen, print" />

    </head>

    <body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"); {
        $email = trim($_POST["email"]);
        $sanitize_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if (empty($sanitize_email)) {
            $error;
        }

        if (!empty($error)) {
            $class = "error";
            echo "<h4>Error: Field must be filled out.</h4>";
        } else {
            $class = "success";
        }

        $server = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "taus_data";

        $connect = mysqli_connect($server, $username, $password, $database);

        if (!$connect) {
            die("Connection Failed: " .mysqli_connect_error());
        }

        if ($connect_email) {
            echo "<div class='message'>";
            echo "Student was Found";
            echo "</div>";
        } else {
            echo "<div class='message'>";
            echo "Student was Not Found";
            echo "</div>";
        }  
    }
    ?>
    <a href= "index.php">Return</a>
    </body>

    </html>
