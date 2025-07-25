// Add this script to dynamically add/remove 'scrolled' class to the header
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  const scrollThreshold = 100; // Adjust this value as needed
  if (window.scrollY > scrollThreshold) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// Navbar Toggle Functionality
function toggleMenu() {
  const navbarLinks = document.querySelector(".navbar-links");
  navbarLinks.classList.toggle("active");
}

// SUBSCRIBE FORM FUNCTIONALITY
const form = document.getElementById("subscription-form");
const messageDiv = document.getElementById("subscription-message");

if (form) {
  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const email = document.getElementById("email").value.trim();
    if (!email) {
      alert("Please enter a valid email address.");
      return;
    }

    fetch("includes/subscribe.php", {
      method: "POST",
      body: new FormData(form),
    })
      .then((response) => response.text())
      .then((data) => {
        console.log("Raw Server Response:", data);
        if (data.startsWith("<")) {
          console.error("Unexpected HTML response:", data);
          alert("Something went wrong. Check console for details.");
          return;
        }
        try {
          const jsonData = JSON.parse(data);
          // Show message in the div
          messageDiv.textContent = jsonData.message;
          messageDiv.style.display = "block";
          messageDiv.classList.remove("hide");

          if (jsonData.success) {
            form.reset();

            // Fade out after 5 seconds
            setTimeout(() => {
              messageDiv.classList.add("hide");
              setTimeout(() => {
                messageDiv.style.display = "none";
              }, 1000); // match CSS transition duration
            }, 5000);
          }
        } catch (error) {
          console.error("Invalid JSON response:", data);
          alert("Something went wrong. Check console for details.");
        }
      })
      .catch((error) => {
        console.error("Fetch Error:", error);
        alert("Network error occurred. Please try again.");
      });
  });
}

function showMessage(msg, color) {
  if (!messageDiv) {
    alert(msg);
    return;
  }
  messageDiv.style.color = color;
  messageDiv.textContent = msg;
}

// CONTACT FORM

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-form");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(form);
      const statusMessage = document.createElement("p");
      statusMessage.style.marginTop = "10px";

      fetch("https://cherryontop.io/includes/contact-form-handler.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((text) => {
          statusMessage.textContent = text;
          if (text.toLowerCase().includes("thank")) {
            statusMessage.style.color = "green";
            form.reset();
          } else {
            statusMessage.style.color = "red";
          }
          form.appendChild(statusMessage);
        })
        .catch(() => {
          statusMessage.textContent = "Oops! Something went wrong.";
          statusMessage.style.color = "red";
          form.appendChild(statusMessage);
        });
    });
  } else {
    console.error("Element with class '.contact-form' not found.");
  }
});
