<!DOCTYPE html>
<html>
<head>
  <title>name validation</title>
  <script>
    function validateInput(input) {
      if (!input) {
        return false; // input is empty
      }
      
      const words = input.split(' ');
      if (words.length < 2) {
        return false; // input has less than two words
      }
      
      const validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-';
      for (let word of words) {
        if (!validChars.includes(word[0])) {
          return false; // word doesn't start with a letter
        }
        
        for (let i = 1; i < word.length; i++) {
          if (!validChars.includes(word[i])) {
            return false; // word contains invalid characters
          }
        }
      }
      
      return true; // input is valid
    }
    
    function handleSubmit(event) {
      const input = document.getElementById('input').value;
      if (validateInput(input)) {
        alert('valid input!');
      }
      else if (!validateInput(input)) {
        alert('Invalid input! Please try again.');
        event.preventDefault(); // prevent form submission
      }
    }
  </script>
</head>
<body>
  <h1>Name validation</h1>
  
  <form onsubmit="handleSubmit(event)">
    <label for="input">Input:</label>
    <input type="text" id="input" name="input" required>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
