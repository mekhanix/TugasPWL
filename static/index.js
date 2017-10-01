var mydata = [];
$.getJSON("http://localhost/nilai/jsondata/nilai.json", function(json){
    for (var index = 0; index < json.length; index++) {
        var element = json[index];
        for(var key in element){
            for(var v in element[key]){
                if (v === 'nrp') {
                    temp = {
                        nrp : element[key][v],
                        namamk : element[key]['namamk'],
                        nilaiakhir : element[key]['nilai akhir'],
                        indeks : element[key]['indeks']
                    }
                    mydata.push(temp)
                }
                
            }
        }
    }

    console.log(mydata)
    
});