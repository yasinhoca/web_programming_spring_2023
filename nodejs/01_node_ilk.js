var http = require('http');

http.createServer(function (req,res){
    res.writeHead(200, {'Content-Type': 'text/html; charset=utf8'} );
    res.end('NodeJS derslerine hoşgeldiniz!');
}).listen(8080);