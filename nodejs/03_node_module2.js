var http = require('http');
var Str = require('./strmodule');

http.createServer(function (req,res){
    res.writeHead(200, {'Content-Type': 'text/html; charset=utf8'} );
    res.write(Str.myStr());
    res.end();
}).listen(8080);