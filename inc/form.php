<?php



$errors = [
'firstNameError' => '',
'lastNameError' => '',
'emailError' => '',

];  
if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql ="INSERT INTO users (firstname,lastname,email) values ('$firstname','$lastname','$email')";
    
    if (empty($firstname)) {
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    } elseif(empty($lastname)) {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاول';

    }elseif(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الاسم الاول';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'يرجى ادخال الايميل';
    }else {
        if (mysqli_query($conn,$sql)) {
            header('location:'.$_SERVER['PHP_SELF']);
         } else {
            echo 'fail';
         }
    }
    

    
}
