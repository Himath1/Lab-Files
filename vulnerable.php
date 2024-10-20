
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path Traversal Lab</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- <div class="container">
        <h1>Path Traversal Vulnerability Lab</h1>
        <p>To complete this lab, retrieve the hidden file and trigger an alert box with a flag.</p>
        <form method="GET" action="vulnerable.php">
            <label for="filename">Enter a filename:</label>
            <input type="text" id="filename" name="file" placeholder="example.txt">
            <button type="submit">Submit</button>
        </form>
    </div> -->

    <div id="congrats-message" class="hidden">
        <h2>🎉 Congratulations, you have solved this lab! 🎉</h2>
        <div class="popper"></div>
        <div class="popper"></div>
        <div class="popper"></div>
    </div>



<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // This is the vulnerable line where path traversal can happen.
    $filepath = 'files/' . $file;

    if (file_exists($filepath)) {
        echo '<h3>File content:</h3>';
        echo '<pre>' . htmlspecialchars(file_get_contents($filepath)) . '</pre>';
    } else {
        echo '<h3> </h3>';
    }

    // Path traversal solution: 
    // Use ../../../secret.txt to access a hidden file.

    if ($file === '../../../secret.txt') {
        echo "<script>alert('Flag: FLAG{path_traversal_success}')</script>";
        echo "<script>showCongratsMessage();</script>";
    }
}
?>


</body>
</html>