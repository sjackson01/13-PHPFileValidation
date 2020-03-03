<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <title>Upload an RTF Document</title>
   </head>
   <body>
  

    
  <form enctype="multipart/form-data" action="upload_rtf.php" method="post">
     <input type="hidden" name="MAX_FILE_SIZE" value="524288">
     <fieldset><legend>Select an RTF document of 512KB or smaller to be uploaded:</legend>
     <p><strong>File:</strong> <input type="file" name="upload"></p>
     </fieldset>
     <div align="center"><input type="submit" name="submit" value="Submit"></div>  </form>
  </body>
</html>