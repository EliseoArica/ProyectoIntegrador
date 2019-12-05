
// ESTE ES PARA EL GRAFICO DE INGRESOS MENSUALES. ESTE ARCHIVO SE USA PARA EL (INDEX) Y PARA LA VISTA DE (INGRESOS) :D

Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {

  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };


  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

var ctx = document.getElementById("IngMen");

var enero = $('#enero').val().trim();
var febrero = $('#febrero').val().trim();
var marzo = $('#marzo').val().trim();
var abril = $('#abril').val().trim();
var mayo = $('#mayo').val().trim();
var junio = $('#junio').val().trim();
var julio = $('#julio').val().trim();
var agosto = $('#agosto').val().trim();
var setiembre = $('#setiembre').val().trim();
var octubre = $('#octubre').val().trim();
var noviembre = $('#noviembre').val().trim();
var diciembre = $('#diciembre').val().trim();


var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    datasets: [{
      label: "Ganancias",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,



      // ACA DEBES DE SUMAR TODAS LAS GANANCIAS OBTENIDAS POR LOS ALMUERZOS Y LOS PEDIDOS EXTRAS PERO DEL MES CORRESPONDIENTE. ES DECIR, SI QUIERES LAS GANANCIAS DEL MES DE ENERO, PRIMERO DEBEMOS LLEGAR PRIMER DIA DE FEBRERO, YA QUE SE TIENE QUE SUMAR TODAS LAS GANANCIAS HASTA EL 31 DE ENERO.... DE MANERA SIMILAR LOS DEMAS MESES

      // NOTA: CONFORME SE VA CUMPLIENDO EL MES, SE DEVEN DE AGREGAR A LA LISTA LA COMA Y EL VALOR.. Ejemplo: " ,$diciembre " ... YA QUE SI LE PONES 0 COMO PREDETERMINADO, LA GRAFICA SE VA A DIBUJAR CON EL 0 .. 

      // NOTA 2: CUANDO CUMPLA DICIEMBRE Y SEA EL AÑO SIGUIENTE, LA GRAFICA DEBE VOLVER A DIBUJARSE DESDE EL PRIMERO DE FEBRERO. YA QUE NECESITAS TODOS LOS DATOS DE HASTE EL 31 DE ENERO PARA GRAFICAR EL TOTAL DE ENERO V: .

      data: [enero,febrero,marzo,abril,mayo,junio,julio,agosto,setiembre,octubre,noviembre,diciembre,],
    
    
    
    
    
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'S/. ' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': S/. ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
