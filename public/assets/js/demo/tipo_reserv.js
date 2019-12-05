
// ESTE ES UNO DE LOS ARCHIVOS JS QUE UTILIZA LA VISTA DE PREFERENCIAS  (( CUANTOS ALUMNOS Y DOCENTES REALIZARON UNA RESERVA ACADEMICA ))

Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("ReservTipo");
var ejecutivo = $('#Ejecutivo').val().trim();
var academico = $('#Academico').val().trim();
var aperitivo = $('#Aperitivos').val().trim();
var liquidos = $('#Liquidos').val().trim();
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Menú Ejecutivo", "Menú Academico","Aperitivos", "Liquidos"],
    datasets: [{
      data: [aperitivo, academico,aperitivo,liquidos],
      backgroundColor: ['#4e73df', '#1cc88a','#39D6E6','#F11659'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 0,
  },
});
