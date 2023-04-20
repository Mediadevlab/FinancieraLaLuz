//Variables Amortizacion
const monto = document.getElementById("monto");
const tiempo = document.getElementById("tiempo");
const interes = document.getElementById("interes");
const btnCalcular = document.getElementById("btnCalcular");
const llenarTabla = document.querySelector("#lista-tabla");
// const llenarBodyTabla = document.getElementById("body-tabla");

//Calculo para Amortizacion
btnCalcular.addEventListener("click", () => {
    calcularCuota(monto.value, interes.value, tiempo.value);
});

function calcularCuota(monto, interes, tiempo) {
    while (llenarTabla.firstChild) {
        llenarTabla.removeChild(llenarTabla.firstChild);
    }

    let fechas = [];
    let fechaActual = Date.now();
    let mes_actual = moment(fechaActual);
    mes_actual.add(1, "month");

    let pagoInteres = 0,
        pagocapital = 0,
        cuota = 0;

    cuota =
        (monto * ((Math.pow(1 + interes / 100, tiempo) * interes) / 100)) /
        (Math.pow(1 + interes / 100, tiempo) - 1);

    for (let i = 1; i <= tiempo; i++) {
        pagoInteres = parseFloat(monto * (interes / 100));
        pagocapital = cuota - pagoInteres;
        monto = parseFloat(monto - pagocapital);

        //Formato de las fechas
        fechas[i] = mes_actual.format("DD-MM-YYYY");
        mes_actual.add(1, "month");

        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${fechas[i]}</td>
            <td>${cuota.toFixed(2)}</td>
            <td>${pagocapital.toFixed(2)}</td>
            <td>${pagoInteres.toFixed(2)}</td>
            <td>${monto.toFixed(2)}</td>
        `;
        llenarTabla.appendChild(row);
    }
}