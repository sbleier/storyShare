<?php include 'header.php'; ?>

<h1>Admin Login:</h1>

<form method="post" action="login_response.php">
    <label for="username">USERNAME:</label><br>
    <input name="username" id="username" type="text" required />
    <br>
    <label for="password">PASSWORD:</label><br>
    <input name="passworkd" id="password" type="password" required />
</form>

<?php include 'footer.php'; ?>