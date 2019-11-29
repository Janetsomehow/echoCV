
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['OK', 'WARNING', 'CRITICAL', 'UNKNOWN'],
    datasets: [{
      label: '# of Tomatoes',
      data: [12, 19, 3, 5],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
   	cutoutPercentage: 40,
    responsive: false,

  }
});
var ctx = document.getElementById("barChart").getContext('2d');
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sst", "Sun"],
    datasets: [{
      label: 'data-1',
      data: [12, 19, 3, 17, 28, 24, 7],
      backgroundColor: "rgba(255,0,0,1)"
    }, {
      label: 'data-2',
      data: [30, 29, 5, 5, 20, 3, 10],
      backgroundColor: "rgba(0,0,255,1)"
    }]
  }
});
var lineChartData = {
  labels: ["0", "5", "7.5", "10", "11", "12", "13", "15"],
  datasets: [{
      label: "SES 3.4",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(16,133,135,1)",
      pointColor: "rgba(16,133,135,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(16,133,135,1)",
      data: ["128.940", "131.397", "132.235", "128.235", "125.636", "127.271", "125.667", "129.554"]
  }, {
      label: "SES 5.6",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(82,185,159,1)",
      pointColor: "rgba(82,185,159,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(82,185,159,1)",
      data: ["128.948", "130.369", "131.038", "125.867", "121.893", "119.656", "119.026", "119.737"]
  }, {
      label: "SES 6.7",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(242,175,62,1)",
      pointColor: "rgba(242,175,62,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(242,175,62,1)",
      data: ["127.473", "128.983", "129.327", "123.416", "118.829", "116.843", "117.190", "115.215"]
  }, {
      label: "SES 8.9",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(236,83,62,1)",
      pointColor: "rgba(236,83,62,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(236,83,62,1)",
      data: ["127.283", "125.147", "124.489", "116.783", "111.696", "110.563", "105.469", "104.332"]
  }]

}

window.onload = function() {
  var ctx = document.getElementById("canvas").getContext("2d");
  window.myLine = new Chart(ctx).Line(lineChartData, {
      responsive: true
  });
}