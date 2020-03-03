<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Upload an RTF Document</title>
    </head>
    <body>
    <?php # Script 13.3 - upload_rtf.php 
    // Check if the form has been submitted: 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){    

        // CHeck for an uploaded file:
        if (isset($_FILES['upload']) && file_exists($_FILES['upload']['tmp_name'])){
            // Validate the type RTF
            // Create the resource:
            $fileinfo = finfo_open(FILEINFO_MIME_TYPE);

            //Check the file:
            if (finfo_file($fileinfo, $_FILES['upload']['tmp_name']) == 'text/rtf'){

                //Indicate it's okay
                echo '<p><em>The file would be acceptalbe!</em></p>';

                // In theory, move the file over. In reality, delte the file: 
                unlink($_FILES['upload']['tmp_name']);
            }else{

                echo '<p style="font-weight: bold; color: C#00"> Please upload an RTF document.</p>';    

            }
            // Close the resource:
            finfo_close($fileinfo);
        }    
    }
    ?>
    <form enctype="multipart/form-data" action="index.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="524288">
            <fieldset>
                <legend>Select an RTF document of 512KB or smaller to be uploaded:</legend>
                <p><strong>File:</strong> <input type="file" name="upload"></p>
            </fieldset>
        <div align="center">
            <input type="submit" name="submit" value="Submit">
        </div> 
    </form>
    </body>
</html>