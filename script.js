var debounce = null;

function querydebounce() {
  document.getElementById("copybtn").style.display = "none";
  document.getElementById("result").innerHTML = "...";
  if (debounce) {
    clearTimeout(debounce);
  }
  debounce = setTimeout(query, 300);
}

function query() {
  if (!document.getElementById("input").value) {
    document.getElementById("result").innerHTML = "null";
    return;
  }

  document.getElementById("copybtn").style.display = "inline-block";

  fetch(
    "hash.php?value=" +
      document.getElementById("input").value +
      "&algo=" +
      document.getElementById("algo").value
  )
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      document.getElementById("result").innerHTML = data.hash;
    });
}

function copyToClipboard() {
  navigator.clipboard.writeText(document.getElementById("result").innerHTML);
  document.getElementById("copybtn").innerHTML = "📋 Copied!";
  document.getElementById("copybtn").classList.add("btn-success");
  document.getElementById("copybtn").classList.remove("btn-outline-dark");

  setTimeout(function () {
    document.getElementById("copybtn").innerHTML = "📋 Copy";
    document.getElementById("copybtn").classList.remove("btn-success");
    document.getElementById("copybtn").classList.add("btn-outline-dark");
  }, 2000);
}
