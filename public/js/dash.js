var ctx = document.getElementById('lineid');
var piechart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018],
        datasets: [
            {
            label: '# of Votes',
            backgroundColor: "transparent",
            fill: 'false',
            data: [1,2,3,4 ], 
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        },
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                  },
                  gridLines: {
                    display: false,
                    color: "black"
                  }
              }],
  
              xAxes: [{
                gridLines: {
                  display: false,
                  color: "black"
                }
              }]
  
                }
            
        
    }
});


// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ["Chocolate", "Vanilla", "Strawberry"],
//         datasets: [
//             {
//                 label: "Blue",
//                 backgroundColor: "blue",
//                 data: [3,7,4]
//             },
//             {
//                 label: "Red",
//                 backgroundColor: "red",
//                 data: [4,3,5]
//             },
//             {
//                 label: "Green",
//                 backgroundColor: "green",
//                 data: [7,2,6]
//             }
//         ]
//     },
//     options: {
//         barValueSpacing: 20,
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     min: 0,
//                 }
//             }]
//         }
//     }
// });


//get the bar chart canvas
var ctx = document.getElementById('barchart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['','Q1 2018', '', 'Q2 2018', '', 'Q3 2018', '', 'Q4 2018'],
        datasets: [
          {
            label: 'Exit',
            data: ['',100000, '', 250000, '', 300000, '', 57000],
            backgroundColor: "green",
            borderWidth: 0.5
          },
          {
            label: 'Investment',
            data: ['',800000, '', 600000, '', 400000, '', 200000],
            backgroundColor: "blue",
            borderWidth: 0.5
          }
        ] 
    },
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    },
                    gridLines: {
                        display: false,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                categoryPercentage: 1.0,
                barPercentage: 1.0
                }
            }]
        }
    }
});

/*        var url = "{{url('stock/chart')}}";
        var Years = new Array();
        var Labels = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                Years.push(data.stockYear);
                Labels.push(data.stockName);
                Prices.push(data.stockPrice);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:Years,
                      datasets: [{
                          label: 'Infosys Price',
                          data: Prices,
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
        });
 */







var ctx = document.getElementById('piechart');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['success'],
        datasets: [{
            label: 'Customer success',
            data: [100],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    }
});