var root = document.querySelector(":root");
const colorChange = document.querySelectorAll(".choose-color p");

function toggleMode() {
  let setTheme = document.body;
  setTheme.classList.toggle("dark-theme");

  let theme = setTheme.classList.contains("dark-theme") ? "DARK" : "LIGHT";
  updateIcon(theme);
  localStorage.setItem("siteTheme", JSON.stringify(theme));
}

// Initialize theme based on localStorage
let getTheme = JSON.parse(localStorage.getItem("siteTheme"));

function updateIcon(theme) {
  let iconElements = document.querySelectorAll('#icon');

  if (theme === "DARK") {
    // Set the icon for dark mode
    iconElements.forEach(icon => {
      icon.className = "bi bi-moon text-dark";
    });
  } else {
    // Set the icon for light mode
    iconElements.forEach(icon => {
      icon.className = "bi bi-brightness-high text-light";
    });
  }
}
if (getTheme === "DARK") {
  document.body.classList.add("dark-theme");
  updateIcon("DARK");
} else {
  updateIcon("LIGHT");
}
document.addEventListener("DOMContentLoaded", function() {
  const menuButtons = document.querySelectorAll(".menu-btn");
  const rows = document.querySelectorAll(".portfolio-section .row");

  menuButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      const target = button.getAttribute("data-target");

      menuButtons.forEach(function(btn) {
        btn.classList.remove("active");
      });
      button.classList.add("active");
      rows.forEach(function(row) {
        if (row.id === target) {
          row.classList.add("active");
        } else {
          row.classList.remove("active");
        }
      });
    });
  });
});

// remove active class from colors
const changeActiveColorClass = () => {
  colorChange.forEach(colorPicker => {
      colorPicker.classList.remove('active');
  })
}
const resetButton = document.getElementById('resetBtn');
resetButton.addEventListener('click', () => {
  // Remove active class from colors
  changeActiveColorClass();

  // Apply styles and add 'active' class for the first color
  const defaultColor = document.querySelector('.choose-color p.color-1');
  defaultColor.classList.add('active');

  let lightColorLightness = 33,
    whiteColorLightness = "99%",
    darkColorLightness = "62%";
  // Add the selected color properties to local storage
  const colorProperties = {
    lightColorLightness,
    whiteColorLightness,
    darkColorLightness
  };
  localStorage.setItem('selectedColorProperties', JSON.stringify(colorProperties));
  // Apply styles for the first color
  applyStyles(colorProperties);
});

// Function to apply styles based on color properties
function applyStyles(colorProperties) {
  let setPro = root.style;
  setPro.setProperty('--color-hue', colorProperties.lightColorLightness);
  setPro.setProperty('--color-lightness', colorProperties.whiteColorLightness);
  setPro.setProperty('--light-color-lightness', colorProperties.darkColorLightness);
}
colorChange.forEach(color => {
  color.addEventListener('click', () => {
    // Remove active class from colors
    changeActiveColorClass();
    let lightColorLightness, whiteColorLightness, darkColorLightness;
    // Set color properties based on the selected color
    if (color.classList.contains('color-1')) {
      lightColorLightness = 33;
      whiteColorLightness = "99%";
      darkColorLightness = "62%";
    } else if (color.classList.contains('color-2')) {
      lightColorLightness = 24;
      whiteColorLightness = "99%";
      darkColorLightness = "50%";

    } else if (color.classList.contains('color-3')) {
      lightColorLightness = 206;
      whiteColorLightness = "92%";
      darkColorLightness = "60%";
    } else if (color.classList.contains('color-4')) {
      lightColorLightness = 298;
      whiteColorLightness = "57%";
      darkColorLightness = "39%";
    } else if (color.classList.contains('color-5')) {
      lightColorLightness = 308;
      whiteColorLightness = "79%";
      darkColorLightness = "64%";
    } 
    else if (color.classList.contains('color-6')) {
      lightColorLightness = 260;
      whiteColorLightness = "34%";
      darkColorLightness = "48%";
    } 
    // Add the selected color properties to local storage
    const colorProperties = {
      lightColorLightness,
      whiteColorLightness,
      darkColorLightness
    };
    localStorage.setItem('selectedColorProperties', JSON.stringify(colorProperties));
    // Apply styles and add 'active' class
    applyStyles(colorProperties);
    color.classList.add('active');
  });
});

// Check if a color was previously selected and apply it on page load
document.addEventListener('DOMContentLoaded', () => {
  const storedColorProperties = localStorage.getItem('selectedColorProperties');
  if (storedColorProperties) {
    const colorProperties = JSON.parse(storedColorProperties);
    // Find the color with the matching properties and add 'active' class
    colorChange.forEach(color => {
      if (
        parseFloat(colorProperties.lightColorLightness) === parseFloat(color.dataset.lightColorLightness) &&
        colorProperties.whiteColorLightness === color.dataset.whiteColorLightness &&
        colorProperties.darkColorLightness === color.dataset.darkColorLightness
      ) {
        color.classList.add('active');
      }
    });
    // Apply styles based on the stored color properties
    applyStyles(colorProperties);
  }
});








