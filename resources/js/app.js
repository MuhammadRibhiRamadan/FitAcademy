import './bootstrap';
import '../css/app.css';

console.log("FitAcademy JS Loaded");

function calculateBMI() {
    let h = document.getElementById("height").value;
    let w = document.getElementById("weight").value;

    if (!h || !w) {
        document.getElementById("bmiResult").innerHTML = "Isi tinggi dan berat!";
        return;
    }

    h = h / 100;
    let bmi = (w / (h * h)).toFixed(2);

    document.getElementById("bmiResult").innerHTML = `BMI kamu: <b>${bmi}</b>`;
}

window.calculateBMI = calculateBMI;


// TDEE
window.calculateTDEE = function () {
    let gender = document.getElementById("gender").value;
    let age = parseInt(document.getElementById("age").value);
    let height = parseInt(document.getElementById("height").value);
    let weight = parseInt(document.getElementById("weight").value);
    let activity = parseFloat(document.getElementById("activity").value);

    if (!age || !height || !weight) {
        document.getElementById("tdeeResult").innerHTML = "Isi semua data!";
        return;
    }

    // BMR formula (Mifflin-St Jeor)
    let BMR = (gender === "male")
        ? (10 * weight) + (6.25 * height) - (5 * age) + 5
        : (10 * weight) + (6.25 * height) - (5 * age) - 161;

    let TDEE = BMR * activity;

    document.getElementById("tdeeResult").innerHTML =
        `TDEE kamu: <b>${Math.round(TDEE)} kalori / hari</b>`;
};

// Toggle dropdown on click (works for mouse & touch)
// Place this in resources/js/app.js (after imports)
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.dropdown').forEach(drop => {
    const btn = drop.querySelector('.dropdown-btn');
    const menu = drop.querySelector('.dropdown-menu');

    // Toggle on click
    btn?.addEventListener('click', (e) => {
      e.stopPropagation();
      // close other open dropdowns first (optional)
      document.querySelectorAll('.dropdown-menu').forEach(m => {
        if (m !== menu) m.style.display = 'none';
      });
      // toggle this menu
      menu.style.display = (menu.style.display === 'flex' ? 'none' : 'flex');
    });

    // keep menu open while we hover the menu (for mouse)
    menu?.addEventListener('mouseenter', () => {
      menu.style.display = 'flex';
    });

    menu?.addEventListener('mouseleave', () => {
      // hide only if not explicitly clicked-open — simple approach: hide
      menu.style.display = 'none';
    });
  });

  // close dropdowns when clicking outside
  document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-menu').forEach(m => m.style.display = 'none');
  });
});
window.toggleScience = function(card) {
    const content = card.querySelector('.card-content');

    if (content.classList.contains("show")) {
        content.classList.remove("show");
    } else {
        content.classList.add("show");
    }
};



