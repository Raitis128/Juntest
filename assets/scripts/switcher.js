function showDiv(select) {
  document.getElementById('DVD').style.display = "none";
  document.getElementById('Furniture').style.display = "none";
  document.getElementById('Book').style.display = "none";  
    if(select.value == "Dvd"){
        document.getElementById('DVD').style.display = "block";
    } else if (select.value == "Furniture") {
        document.getElementById('Furniture').style.display = "block";
    } else {
        document.getElementById('Book').style.display = "block";
    }
}

function requiredInputs(selectElement) {
  console.log('dsfsdfsd');
  var selectValue = selectElement.value;
  var inputElements = document.querySelectorAll("input[type=text]:not(.fixed-required)");
  
  for (var i = 0; i < inputElements.length; i++) {
    const inputElement = inputElements[i];
    const displayStyle = window.getComputedStyle(inputElement).getPropertyValue("display");

    if (displayStyle === "block") {
      inputElement.required = true;
    } else {
      inputElement.required = false;
      inputElement.value = "";
    }
  }

  switch (selectValue) {
    case "Dvd":
      document.getElementById("size").required = true;
      document.getElementById("width").required = false;
      document.getElementById("height").required = false;
      document.getElementById("length").required = false;
      document.getElementById("weight").required = false;
      break;
    case "Furniture":
      document.getElementById("size").required = false;
      document.getElementById("width").required = true;
      document.getElementById("height").required = true;
      document.getElementById("length").required = true;
      document.getElementById("weight").required = false;
      break;
    case "Book":
      document.getElementById("size").required = false;
      document.getElementById("width").required = false;
      document.getElementById("height").required = false;
      document.getElementById("length").required = false;
      document.getElementById("weight").required = true;
      break;
    default:
      break;
  }
}

function clearNonRequiredTextInputs() {
  const inputElements = document.querySelectorAll('input[type=number]:not(.fixed-required)');
  inputElements.forEach(input => {
    input.value = '';
  });
}

const mySelect = document.getElementById('productType');

mySelect.addEventListener('change', () => {
  clearNonRequiredTextInputs();
});



