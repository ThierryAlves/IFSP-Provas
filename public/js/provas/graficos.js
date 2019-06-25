$(document).ready(function () {

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
    function drawChart() {

        var rows = [];
        var max = dados[0].prova.questoes.length;

        dados.forEach(function (element, index) {
            rows.push([element.aluno.nome, element.questoes_corretas]);
        });

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Aluno');
        data.addColumn('number', 'Nota');
        data.addRows(rows);

        // Set chart options
        var options = {'title':'Notas dos Alunos',
            vAxis: {
                viewWindow: {
                    min: 0,
                    max: max
                },
            },
            backgroundColor: { fill:'transparent' },
            'width':700,
            'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
});
