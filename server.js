/**
 * Created by Maxim Vyhovskyi on 16.08.15.
 */

var express = require('express');
var app = express();


app.use(express.static('public'));

var server = app.listen(process.env.PORT, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});