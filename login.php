<?php include 'header.php'; ?>

<h1>Admin Login:</h1>

<form method="post" action="responcePage.php">
    <label for="username">USERNAME:</label><br>
    <input name="username" id="username" type="text" required />
    <br>
    <label for="password">PASSWORD:</label><br>
    <input name="passworkd" id="password" type="password" required />
    <br>
    <button type="submit" value="submit">Submit</button>
</form>


<?php include 'footer.php'; ?>
