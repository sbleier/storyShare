<?php include 'header.php'; ?>

<h1>Admin Login:</h1>

<form method="post" action="responsePage.php">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username" required />
    <br>
    <label for="password">Password:</label><br>
    <input type="password" name="passworkd" id="password" required />
    <br>
    <button type="submit" value="login">Submit</button>
</form>


<?php include 'footer.php'; ?>
