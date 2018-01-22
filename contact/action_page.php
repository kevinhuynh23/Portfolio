<!DOCTYPE html>

<html>
<body>

   <?php
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["name"])){
            $nameErr =  "Name is required";
         } else {
            $nameErr = test_input($_POST["name"]);
         }
      }

      if (empty($_POST["email"])) {
         $emailErr = "Email is required";
      } else {
         $email = test_input($_POST["email"]);

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
         }
      }

      if (empty($_POST["website"])){
         $website = "":
      } else {
         $website = test_input($_POST["website"]);
         if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z9-9+&@#\/%?=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
         }
      }

      if (empty($_POST("$comment"))) {
         $comment = "";
      } else {
         $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
         $genderErr = "Gender is required";
      } else {
         $gender = test_input($_POST["gender"]);
      }
   ?>
</body>
</html>
