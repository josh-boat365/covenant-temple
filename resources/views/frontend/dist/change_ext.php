<?php
// Specify the directory where the files are located
$directory = './';

// Open the directory
if ($handle = opendir($directory)) {
    // Loop through the directory
    while (false !== ($file = readdir($handle))) {
        // Check if the file is a regular file and ends with ".html"
        if (is_file($directory . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            // Generate the new filename with the ".blade.php" extension
            $newFilename = $directory . pathinfo($file, PATHINFO_FILENAME) . '.blade.php';

            // Rename the file
            if (rename($directory . $file, $newFilename)) {
                echo "File '{$file}' renamed to '{$newFilename}'<br>";
            } else {
                echo "Error renaming '{$file}' to '{$newFilename}'<br>";
            }
        }
    }
    closedir($handle);
}
?>
