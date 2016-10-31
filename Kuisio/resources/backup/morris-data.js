$(function()    
{

        $.get('datatable',function(json){
    Morris.Bar({      
        element: 'kategori-soal-AEC',
        data: [{
            y: '2014',
            a: json["data"],
            b: 90
        }, {
            y: '2015',
            a: 75,
            b: 65
        }, {
            y: '2016',
            a: 50,
            b: 40
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Benar', 'Salah'],
        hideHover: 'auto',
        resize: true
    });



    Morris.Bar({
        element: 'kategori-soal-MRA',
        data: [{
            y: '2014',
            a: 100,
            b: 90
        }, {
            y: '2015',
            a: 75,
            b: 65
        }, {
            y: '2016',
            a: 50,
            b: 40
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Benar', 'Salah'],
        hideHover: 'auto',
        resize: true
    });

    Morris.Bar({
        element: 'kategori-soal-umum',
        data: [{
            y: '2014',
            a: 50,
            b: 40
        }, {
            y: '2015',
            a: 75,
            b: 65
        }, {
            y: '2016',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Benar', 'Salah'],
        hideHover: 'auto',
        resize: true
            });
    });
});


