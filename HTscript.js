<script>
function searchCity() {

  let city = document.getElementById("city").value.toLowerCase().trim();

  if (city == "") {
    alert("Please enter city");
    return;
  }

  if (city == "delhi") {
    window.location.href = "delhi.html";
  }
  else if (city == "ahmedabad") {
    window.location.href = "Ahmedabad.html";
  }
  else if (city == "mumbai") {
    window.location.href = "mumbai.html";
  }
  else {
    alert("No hotels found for this city");
  }
}
</script>
