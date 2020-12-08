<?php  
    if(isset($_POST["submit"])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dept = $_POST['dept'];

        require_once "connect.php";
        require_once "function.php";
        label: $id = rand(0,99999999);
        

        if (idExist($conn, $id) !== false){
         header("location: addEmployee.php?error=idExist");
         goto label;
        }



        createUser($conn, $id, $fname, $lname, $dept);
     }


     if (isset($_GET["error"])){
         if ($_GET["error"]=="none") {
            header("location: successpage.php?error=none");
         
           
         }

         else if ($_GET["error"]=="stmtfailed") {
            header("location: addEmployee.php?error=stmtfailed");
         }
     }
    

   
    
        


