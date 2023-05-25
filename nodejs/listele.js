var mysql = require('mysql');
var con = require('./baglan');
var fs = require('fs');

con.query("SELECT * FROM ogrenci",function (err,result,fields){
    if(err) throw err;
    fs.writeFile('table.json',JSON.stringify(result),function (err){
        if(err) throw err;
        console.log("JSON dosyası çıkartıldı!");
    });
});