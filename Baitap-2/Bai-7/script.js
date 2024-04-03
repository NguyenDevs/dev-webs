function myFunction() {
    var n = document.getElementById("myNumber").value;
    var binary = parseInt(n, 10).toString(2);
    var hexa = parseInt(n, 10).toString(16).toUpperCase();
    document.getElementById("binary").innerHTML = binary;
    document.getElementById("hexa").innerHTML = hexa;
}

function resetFunction() {
    document.getElementById("myNumber").value = "";
    document.getElementById("binary").innerHTML = "";
    document.getElementById("hexa").innerHTML = "";
}