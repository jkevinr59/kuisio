$(function()    
{

        $.get('datatable',function(json){
    Morris.Bar({      
        element: 'statistik-soal',
        data: [{
            y: '2016',
            aec: json["data1"],
            iqf: json["data2"],
            mra: json["data3"],
            umum: json["data4"]
        }],
        xkey: 'y',
        ykeys: ['aec','iqf','mra','umum'],
        labels: ['AEC','IQF','MRA','UMUM'],
        hideHover: 'auto',
        resize: true
    });

    });
});


