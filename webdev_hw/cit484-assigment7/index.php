<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>CMP 484</title>
  <link rel="stylesheet" herf="style.css">
</head>
  <body>
    <form action="addEmployee.php" method="POST" id="addEmployee">
      <legend>Add an Employee</legend>
          
          <label for"fname">First Name</label><br>
          <input type="text" id="fname" name="fname"><br>
            
          <label for"lname">Last Name</label><br>
          <input type="text" id="lname" name="lname"><br>
        
          <label for"dept">Department</label><br>
          <select name="dept">
                  <option value="Engineering">Engineering</option>
                  <option value="Mathematics">Mathematics</option>
          </select><br>
          <?php 
          include_once "addEmployee.php";
          ?>
          <input type="submit" value="Submit &#8594;" id="submit" name="submit"> 
    
    </form> 

        
          
  </body>
</html>

    
    
    
    
    
    
    
    
    
    
    