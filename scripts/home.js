$('document').ready(() => {
  $('#btn_logout').click(() => {
    console.log('Hello');
  });
  google.charts.load('current', { 'packages': ['line'] });
  google.charts.setOnLoadCallback(drawChart);
});
/*
    When you want to add more series.
Step 1: write >>data.addColumn('number', '')
Step 2: input the value at the end of array
*/
const drawChart = () => {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Year');
  data.addColumn('number', 'Active');
  data.addColumn('number', 'Internship');
  data.addColumn('number', 'Leave');

  data.addRows([
    [2017, 10, 5, 1],
    [2018, 35, 10, 3],
    [2019, 65, 20, 2],
    [2020, 80, 25, 10],
    [2021, 100, 30, 7],
  ]);

  const options = {
    chart: {
      title: 'Total Employees',
      subtitle:
        'The chart show the active employee, the employee that leave the company and intership employee',
    },
    width: 900,
    height: 500,
    hAxis: {
      format: '',
      gridLines: {
        color: '#B1E5F2',
        minSpacing: 20,
      },
    },
    legend: {
      textStyle: {
        color: '#383c9f',
        fontSize: 16,
      },
    },
    // backgroundColor: {
    //   stroke: 'cyan',
    //   width: 2,
    // },
    // color: ['#F5F749', '#B1E5F2', '#F0003C'],
  };

  const chart = new google.charts.Line(document.getElementById('chart'));

  chart.draw(data, google.charts.Line.convertOptions(options));
};
