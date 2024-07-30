

document.getElementById("password").addEventListener("input", checkPasswords);
document
  .getElementById("confirmPassword")
  .addEventListener("input", checkPasswords);

function checkPasswords() {
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  if (password !== confirmPassword) {
    document
      .getElementById("confirmPassword")
      .setCustomValidity("Passwords do not match");
  } else {
    document.getElementById("confirmPassword").setCustomValidity("");
  }
}