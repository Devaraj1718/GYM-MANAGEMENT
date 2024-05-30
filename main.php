<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
<style>
    /* Set background image */
    body {
        background-image: url('C:\xampp\htdocs\Gym\join.jpg'); /* Replace 'background-image.jpg' with your image file path */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* Style the form container */
    .form-container {
       // max-width: 100%;
         max-height:100%;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }

    /* Style labels and input fields */
    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 50%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 24px;

        
    }

    /* Style the submit button */
    input[type="submit"] {
        background-color: #007bff; /* Blue color for the button */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        
    }

    /* Style the submit button on hover */
    input[type="submit"]:hover {
        background-color: #0056b3; /* Darker blue color on hover */
    }
form{
background-image:url('https://thumbs.dreamstime.com/b/metal-dumbbell-gym-background-d-rendering-78457375.jpg');

height: 100%; 
width: 100%;


background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
}
</style>
</head>
<body>
<!-- <form>
     <center><h1>Contact Information</h1> </center>
     <br>
<br>
    <form action="devaraj.php" method="post" >
        <div class="form-group">
             <center><b>Name:</b><input type="text" name="Name" class=""></center>
        </div>
        <br>
        <br>
        <div class="form-group">
            
            <center><b>Email:</b><input type="text" name="Email" class=""></center>
        </div>
         <br>
        <br>

        <div class="form-group"> 
           <center><b>Address:</b><input type="text" name="Address" class=""></center>
        </div>
        <br>
        <br>
        <div class="form-group"> 
            <center><b>Mobile:</b><input type="text" name="Mobile" class=""></center> 
        </div>
        <br>
        <br>
       

        <center><input type="submit" value="Submit"></center>
       <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>
</form> -->



    <center><h1>Contact Information</h1></center>
    <br>
    <br>
    <form action="devaraj.php" method="post">
        <div class="form-group">
            <center><b>Name:</b> <input type="text" name="Name"></center>
        </div>
        <br>
        <br>
        <div class="form-group">
            <center><b>Email:</b> <input type="text" name="Email"></center>
        </div>
        <br>
        <br>
        <div class="form-group">
            <center><b>Address:</b> <input type="text" name="Address"></center>
        </div>
        <br>
        <br>
        <div class="form-group">
            <center><b>Mobile:</b> <input type="text" name="Mobile"></center>
        </div>
        <br>
        <br>
        <center><input type="submit" name="submit" value="Submit"></center>
        <br>
        <br>
    </form>
</body>
</html>