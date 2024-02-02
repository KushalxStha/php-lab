<!-- Write a Program to upload a file in PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>

<body>

    <?php
    $uploadDirectory = "uploads/";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
        $targetFile = $uploadDirectory . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>
        <input type="submit" value="Upload File">
    </form>

</body>

</html>