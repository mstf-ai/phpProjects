document.addEventListener("DOMContentLoaded", function () {
  setupNavbarToggle();
  loadCommonComponents();
  setupDarkModeToggle();
  applySavedSettings();
  setupLanguageSelector();
  updateDateTime();
});

// شريط التنقل المتفاعل
function setupNavbarToggle() {
  const toggleBtn = document.querySelector("#navbar-toggle");
  const navMenu = document.querySelector("#navbar-menu");
  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener("click", () => {
      navMenu.classList.toggle("active");
    });
  }
}

// تحميل عناصر مشتركة
function loadCommonComponents() {
  fetchComponent("header.html", "#header", () => {
    setupDarkModeToggle();
    setupLanguageSelector();
  });
  fetchComponent("footer.html", "#footer");
}

function fetchComponent(filePath, containerSelector, callback = null) {
  fetch(filePath)
    .then(response => {
      if (!response.ok) throw new Error("فشل التحميل: " + filePath);
      return response.text();
    })
    .then(data => {
      document.querySelector(containerSelector).innerHTML = data;
      if (callback) callback();
    })
    .catch(error => console.error(error));
}

// الوضع الليلي
function setupDarkModeToggle() {
  const toggle = document.querySelector("#dark-mode-toggle");
  if (toggle) {
    toggle.addEventListener("click", () => {
      document.body.classList.toggle("dark-mode");
      const isDark = document.body.classList.contains("dark-mode");
      localStorage.setItem("darkMode", isDark ? "on" : "off");
      showToast(isDark ? "تم تفعيل الوضع الليلي" : "تم إيقاف الوضع الليلي");
    });
  }
}

function applySavedSettings() {
  if (localStorage.getItem("darkMode") === "on") {
    document.body.classList.add("dark-mode");
  }
}

// إشعارات مؤقتة
function showToast(message) {
  const toast = document.createElement("div");
  toast.className = "toast";
  toast.textContent = message;
  document.body.appendChild(toast);
  playNotificationSound();
  setTimeout(() => {
    toast.classList.add("show");
    setTimeout(() => {
      toast.classList.remove("show");
      setTimeout(() => toast.remove(), 300);
    }, 3000);
  }, 100);
}

// صوت الإشعار
function playNotificationSound() {
  const audio = new Audio("notification.mp3");
  audio.play().catch(err => console.warn("لم يتم تشغيل الصوت:", err));
}

// اختيار اللغة
function setupLanguageSelector() {
  const selector = document.querySelector("#language-select");
  if (selector) {
    const savedLang = localStorage.getItem("lang");
    if (savedLang) {
      selector.value = savedLang;
      applyLanguage(savedLang);
    }
    selector.addEventListener("change", () => {
      const lang = selector.value;
      localStorage.setItem("lang", lang);
      applyLanguage(lang);
      showToast(`تم تغيير اللغة إلى: ${lang}`);
    });
  }
}

function applyLanguage(lang) {
  const translations = {
    ar: { welcome: "مرحبًا بك!" },
    en: { welcome: "Welcome!" },
    fr: { welcome: "Bienvenue!" },
    es: { welcome: "¡Bienvenido!" }
  };
  const t = translations[lang] || translations["en"];
  const welcomeEl = document.querySelector("#welcome-text");
  if (welcomeEl) {
    welcomeEl.textContent = t.welcome;
  }
}

// التاريخ والوقت
function updateDateTime() {
  const yearSpan = document.querySelector("#current-year");
  const datetimeSpan = document.querySelector("#current-datetime");
  if (yearSpan) yearSpan.textContent = new Date().getFullYear();
  if (datetimeSpan) {
    const update = () => {
      const now = new Date();
      datetimeSpan.textContent = now.toLocaleString();
    };
    update();
    setInterval(update, 1000);
  }
}
