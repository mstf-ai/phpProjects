const form = document.querySelector("form"),
      uField = form.querySelector(".username"),
      eField = form.querySelector(".email"),
      pField = form.querySelector(".password");

form.onsubmit = (e) => {
  e.preventDefault(); // منع الإرسال الافتراضي مؤقتاً

  let uInput = uField ? uField.querySelector("input") : null;
  let eInput = eField.querySelector("input");
  let pInput = pField.querySelector("input");

  let hasError = false;

  // 1. فحص حقل اسم المستخدم
  if (uInput && uInput.value.trim() === "") {
    uField.classList.add("shake", "error");
    hasError = true;
  } else if (uField) {
    uField.classList.remove("error");
  }

  // 2. فحص حقل البريد الإلكتروني
  if (eInput.value.trim() === "") {
    eField.classList.add("shake", "error");
    hasError = true;
  } else {
    eField.classList.remove("error");
  }

  // 3. فحص حقل كلمة المرور
  if (pInput.value.trim() === "") {
    pField.classList.add("shake", "error");
    hasError = true;
  } else {
    pField.classList.remove("error");
  }

  // إزالة تأثير الاهتزاز
  setTimeout(() => {
    if (uField) uField.classList.remove("shake");
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  // الكود القاطع: إذا لم يكن هناك أي حقل فارغ، يتم الإرسال فوراً وبدون تعقيد كلاسات
  if (hasError === false) {
    // نقوم بتعطيل دالة منع الإرسال الحالية ونفرِض الإرسال للـ PHP
    form.submit(); 
  }
}
