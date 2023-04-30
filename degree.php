<!DOCTYPE html>
<html>
<head>
  <title>Degree Validation</title>
  <script>
    function validateDegree() {
      const degreeInputs = document.getElementsByName('degree');
      let degreeSelected = false;
      for (let i = 0; i < degreeInputs.length; i++) {
        if (degreeInputs[i].checked) {
          degreeSelected = true;
          break;
        }
      }
      if (degreeSelected) {
        alert('Degree selected!');
        return true;
      }
      if (!degreeSelected) {
        alert('Please select at least one degree!');
        return false; // degrees are invalid
      }
      
    }
  </script>
</head>
<body>
  <h1>Degree Validation</h1>
  
  <form onsubmit="return validateDegree()">
    <p>Select your degree:</p>
    <input type="checkbox" id="degree1" name="degree" value="BSc">
    <label for="degree1">SSC</label><br>
    <input type="checkbox" id="degree2" name="degree" value="MSc">
    <label for="degree2">HSC</label><br>
    <input type="checkbox" id="degree3" name="degree" value="PhD">
    <label for="degree3">BSc</label><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
