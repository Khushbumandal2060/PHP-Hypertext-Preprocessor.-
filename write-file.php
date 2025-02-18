<?php 
if(isset($_POST['filename'])){
    $fileName = "files/".$_POST['filename']; 
    //$content =  "files/this is a dummy file"; 
    $content=$_POST['filename'];
    $file = fopen($fileName, "w") or die("Unable to create file"); 
     fwrite($file, $content); 
     fclose($file);
     echo "File created successfully"; 
}

?>

<form action="" method="post">
    <input type="text" placeholder="enter file name" name="filename" />
    <br />
    <br />
    <textarea name="content">

    </textarea>
    <br />
    <br />
    <button>Create File</button>
</form>
