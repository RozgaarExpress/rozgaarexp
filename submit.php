<?php

if(is_array($_POST)) {
	$targetPath = "images/".$_FILES['profileimage']['name'];
	$sourcePath = $_FILES['profileimage']['tmp_name'];

if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
<?php

}
}
?>