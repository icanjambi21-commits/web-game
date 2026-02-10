<?php include "auth_owner.php"; ?>

<!DOCTYPE html>
<html>
<head><title>Upload Game</title></head>
<body>

<h2>Upload Game</h2>

<form method="post" enctype="multipart/form-data">
    <input type="text" name="judul" placeholder="Judul Game" required><br><br>
    <input type="file" name="filegame" required><br><br>
    <button name="upload">Upload</button>
</form>

<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['filegame'];
    $nama = time() . "_" . $file['name'];

    move_uploaded_file($file['tmp_name'], "game/" . $nama);
    echo "<p style='color:green'>Upload berhasil!</p>";
}
?>

</body>
</html>
