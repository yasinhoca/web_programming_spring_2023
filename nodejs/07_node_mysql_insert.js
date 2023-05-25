var mysql = require('mysql');
var con = require('./baglan');

con.connect(function (err){
    con.query("INSERT INTO ogrenci (numara,ad,soyad,email) VALUES (7,'Gülşah','Gazi','gg@g.com')",
        function (err,result,fields){
        if(err) throw err;
        console.log(result);
    });
});