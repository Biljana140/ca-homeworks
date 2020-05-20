<?php 
// validate with isset() if $_POST variables name, email and message are set(exist)
// if ( file_exists($_POST['email']) && ($_POST['message']) &&is_readable($_POST['email'])&& ($_POST['message']){
//     echo "File ".($_POST['email']). "and file " .($_POST['message']).  " is found.<br>";
//     $content = file_get_contents ($_POST['email']) && ($_POST['message']);
//     var_dump($content);
// }




$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";
$file = "EXAMPLE_requests.txt";

if (!empty($name) && !empty($email) && !empty($message)) {
    $str = $name." | ".$email." | ".$message."\n";
    file_put_contents($file, $str, FILE_APPEND);
    echo "<h3>Your request is saved and we will contant you soon via email!</h3>";

}
 else {
     echo "<script>alert('Please fill all fields!')</script>";
     echo "<button><a href='http://app.test/Homework26/contact_form/index.php'>Go back</a></button>";
}














// create a string of POST data in format  name | email | message use "\n" to create end of line in file
// for example: alex | alex@app.com | Hello this is my message 

// use file_put_contents()  to  save form data in file requests.txt  use FILE_APPEND to append to the file (not overwrite it)
// check documentation https://www.php.net/manual/en/function.file-put-contents.php for examples

// inform user with Echo that his request is saved and he will be contacted soon via email
 
?>