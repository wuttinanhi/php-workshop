<?php

$username = htmlspecialchars($_POST["username"]);
if ($username) {
    echo "Hello " . $username;
}
?>



<html>

<body>
    <br>
    <form method="post" action="index.php">
        Username: <input type="text" name="username" /><br>
        Password: <input type="password" name="password" />
        <input type="submit" />
    </form>
</body>

</html>