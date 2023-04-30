<!DOCTYPE html>
<html>
<head>
  <title>Date of Birth Validation</title>
  <script>
    function validateDOB() {
      const dob = document.getElementById('dob').value;
      if (dob === '') {
        alert('Date of birth cannot be empty!');
        return false; // dob is invalid
      }
      const dobParts = dob.split('/');
      if (dobParts.length !== 3) {
        alert('Invalid date of birth! Please enter a valid date in the format dd/mm/yyyy.');
        return false; // dob is invalid
      }
      const day = parseInt(dobParts[0], 10);
      const month = parseInt(dobParts[1], 10);
      const year = parseInt(dobParts[2], 10);
      if (isNaN(day) || isNaN(month) || isNaN(year)) {
        alert('Invalid date of birth! Please enter a valid date in the format dd/mm/yyyy.');
        return false; // dob is invalid
      }
      if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) {
        alert('Invalid date of birth! Please enter a valid date in the format dd/mm/yyyy.');
        return false; // dob is invalid
      }
      return true; // dob is valid
    }
  </script>
</head>
<body>
  <h1>Date of Birth Validation</h1>
  
  <form onsubmit="return validateDOB()">
    <label for="dob">Date of Birth:</label>
    <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" required>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
