<?php
if(isset($_POST['submit'])) {
    //set the json file
    $file = 'bu_students.json';
    //Read the json file content
    $str_data = file_get_contents($file);
    //convert json object to php associative array
    $json_data = json_decode($str_data, true);

    //remove submit from our POST array, we dont want to add it to the file
    unset($_POST['submit']);

    //Write your code only for the missing functionality

    $firstName = filter_input(INPUT_POST,'firstName');
    $lastName = filter_input(INPUT_POST,'lastName');
    //Validate inputs
    if($firstName == FALSE ||$firstName == null || $lastName == FALSE || $lastName == null){
        $error_message = "Invalid student data. Check all fields and try again.";
        include 'error.php';
    }else{
        //get form data
        $newstudents['firstName'] = $firstName;
        $newstudents['lastName'] = $lastName;
        array_push($json_data['students'],$newstudents);

    }

    //Create a new student, populate it and append it to the bu_students

    $fh = fopen($file, 'w') or die("Error opening output file");
    fwrite($fh, json_encode($json_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    fclose($fh);
    header('Location:success.php');

}else{
    echo 'Sorry, nothing was submitted.';
}

?>



