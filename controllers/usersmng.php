<?php
      require_once("../config/db.php");
     $user_table = "users";
     $folder = $_SERVER['DOCUMENT_ROOT']."/foodihub";

     if (isset($_POST['signup'])) {
      $firstname = $conn->real_escape_string($_POST['firstname']);
      $lastname = $conn->real_escape_string($_POST['lastname']);
      $username = $conn->real_escape_string($_POST['username']);
      $username = strtolower($username);
      $email = $conn->real_escape_string($_POST['email']);
      $email = strtolower($email);
      $password= $conn->real_escape_string($_POST['password']);
      $password = crypt($password, "p55w0rd");
      $stmt = $conn->prepare("SELECT username,email FROM $users_table WHERE username = ? OR email = ?");
      $stmt->bind_param("ss",$username, $email);
      $stmt->execute();
      $checkUser = $stmt->get_result();
      if($checkUser->num_rows > 0){
        $row = $checkUser->fetch_assoc();
        $foundUsername = $row['username'];
        $foundEmail = $row['email'];
        if($email == $foundEmail && $username == $foundUsername) echo json_encode(['status' => false, 'title' => ' Username/email taken', 'comment' => 'A member with this Username/email already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
        else if($username == $foundUsername)echo json_encode(['status' => false, 'title' => 'Username Taken', 'comment' => 'A member with this username already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
        else echo json_encode(['status' => false, 'title' => 'Email taken', 'comment' => 'A member with this email already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
     }else{
        // file upload in php
        $image = $_FILES['image']['name'];
        $filename = basename($image);
        $filename = strtolower($filename);
        $valid_ext = ['jpg', 'jpeg', 'png'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(in_array($ext, $valid_ext)){
           $image_report = "";
           try {
              $conn->autocommit(false);//starting a Transaction
           $userImage = "$username.$ext";
              $insertStmt = $conn->prepare("INSERT INTO $users_table (firstname,lastname,password,username,email,image) VALUES (?,?,?,?,?,?)");
              $insertStmt->bind_param("ssssss",$firstname,$lastname,$password,$username,$email,$userImage);
              $insertStmt->execute();
              $res = $insertStmt->get_result();
              $conn->autocommit(true);//Ending the Transaction
              if($res){
                 $upload = move_uploaded_file($_FILES['image']['tmp_name'], "$folder/images/users/$username.$ext");
                 if(!$upload) $user_report .= "Image upload unsuccessful. ";
                 }
                 echo json_encode(['status' => true, 'title' => "Welcome  $fullname", 'comment' => "${image_report}Please, verify your email to continue.", 'icon' => 'success', 'btn' => 'btn btn-success'],true);         
              } catch (\Throwable $th) {
                    //throw $th;
                 echo json_encode(['status' => false, 'title' => 'Unable to Create Account', 'comment' => "Darn! We are unable to create your account.$th", 'icon' => 'error', 'btn' => 'btn btn-error'],true);
                 }
           
        }
        else{
           echo json_encode(['status' => false, 'title' => 'Invalid image extension', 'comment' => 'Invalid Image extension. Only jpg, jpeg or png are allowed', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
        }
        
     }
     }
      

?>