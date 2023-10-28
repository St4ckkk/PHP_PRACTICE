<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    
    <form action="./includes/_handleUpload.php" method="post" enctype="multipart/form-data">
        <label for="uploadFile">Upload File</label>
        <input type="file" name="ufile">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000">
        <button type="submit" name="uploadPic">Submit</button>
    </form>

</body>
</html>