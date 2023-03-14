<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Form </title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Upload a File</h1>
            <div class="upload-container">
                <div class="border-container">
                    <div class="icons fa-4x">
                        <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                        <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                        <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                    </div>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="file" id="file-upload" name="filesToUpload">
                        <p>Drag and drop files here, or
                            <a href="#" id="file-browser">browse</a> your computer.
                        </p>
                        <button type="submit">Upload</button>
                    </form>
                    <p class="response"> <?php echo $FileValidation ?> </p>
                </div>
            </div>
        </div>
    </div>