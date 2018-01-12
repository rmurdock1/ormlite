var express = require('express');
var pg = require('pg');
var port = process.env.PORT || 4000;
var bodyParser = require('body-Parser');
var mustacheExpress = require('mustache-express');
var orm = require('./orm');
var app = express();


var User = new orm('users','postgres://postgres:root@localhost/orm');

app.engine('mustache', mustacheExpress());
app.set('view engine', 'mustache');
app.set('views', './views')

app.use(express.static('public'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
  extended: false
}));


app.get('/', function(req, res){
  User.getAll(function(data) {
    res.render('index',{
      data: data
    });
  });
});

app.get('/find', function(req, res){
  console.log(req.query);
  User.findById(req.query.id,function(data){
    console.log(data);
    res.render('find',{
       data: data [0]
    });
  });
});

app.get('*', function(req, res){
  res.status(404).send('page not found!');
});


app.listen(port, function(){
	console.log("Listening on PORT " + port);
});
