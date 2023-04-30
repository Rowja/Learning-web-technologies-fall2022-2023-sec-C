<!DOCTYPE html>
<html>
<head>
  <title>Gender Validation</title>
  <script>
    function validateGender() {
      const genders = document.getElementsByName('gender');
      let genderSelected = false;
      for (let i = 0; i < genders.length; i++) {
        if (genders[i].checked) {
          genderSelected = true;
          break;
        }
      }
      if (genderSelected) {
        alert('Gender selected');
        return true;
      }
     else if (!genderSelected) {
        alert('Please select at least one gender.');
        return false; // gender is invalid
      }
      
    }
  </script>
</head>
<body>
  <h1>Gender Validation</h1>
  
  <form onsubmit="return validateGender()">
    <label>Gender:</label>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
