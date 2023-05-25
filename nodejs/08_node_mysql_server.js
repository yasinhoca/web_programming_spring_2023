var http = require('http');
var fs = require('fs');

http.createServer(function (req,res){
    fs.readFile('table.json',function (err,data){
        res.writeHead(200, {'Content-Type': 'text/html; charset=utf8'} );
        res.write(data);
        res.end();
    });
}).listen(8080);