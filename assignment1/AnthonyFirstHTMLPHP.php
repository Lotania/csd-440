<!DOCTYPE html>
<html>
<head>
    <title>PHP in HTML Example</title>
</head>
<body>
    <h1>This is stat(dynam)ic HTML content</h1>
    <?php
        // PHP code starts here
        $user = "World";
        echo "<p>Hello, " . $user . "!</p>"; // This outputs dynamic HTML
    ?>
    <p>This is also static HTML content.</p>
</body>
</html>