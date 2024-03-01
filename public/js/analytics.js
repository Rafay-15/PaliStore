// google.charts.load('current', { 'packages': ['line', 'corechart'] });
// google.charts.setOnLoadCallback(drawLineChart);
// google.charts.setOnLoadCallback(drawPieChart);
// // google.charts.setOnLoadCallback(drawCurveChart);
// google.charts.load('current', { 'packages': ['line', 'corechart'] });

// google.charts.setOnLoadCallback(fetchLiveCurveChartData);

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(fetchDataAndDrawChart);

// function fetchLiveCurveChartData() {
//     // Adjust the URL to match your Laravel route
//     fetch("/api/get-live-curve-chart-data")
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Network response was not ok');
//         }
//         return response.json();
//     })
//     .then(data => {
//         console.log('Live curve chart data:', data);
//         // drawCurveChart(data);
//     })
//     .catch(error => console.error('Error fetching curve chart data:', error));

// }
// fetchLiveCurveChartData();

// // var dummyData = [
// //     { created_at: '2023-01-01', visits: 100 },
// //     { created_at: '2023-01-02', visits: 120 },
// //     // Add more dummy data as needed
// // ];
// // function initCharts() {
// //     drawLineChart();
// //     drawPieChart();
// //     drawCurveChart(dummyData);
// //     // fetchLiveCurveChartData(); // Uncomment this if you want to use live data
// // }

// function drawLineChart() {
//     var data = new google.visualization.DataTable();
//     data.addColumn('number', 'Day');
//     data.addColumn('number', 'MADINA CASH AND CARRY');
//     data.addColumn('number', 'PUNJAB CASH AND CARRY');
//     data.addColumn('number', 'AL-FATEH');

//     data.addRows([
//         [1, 37, 80, 41],
//         [2, 30, 99, 32],
//         [3, 25, 97, 25],
//         [4, 11, 118, 10],
//         [5, 11, 117, 100],
//         [6, 8, 113, 72],
//         [7, 7, 122, 92],
//         [8, 12, 239, 110],
//         [9, 16, 242, 120],
//         [10, 12, 190, 112],
//         [11, 5, 170, 140],
//         [12, 6, 108, 115],
//         [13, 4, 106, 110],
//         [14, 4, 116, 100]
//     ]);

//     var options = {
        
//         title: 'Website Traffic Sent to Stores',
//         width: '100%',
//         height: 400,
//         backgroundColor: { fill: 'transparent', opacity: 0.0 },
//         legend: { position: 'bottom' },
//     };

//     var chart = new google.charts.Line(document.getElementById('chart-container'));
//     chart.draw(data, google.charts.Line.convertOptions(options));

//     function draw() {
//         chart.draw(data, google.charts.Line.convertOptions(options));
//     }

//     window.addEventListener('resize', draw);

//     draw();
// }

// function drawPieChart() {
//     var data2 = google.visualization.arrayToDataTable([
//         ['Stores', 'Traffic Routed'],
//         ['PUNJAB CASH AND CARRY', 876],
//         ['MADINA CASH AND CARRY', 776],
//         ['AL FATEH', 1106]
        
//     ]);

//     var options2 = {
//         title: 'Toatal Traffic Routed',
//         is3D: true,
//         backgroundColor: { fill: 'transparent', opacity: 0.0 },
//         legend: { position: 'bottom' },
//         height: 400,
//         width: 'auto'
//     };

//     var chart2 = new google.visualization.PieChart(document.getElementById('piechart_3d'));
//     chart2.draw(data2, options2);

//     function draw() {
//         chart2.draw(data2, options2);
//     }

//     window.addEventListener('resize', draw);

//     draw();
// }

// // fetchLiveCurveChartData();

// // function drawCurveChart() {
//   var data3 = google.visualization.arrayToDataTable([
//     ['Month', 'Visits'],
//     ['January',  1000],
//     ['February',  1170],
//     ['March',  660],
//     ['April',  1030],
//     ['May',  1030],
    
//   ]);

// //   var options3 = {
// //     title: 'Total Website Visits',
// //     curveType: 'function',
// //     legend: { position: 'bottom' },
// //     backgroundColor: { fill: 'transparent', opacity: 0.0 },
// //     height: 400,
// //     width: 600,
// //   };

// //   var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart'));

// //   chart3.draw(data3, options3);
// //   function draw() {
// //     chart3.draw(data3, options3);
// // }

// // window.addEventListener('resize', draw);

// // draw();
// // }



// Assuming this code is within the same script or file where drawCurveChart is defined

async function fetchDataAndDrawChart() {
    var dataEndpoint = '/dataEndpoint';
    try {
        const response = await fetch(dataEndpoint); 

        if (!response.ok) {
            throw new Error(`Failed to fetch data. Status: ${response.status}`);
        }

        const data = await response.json();

        drawCurveChart(data);
    } catch (error) {
        console.error('Error fetching or processing data:', error.message);
    }
}

fetchDataAndDrawChart();
function drawCurveChart(data) {
    if (!data || data.length === 0) {
        console.log('Empty data for the curve chart.');
        return;
    }

    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn('string', 'Day');
    dataTable.addColumn('number', 'Visits');

    data.forEach(function (item) {
        var day = item[0];
        var count = item[1];

        dataTable.addRow([day, count]);
    });

    var options = {
        title: 'Total Website Visits',
        curveType: 'function',
        legend: { position: 'bottom' },
        backgroundColor: { fill: 'transparent', opacity: 0.0 },
        height: 400,
        width: 'auto',
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(dataTable, options);

    function draw() {
        chart.draw(dataTable, options);
    }

    window.addEventListener('resize', draw);

    draw();
}

