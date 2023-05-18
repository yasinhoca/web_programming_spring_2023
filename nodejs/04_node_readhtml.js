var http = require('http');
var htmldosya = require('fs');

http.createServer(function (req,res){
    htmldosya.readFile('htmlfileread.html',function (err,data){
    res.writeHead(200, {'Content-Type': 'text/html; charset=utf8'} );
    res.write(data);
    res.end();
    });
}).listen(8080);