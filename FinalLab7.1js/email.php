<!DOCTYPE html>
<html>
<head>
  <title>Email Validation</title>
  <script>
    function validateEmail(email) {
      const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return emailPattern.test(email);
    }
    
    function handleSubmit(event) {
      const email = document.getElementById('email').value;
      if (validateEmail(email)) {
        alert('valid email address!');
      }
     else if (!validateEmail(email)) {
        alert('Invalid email address! Please enter a valid email address.');
        event.preventDefault(); // prevent form submission
      }
    }
  </script>
</head>
<body>
  <h1>Email Validation</h1>
  
  <form onsubmit="handleSubmit(event)">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+" title="Enter a valid email address">
    <button type="submit">Submit</button>
  </form>
</body>
</html>

