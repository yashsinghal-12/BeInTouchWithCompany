<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path Analyzer</title>
   
</head>
<style>
     body{
        font-family: 'Poppins', sans-serif;
       font-weight: 300;
       
    }
   
    body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-color: beige;

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: absolute;
  right: 0;
  margin: 30px;
  max-width: 400px;
  padding: 20px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 90%;
  padding: 20px;
  margin: 10px 0 30px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<body class='bg'>
 <div class="container">
        <h1>Analyze Your path here</h1>
        <form action="path_analyzer.php" method="POST">
            <div class="form-group">
                <label>Enter Your Full Name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="name" 
                    name="name_1" />

                <label>Select your Course</label>
                <select class="form-control" 
                    name="course_1">
                    <option value="0">
                        B.Tech_CS
                    </option>
                    <option value="1">
                        B.Tech_EE
                    </option>
                    <option value="2">
                        B.Tech_CE
                    </option>
                    <option value="3">
                        B.Tech_ME
                    </option>
                    <option value="4">
                        B.Tech_EC
                    </option>
                    <option value="5">
                        B.Pharma
                    </option>
                </select>

                <label>Date</label>
                <select class="form-control" 
                    name="year_1">
                    <option value="0">
                        First Year
                    </option>
                    <option value="1">
                        second year
                    </option>
                    <option value="2">
                        third
                    </option>
                    <option value="3">
                        fourth year
                    </option>
                </select>

            <select class="form-control" 
                    name="tech_1">
                    <option value="0">
                        java
                    </option>
                    <option value="1">
                        cpp
                    </option>
                    <option value="2">
                        pyhton
                    </option>
                </select>

            <select class="form-control" 
                    name="cp_1">
                    <option value="0">
                        basic
                    </option>
                    <option value="1">
                        Moderate
                    </option>
                    <option value="2">
                        Advance
                    </option>
                </select>
                <input class='btn' type="submit" value="submit">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["submit"])) {
            include("path_analyzer_connect.php");
            $name=$_POST['name_1'];
            $course_item=$_POST['course_1'];
            $course_year=$_POST['year_1'];
            $tech=$_POST['tech_1'];
            $cp_level = $_POST['cp_1'];
      
  
            $insert_query="insert into path_analyzer_1(name_1,
            course_1,year_1,tech_1,cp_1)
            values('$name',$course_item,
            '$course_year','$tech','$cp_level')";

            if(mysqli_query($connect_1,$insert_query))
    {
     echo "data inserted";
    }
    else{
     echo "error in data insertion";
    }
}
  
           
        
          
        // if(!mysqli_query($con,$q))
        // {
            // echo "Value Not Inserted";
        // }
        // else
        // {
            // echo "Value Inserted";
        // }
    ?>
</body>
  
</html>
        
       