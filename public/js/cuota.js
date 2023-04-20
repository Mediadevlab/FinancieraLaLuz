
//Variables Calculo Prestamo
const capital = document.getElementById('capital');
const tasa = document.getElementById('tasa');
const plazo = document.getElementById('plazo');
const btnCalcularPrestamo = document.getElementById('btnCalcularPrestamo');
const llenarTabla2 = document.querySelector('#lista-tabla2');

//Calculo para Prestamo
btnCalcularPrestamo.addEventListener('click', () => {
    calcularCuotaPrestamo(capital.value, tasa.value, plazo.value);
});

function calcularCuotaPrestamo(capital, tasa, plazo){

    while(llenarTabla2.firstChild){
        llenarTabla2.removeChild(llenarTabla2.firstChild);
    }

    let fechas = [];
    let fechaActual = Date.now();
    let mes_actual = moment(fechaActual);
    mes_actual.add(1, 'month');

    let pagoInteres2 = 0, pagocapital2 = 0, cuota2 =0;

    cuota2 = capital * (Math.pow(1+tasa/100, plazo)*tasa/100)/(Math.pow(1+tasa/100, plazo)-1);

    for(let i = 1; i <= plazo; i++) {
        pagoInteres2 = parseFloat(capital*(tasa/100));
        pagocapital2 = cuota2 - pagoInteres2;
        capital = parseFloat(capital - pagocapital2);

        //Formato de las fechas
        fechas[i] = mes_actual.format('DD-MM-YYYY');
        mes_actual.add(1, 'month');


        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fechas[i]}</td>
            <td>${cuota2.toFixed(2)}</td>
            <td>${pagocapital2.toFixed(2)}</td>
            <td>${pagoInteres2.toFixed(2)}</td>
            <td>${capital.toFixed(2)}</td>
        `;
        llenarTabla2.appendChild(row)
    }
}

