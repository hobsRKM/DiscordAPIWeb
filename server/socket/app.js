var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
const cors = require('cors');


var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

/**
 *
 * @type {Server}
 * initialize socket and http server
 */

const httpServer = require("http").createServer();

const io = require("socket.io")(httpServer, {cors: {
        origin: '*',
    }});
require('./socket')(io);

httpServer.listen(3025,()=>{
    console.log("socket running");
});

app.listen(3026,()=>{
    console.log("http server running");
});



app.post('/', (req, res) => {
      io.emit("message",req.body);
      res.send(200);
})

module.exports = app;
