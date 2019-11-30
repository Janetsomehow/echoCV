
var ctx = document.getElementById("pieChart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['SUCCESS', 'CRITICAL'],
    datasets: [{
      label: '# of Tomatoes',
      data: [1,100],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
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
    labels: ["Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7"],
    datasets: [{
      label: 'data-1',
      data: [2018, 2019, 2020, 2016, 2007, 2014, 2007],
      backgroundColor:"skyblue"  
      }, {
      label: 'data-2',
      data: [600000, 400000, 200000, 100000, 50000, 25000, 0],
      backgroundColor: "#7AEF1F"
    }]
  },
    options: {
      cutoutPercentage: 100,
     responsive: false,
  }
});

  /*
ALTERNATE LINE CHART CODES 1

      var ctx = document.getElementById("canvas").getContext("2d");
var canvas = new chart (ctx, {
  type: 'line',
  labels: ["0", "5", "7.5", "10", "11", "12", "13", "15"],
  datasets: [{
      label: "SES 6.7",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(242,175,62,1)",
      pointColor: "rgba(242,175,62,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(242,175,62,1)",
      data: ["127.473", "128.983", "129.327", "123.416", "118.829", "116.843", "117.190", "115.215"]
  },
   {
      label: "SES 8.9",
      fillColor: "rgba(255,255,255,0)",
      strokeColor: "rgba(236,83,62,1)",
      pointColor: "rgba(236,83,62,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(236,83,62,1)",
      data: ["127.283", "125.147", "124.489", "116.783", "111.696", "110.563", "105.469", "104.332"]
  }]
  });  

  ALTERNATE LINE CHART CODES 2

  var myData = new Array([10, 2], [15, 0], [18, 3], [19, 6], [20, 8.5], [25, 10], [30, 9], [35, 8], [40, 5], [45, 6], [50, 2.5]);
  var myChart = new JSChart('canvas', 'line');
  myChart.setDataArray(myData);
  myChart.setAxisColor('#656565');
  myChart.setAxisNameColor('#4A4A4A');
  myChart.setAxisNameFontSize(10);
  myChart.setAxisNameX('Horizontal axis values');
  myChart.setAxisNameY('Vertical axis');
  myChart.setAxisPaddingBottom(60);
  myChart.setAxisPaddingLeft(180);
  myChart.setAxisPaddingRight(170);
  myChart.setAxisPaddingTop(65);
  myChart.setAxisValuesColor('#656565');
  myChart.setAxisValuesNumberX(6);
  myChart.setBackgroundColor('#EEE');
  myChart.setGrid(false);
  myChart.setLabelY([0, 'Low']);
  myChart.setLabelY([5, 'Medium']);
  myChart.setLabelY([10, 'High']);
  myChart.setLineColor('#8638D5');
  myChart.setShowYValues(false);
  myChart.setTitle('A customized chart');
  myChart.setTitleColor('#505050');
  myChart.setSize(616, 321);
  myChart.setTextPaddingBottom(20);
  myChart.setTextPaddingLeft(120);
  myChart.setTextPaddingTop(15);
  myChart.setFlagRadius(6);
  myChart.setTooltip([25, 'Tooltip for value 25 on X axis']);
  myChart.setTooltip([40, 'Tooltip for value 40 on X axis']);
  myChart.setBackgroundImage('path/background.jpg');
  myChart.draw();

	var myData = new Array([10, 20], [15, 10], [20, 30], [25, 10], [30, 5]);
	var myChart = new JSChart('lineid', 'line');
	myChart.setDataArray(myData);
	myChart.draw();
*/
  var ctx = document.getElementById("lineid");
var barChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["0", "5", "7.5", "10", "11", "12", "13", "15"],
    datasets: [{
      label: 'data-1',
      data: [127.283, 125.147, 124.489, 116.783, 111.696, 110.563, 105.469, 104.332], 
  }]
},
options: {
  cutoutPercentage: 40,
 responsive: false,
}
});

