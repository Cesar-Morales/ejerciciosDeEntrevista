document.getElementById("suma-form").addEventListener("submit", function(e){
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    if (validandoInputs(num1, num2))
        imprimirResultado(num1, num2);
});

function validandoInputs(num1, num2){
    if(isNaN(num1) || isNaN(num2)){
        alert("Solo se permite el ingreso de numeros");
        return false;
    }
    return true;
}

function imprimirResultado(num1, num2){
    let suma = parseInt(num1) + parseInt(num2);
    let parImpar;
    if(suma%2 == 0){
        parImpar = "par";
    }else{
        parImpar = "impar";
    }
    alert(`La suma de ${num1} y ${num2} es igual a ${suma}. Dicho numero es ${parImpar}`);
}