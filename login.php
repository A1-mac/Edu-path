<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="fdiv">
        <form method="POST" action="">
            <H2 class="head">LOGIN</H2>
            <h4 class="itali" > <i>Don't have an account ? <a href="signup.html">Create Account</a> </i> </h4><br><br>
            <input type="email" name="email" class="inputst" placeholder="Email" required>
            <?php if (!empty($emailError)): ?>
                <p class="error-message"><?php echo $emailError; ?></p>
            <?php endif; ?><br>
            <input type="password" name="password" class="inputst" placeholder="Password" required>
            <?php if ($passwordError): ?>
                <p class="error-message"><?php echo $passwordError; ?></p>
            <?php endif; ?><br>
            <h4 class="itali1" > <i>Forgot your password ? <a href="reset.html">Forget now</a> </i> </h4>
            <button type="submit" class="btn">Login</button>
            <button type="reset" class="btn btn-clear">Clear</button>
        </form>
    </div>
    <?php if ($loginSuccess): ?>
        <div class="popup success" id="successPopup">
            <div class="check-icon">✔</div>
            <div class="message">Successful Login!</div>
            <button class="close-btn" onclick="redirectToIndex()">Close</button>
        </div>
    <?php endif; ?>
    <?php if ($loginSuccess): ?>
    <script>
        document.getElementById("successPopup").style.display = "block";
    </script>
<?php endif; ?>

<script>
    // Function to redirect to index.php after the popup is closed
    function redirectToIndex() {
        window.location.href = "index.php";  // Redirects to index.php
    }
</script>

</body>
</html>

<!-- HTML Form -->

