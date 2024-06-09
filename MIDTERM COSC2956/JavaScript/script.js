document.getElementById("dark-mode").onclick = () => {
  document.body.classList.add("bg-dark", "text-white");
};

document.getElementById("light-mode").onclick = () => {
  document.body.classList.remove("bg-dark", "text-white");
};

document.getElementById("calculate").onclick = () => {
  const input = document.getElementById("number-input").value;
  let result = 1;
  for (let i = 1; i <= input; i++) {
    result *= i;
  }
  document.getElementById("result-screen").innerText = `${input}! = ${result}`;
};
