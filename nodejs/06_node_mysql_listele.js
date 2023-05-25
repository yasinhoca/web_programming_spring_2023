var mysql = require('mysql');

var con = mysql.createConnection(
    {
        host: "localhost",
        user: "root",
        password: "",
        database:"noveri"
    }
);

con.connect(function (err){
    if(err) throw err;
    con.query("SELECT * FROM ogrenci",function (err,result,fields){
        if(err) throw err;
        console.log(result);
    });
});