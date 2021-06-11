function cel()
{
  var tempfahrenheit = document.getElementById("fahrenheit").value;
  var tempcelcius = (tempfahrenheit - 32 ) * (5 / 9);
  document.getElementById("celcius").value = tempcelcius;
}

function fah()
{
  var tempcelcius = document.getElementById("celcius").value;
  var tempfahrenheit = (tempcelcius * (9 / 5 )) + 32;
  document.getElementById("fahrenheit").value = tempfahrenheit;
}