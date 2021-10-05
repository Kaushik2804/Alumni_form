<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</form>
    </title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $birthday=$_POST['birthday'];
            $hobbies=$_POST['hobbies'];
            $genderType=$_POST['gender'];
            $branch=$_POST['branch'];
            $year=$_POST['year'];
            $sem1=$_POST['sem1'];
            $sem2=$_POST['sem2'];
            $sem3=$_POST['sem3'];
            $sem4=$_POST['sem4'];
            $sem5=$_POST['sem5'];
            $sem6=$_POST['sem6'];
            $sem7=$_POST['sem7'];
            $sem8=$_POST['sem8'];
        }

        if(isset($_POST['year'])){
            $yearType=$_POST['year'];
        }

        if(isset($_POST['branch'])){
            $branchType=$_POST['branch'];
        }

        if(isset($_POST['gender'])){
            $genderType = $_POST['gender'];
        }
        ?>

    </div>
    <div>
        <form action="process.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <p>
                    <b>
                        <marquee direction="right">Fill the form carefully</marquee>
                    </b>
                </p>
                <div class="header">
                    <img src="logo.png" alt="banner" />
                </div>
                <br />

                <span class="nav">
                    <nav>
                        <a target="_blank" href="#">Home</a> |
                        <a target="_blank" href="#">Admission</a> |
                        <a target="_blank" href="#">About us</a>
                    </nav>
                </span>
                <br />


                <div class="basic">
                    <fieldset>
                        <legend>Basic Information:</legend>
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" name="firstname" required> <br> <br>

                        <label for="lastname"><b>Last Name</b></label>
                        <input type="text" name="lastname" required> <br><br>

                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" required> <br><br>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input type="number" name="phonenumber" required> <br> <br>

                        <label for="birthday"><b>Birthday</b></label>
                        <input type="date" name="birthday" required> <br><br>

                        <label for="hobbies"><b>Hobbies</b></label>
                        <input type="text" name="hobbies" required> <br><br>

                        <label for="gender"><b>Gender:</b></label> <br>
                        <input type="radio" name="gender" value="Male" /> Male <br>
                        <input type="radio" name="gender" value="Female" /> Female<br>
                        <input type="radio" name="gender" value="Others" /> Other <br>
                </div>
                </fieldset>

                <div class="academics">
                    <fieldset>
                        <legend>Academics Information:</legend>
                        <label>Photo:</label>
                        <input type="file" name="myphoto" /> <br />
                        <br />
                        <label>Branch:</label>
                        <select name="branch">
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="EXTC Engineering">EXTC Engineering</option>
                            <option value="IT Engineering">IT Engineering</option>
                        </select>
                        <br />
                        <br />
                        <label>Pass out year:</label>
                        <select name="year">
                            <option value="2017-18">2017-18</option>
                            <option value="2018-19">2018-19</option>
                            <option value="2019-20">2019-20</option>
                            <option value="2020-21">2020-21</option>
                        </select>
                        <br />
                        <br />
                        SGPI of the following semesters: <br />
                        <br />
                        <label class="row"> 1st Sem: </label>
                        <input type="text" name="sem1" />
                        <label> 2nd Sem: </label>
                        <input type="text" name="sem2" /> <br />
                        <label> 3rd Sem: </label>
                        <input type="text" name="sem3" />
                        <label> 4th Sem: </label>
                        <input type="text" name="sem4" /> <br />
                        <label> 5th Sem: </label>
                        <input type="text" name="sem5" />
                        <label> 6th Sem: </label>
                        <input type="text" name="sem6" /> <br />
                        <label> 7th Sem: </label>
                        <input type="text" name="sem7" />
                        <label> 8th Sem: </label>
                        <input type="text" name="sem8" />
                    </fieldset>
                </div>

                <div class="button">
                    <input type="submit" name="create" value="Submit">
                </div>
                <footer class="foot">
                    Contact us at
                    <a target="_blank" href="https://www.sjcem.edu.in/">SJCEM</a>
                    <br />
                    &copy 2021 By St John College of Engineering and Management
                </footer>
        </form>
    </div>
    </div>
    </form>
    </div>
</body>

</html>