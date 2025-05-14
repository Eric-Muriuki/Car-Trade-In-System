// admin-script.js

// Sidebar Toggle (for mobile support)
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("sidebar-toggle");
    const sidebar = document.querySelector(".admin-sidebar");
  
    if (toggleBtn && sidebar) {
      toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
      });
    }
  
    // Auto-dismiss alerts
    const alerts = document.querySelectorAll(".auto-dismiss");
    alerts.forEach((alert) => {
      setTimeout(() => {
        alert.style.display = "none";
      }, 4000);
    });
  
    // Confirmation before delete or logout actions
    const confirmActions = document.querySelectorAll(".confirm-action");
    confirmActions.forEach((btn) => {
      btn.addEventListener("click", function (e) {
        const message = btn.getAttribute("data-confirm") || "Are you sure?";
        if (!confirm(message)) {
          e.preventDefault();
        }
      });
    });
  });
  