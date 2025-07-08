<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
function calculatePayment() {
  const amount = parseFloat(document.getElementById("amount").value);
  const rate = parseFloat(document.getElementById("rate").value);
  const years = parseInt(document.getElementById("years").value);

  const monthlyRate = rate / 100 / 12;
  const totalMonths = years * 12;
  const payment = (amount * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -totalMonths));

  document.getElementById("sumAmount").textContent = amount.toLocaleString("en-US", {
    style: "currency", currency: "USD"
  });
  document.getElementById("sumRate").textContent = rate + " %";
  document.getElementById("sumYears").textContent = years + " years";
  document.getElementById("rateVal").textContent = "% " + rate;
  document.getElementById("yearsVal").textContent = "years " + years;
  document.getElementById("payment").textContent = payment.toLocaleString("en-US", {
    style: "currency", currency: "USD"
  });
}

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("amount").addEventListener("input", calculatePayment);
  document.getElementById("rate").addEventListener("input", calculatePayment);
  document.getElementById("years").addEventListener("input", calculatePayment);
  calculatePayment(); // initialize on load
});
</script>
<!-- end Simple Custom CSS and JS -->
