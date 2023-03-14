function toCelsius(fahrenheit)
{
    
    let value = (fahrenheit-32) *5/9
    return value.toFixed(2) + " Celsius"
}

function display(elementId, value)
{
    document.getElementById(elementId).innerHTML = value
}

function toFarenheit()
{
    let Celsius = prompt("Celsius:")
    let value = (Celsius*9/5)+32
    document.getElementById("toFarenheit").innerHTML= value.toFixed(2) + " F"
}
alert(toCelsius(150))
display("toCelsius",toCelsius(150))