
// ESTE ES UNO DE LOS ARCHIVOS JS QUE UTILIZA LA VISTA DE PREFERENCIAS  (( CUANTOS ALUMNOS FUERON A RECOJER SU RESERVA Y CUANTOS NO ))

Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("TotalReser");
var entregadas = $('#reservas_entregadas').val().trim();
var noentregadas = $('#reservas_noentregadas').val().trim();
var espera = $('#reservas_espera').val().trim();
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Reservas entregadas", "Reservas no entregadas", "Reservas en espera"],
    datasets: [{
      data: [entregadas, noentregadas, espera],
      backgroundColor: ['#009F06', '#CD1100','orange'],
      hoverBackgroundColor: ['#0AE400', '#F31100'],
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
