<!DOCTYPE html>
<html>
<head>
  <title>Profile Picture Validation</title>
  <script>
    function validateProfilePicture() {
      const userIdInput = document.getElementById('userId');
      const pictureInput = document.getElementById('picture');
      const userId = parseInt(userIdInput.value);
      if (isNaN(userId) || userId <= 0) {
        alert('User ID must be a positive number!');
        return false; // user ID is invalid
      }
      if (pictureInput.files.length === 0) {
        alert('Please select a picture!');
        return false; // picture is invalid
      }
      return true; // user ID and picture are valid
    }
  </script>
</head>
<body>
  <h1>Profile Picture Validation</h1>
  
  <form onsubmit="return validateProfilePicture()">
    <p>User ID:</p>
    <input type="text" id="userId" name="userId"><br><br>
    <p>Profile Picture:</p>
    <input type="file" id="picture" name="picture"><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
