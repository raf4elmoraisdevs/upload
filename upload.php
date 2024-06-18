// upload.php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is an actual MP4
if(isset($_POST["submit"])) {
  if($videoFileType != "mp4") {
    echo "Desculpe, apenas arquivos MP4 são permitidos.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Desculpe, o arquivo já existe.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) { // 50MB
  echo "Desculpe, seu arquivo é muito grande.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo não foi enviado.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo ". htmlspecialchars(basename( $_FILES["fileToUpload"]["name"])). " foi enviado.";
  } else {
    echo "Desculpe, houve um erro ao enviar seu arquivo.";
  }
}
?>
