<?php
function createUser($conn, $id, $fname, $lname, $dept){

        $sql = "INSERT INTO employee (id, fname, lname, dept) VALUES (?, ?, ?, ?);";
        $stmt= mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: addEmployee.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "isss", $id, $fname, $lname, $dept);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: addEmployee.php?error=none");
        exit();
}





function idExist($conn, $id){
    $sql = "SELECT id FROM employee WHERE id = ?;" ;
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
       header("location: addEmployee.php?error=stmtfailed");
       exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}




