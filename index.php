<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header"><br>
                    <h1> Student Registration Form </h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-3">
                    <form  class= "first" method="post" action="registersubmit.php">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="name">Name:</span>
                            </div>
                            <input type="text" name="Name" placeholder="Student full Name" required class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="roll"> PRN No.:</span>
                            </div>
                            <input type="text" name="rollno" placeholder="Student college PRN No." required class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="class">Year:</span>
                            </div>
                            <input type="text" name="class" placeholder=" current year" required class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="birth"> Date of Birth::</span>
                            </div>
                            <input type="date" name="dob" required class="form-control">

                        </div>
            
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="enroll"> Address:</span>
                            </div>
                            <input type="text" name="address" placeholder="Student address" required class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Phone Number:</span>
                                <span class="input-group-text">+ 91 </span>
                            </div>
                            <input type="tel" id="phone" name="phone" required class="form-control"
                                pattern="[7-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required>
                        </div>
                        <br>
                        <input type="submit" name="submit" value="Register">

                    </form>
                </div>
            </div>
        </div>
        <script>

            
           
        </script>
</body>

</html>