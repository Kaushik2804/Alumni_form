<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details:</title>
</head>

<body>
    <?php
    echo "First Name :" .$_POST['firstname'] .'<br>'; 
    echo "Last Name: " .$_POST['lastname'] .'<br>';
    echo "Email address: " .$_POST['email'] .'<br>';
    echo "Phone number: ".$_POST['phonenumber'] .'<br>';
    echo "Birthday: " .$_POST['birthday'] .'<br>';
    echo "Hobbies: " .$_POST['hobbies'] .'<br>';
    echo "Gender: " .$_POST['gender'] .'<br>';
    
    if(isset($_FILES["myphoto"])){
            $file_name=$_FILES['myphoto']['name'];
            $file_size=$_FILES['myphoto']['size'];
            $file_tmp=$_FILES['myphoto']['tmp_name'];
            $file_type=$_FILES['myphoto']['type'];
            
            move_uploaded_file($file_tmp,"uploads/".$file_name) .'<br>';
            echo "Image uploaded successfully".'<br>';
    }
    else{
        echo "Image not uploaded successfully".'<br>';
    }
     echo "Branch: " .$_POST['branch'] .'<br>';
     echo "Pass Out Year: ".$_POST['year'] .'<br>';
     echo "Semester 1: ".$_POST['sem1'] ." SGPI" .'<br>';
     echo "Semester 2: ".$_POST['sem2'] ." SGPI" .'<br>';
     echo "Semester 3: ".$_POST['sem3'] ." SGPI" .'<br>';
     echo "Semester 4: ".$_POST['sem4'] ." SGPI" .'<br>';
    ?>
</body>

</html>