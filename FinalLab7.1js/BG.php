<!DOCTYPE html>
<html>
<head>
  <title>Blood Group Validation</title>
  <script>
    function validateBloodGroup() {
      const bloodGroupSelect = document.getElementById('bloodGroup');
      const selectedOption = bloodGroupSelect.options[bloodGroupSelect.selectedIndex].value;
      if (selectedOption === '') {
        alert('Please select a blood group!');
        return false; // blood group is invalid
      }
      return true; // blood group is valid
    }
  </script>
</head>
<body>
  <h1>Blood Group Validation</h1>
  
  <form onsubmit="return validateBloodGroup()">
    <p>Select your blood group:</p>
    <select id="bloodGroup">
      <option value="">Please select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
