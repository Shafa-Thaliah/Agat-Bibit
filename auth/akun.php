<?php
session_start();
include 'koneksi.php';
?>


 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css"
    <title></title>
  </head>
  <body class="profile-page">
    <div class="wrapper">
      <h2>Profile</h2>
      <form action="" method="post">

        <?php
        $sql = "SELECT * FROM login WHERE id='{$_SESSION["user_id"]}'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="inputBox">
          <label for="first_name">First Name</label>
          <input type="text" Id="first_name" name="first_name" required>
        </div>
        <div class="inputBox">
          <label for="last_name">Last Name</label>
          <input type="text" Id="last_name" name="last_name" required>
        </div>
        <div class="inputBox">
          <label for="email">Email</label>
          <input type="email" Id="email" name="email" value="<?php echo $row['user_email']; ?>" disabled required>
        </div>
        <div class="inputBox">
          <label for="birth">Birth</label>
          <input type="date" Id="birth" name="birth" required>
        </div>
        <div class="inputBox">
          <label for="phone">Phone</label>
          <input type="text" Id="phone" name="phone" required>
        </div>

        <?php
            }
          }
        ?>


        <div>
          <button type="submit" class="btn">Update Profile</button>
        </div>
    </div>


  </body>
</html>
