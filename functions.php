<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
	}
	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);                              
		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: index.html ');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}
	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

	
if (isset($_POST['space_btn'])) {
    space();
}
// SLOT RESERVATION
function space(){
    // call these variables with the global keyword to make them available in function
    global $db, $errors, $location_id, $entry_date, $entry_time, $exit_date, $exit_time, $plate_no;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $location_id    =  e($_POST['location_id']);
    $entry_date   =  e($_POST['entry_date']);
    $entry_time   =  e($_POST['entry_time']);
    $exit_date  =  e($_POST['exit_date']);
    $exit_time  =  e($_POST['exit_time']);
    $plate_no  =  e($_POST['plate_no']);
   


    // form validation: ensure that the form is correctly filled
    if (empty($location_id)) {
        array_push($errors, "location is required");
    }
    if (empty($entry_date)) {
        array_push($errors, "entry_date is required");
    }
    if (empty($entry_time)) {
        array_push($errors, "entry_time is required");
    }
    if (empty($exit_date)) {
        array_push($errors, "exit_date is required");
    }
    if (empty($exit_time)) {
        array_push($errors, "exit_time is required");
    }
    if (empty($plate_no)) {
        array_push($errors, "plate_no is required");
    }



    // reserve slot if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['location_id'])) {
            $user_type = e($_POST['location_id']);
            $query = "INSERT INTO reserve (location_id, entry_date, entry_time, exit_date, exit_time, plate_no)
                      VALUES('$location_id', '$entry_date', '$entry_time', '$exit_date', '$exit_time', '$plate_no')";
            mysqli_query($db, $query);
            $_SESSION['success']  = "New reservation successfully made!!";
            header('location: SeatPreview/index.php');
        }else{
            $query = "INSERT INTO reserve (location_id, entry_date, entry_time, exit_date, exit_time, plate_no)
                      VALUES('$location_id', '$entry_date', '$entry_time', '$exit_date', '$exit_time', '$plate_no')";
            mysqli_query($db, $query);

            // get id of the created user
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['1'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success']  = "New reservation successfully made";
            header('location: SeatPreview/index.php');               
        }
    }
}


?>