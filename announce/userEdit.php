<?php
    session_start();
    include ("../conect.php");
    include 'userNav.php';
    userNav();
    if(isset($_POST["edit"])){
        $newUsername = $_POST["newUsername"];
        $newEmail = $_POST["newEmail"];
        $newPassword = $_POST["newPassword"];
        $oldUsername = $_SESSION["id"];

    $sql = "UPDATE user SET username='$newUsername', email='$newEmail', password='$newPassword' WHERE id='$oldUsername'";
    
    if($con->query($sql)){
      echo("<script>alert('user edited successfully!')</script>");
    }
    else
      echo("<script>alert('something went wrong')</script>");
}

    // show everything in database
    // $query = "SELECT * FROM annonce;"; 
    // $result = $con->query($query);
    // while($s = $result->fetch_assoc()){
    //     echo($s["titre"]);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Announces</title>
</head>
<body>
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="userEdit.php" method="post">
    
    <div class="mb-6">

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="newuserName">
        new username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="newUsername" type="text" name="newUsername" placeholder="new username">
    </div>
    
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="newEmail">
        new email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="newEmail" type="email" name="newEmail" placeholder="new email">
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="newPassword">
        new password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="newPassword" type="password" name="newPassword" placeholder="new passwrod">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="edit" value="edit">
        edit
      </button>
    </div>
</form>
</body>
</html>