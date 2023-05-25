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
    console.log("Bağlantı sağlandı!");
});