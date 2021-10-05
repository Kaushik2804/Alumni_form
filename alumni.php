<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Alumni Registration</title>
</head>

<body>

    <div class="container">


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
                <label for="firstname"> Firstname </label>
                <input type="text" name="firstname"> <br />
                <br />
                <label for="middlename"> Middlename: </label>
                <input type="text" name="middlename" /> <br />
                <br />
                <label for="lastname"> Lastname: </label>
                <input type="text" name="lastname" /> <br />
                <br />
                <label> Gender : </label><br />
                <input type="radio" name="Male" /> <br />
                <input type="radio" name="Female" /> <br />
                <input type="radio" name="Other" /> <br />
                <br />
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br /><br />
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" /><br /><br />
                <label for="hobbies">Hobby</label>
                <input type="text" id="hobbies" name="hobbies" /><br /><br />
            </fieldset>
        </div>
        <br />
        <div class="academics">
            <fieldset>
                <legend>Academics Information:</legend>
                <label>Photo:</label>
                <input type="file" name="myphoto" /> <br />
                <br />
                <label>Branch:</label>
                <select name="branch">
                    <option value="">Computer Engineering</option>
                    <option value="">Mechanical Engineering</option>
                    <option value="">Civil Engineering</option>
                    <option value="">EXTC Engineering</option>
                    <option value="">IT Engineering</option>
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

        <input type="submit" names="submit" value="Submit" />
        <footer class="foot">
            Contact us at
            <a target="_blank" href="https://www.sjcem.edu.in/">SJCEM</a>
            <br />
            &copy 2021 By St John College of Engineering and Management
        </footer>
        </form>
    </div>
</body>

</html>