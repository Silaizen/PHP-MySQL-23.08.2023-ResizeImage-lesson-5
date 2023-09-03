<h1>Uploads</h1>

<?php Message::get() ?>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id=""> <br>
    <button class="btn btn-primary" name="action" value="sendFile">Send</button>
</form>

<?php
// считка файлов - способы
// 1
// $files = scandir('./upload');
// $files = array_diff($files, ['.', '..']);
// dump($files);

// foreach ($files as $file) {
//     if(!is_dir("upload/$file"))
//     echo "<img src='upload/$file'>";
// }


// 2
// $files = glob('upload/*.{jpg,jpeg, png,webp,avif}', GLOB_BRACE);
// foreach ($files as $file) {
//     echo "<img src='$file'>";
// }
// dump($files);


?>