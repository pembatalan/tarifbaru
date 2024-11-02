// Get references to the input and button elements
const input = document.getElementById("saldo");
const button = document.getElementById("kirim");

// Add an event listener for the input event
input.addEventListener("input", () => {
  // Check if the input field has any text
  if (input.value.length > 7) {
    // If there's text, enable the button
    button.disabled = false;
  } else {
    // If there's no text, disable the button
    button.disabled = true;
  }
});


    