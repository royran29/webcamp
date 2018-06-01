<?php 

if($_POST['registry'] == 'new' ){

    //die(json_encode($_POST));//return form data and exit

    $user = $_POST['user'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $options_password = array(
        'cost' => 12
    );

    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $options_password);

    try{
        include_once 'functions/functions.php';
        $stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) values (?, ?, ?)");
        $stmt->bind_param("sss", $user, $name, $password_hashed);
        $stmt->execute();

        $inserted_id = $stmt->insert_id;
        if ($inserted_id > 0) {
            $answer = array(
                'answer' => 'success',
                'id_admin' => $inserted_id
            );
        }
        else{
            $answer = array(
                'answer' => 'fail'
            );
        }

        $stmt->close();
        $conn->close();
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($answer));//return data and exit
}

if($_POST['registry'] == 'update' ){
}
/**************************************** */

if(isset($_POST['login-admin'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    try{
        include_once 'functions/functions.php';
        $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
        $stmt->bind_param('s', $user);
        $stmt->execute();
        //associates the results of the query with the specified variables
        $stmt->bind_result($id_admin, $user_admin, $name_admin, $password_admin);

        if($stmt->affected_rows){
            //fetch return the results
            $exits = $stmt->fetch();
            if ($exits) {
                if (password_verify($password, $password_admin)) {
                    
                    session_start(); //starts a session
                    $_SESSION['user'] = $user_admin;
                    $_SESSION['name'] = $name_admin;

                    $answer = array(
                        'access' => 'yes',
                        'name' => $name_admin
                    );
                }
                else{
                    $answer = array(
                        'access' => 'no'
                    );
                }
            }
            else{
                $answer = array(
                    'access' => 'no'
                );
            }
        }
        $stmt->close();
        $conn->close();
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($answer));//return data and exit
}
?>