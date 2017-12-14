var express = require('express');
var bodyParser = require('body-parser');
var Sequelize = require('sequelize');
var pg = require('pg');


var app = express();

var sequelize = new Sequelize('postgres://root:root@localhost/orm');

app.set('view engine', 'pug');
app.use(express.static('./views'));


var user = sequelize.define('user', {
  firstName: {
    type: Sequelize.STRING,
    allowNull: false,
    unique: 'compositeIndex'
  },
  lastName: {
    type: Sequelize.STRING,
    unique: 'compositeIndex'
  },
  age: {
    type: Sequelize.INTEGER,
  }
});

user.sync().then(function() {
  user.create({
    firstName: 'John',
    lastName: 'Hancock',
    age: 34
  });
  user.create({
    firstName: 'Betty',
    lastName: 'Crockett',
    age: 89
  });
  user.create({
    firstName: 'Timothy',
    lastName: 'Dinkleburg',
    age: 5
  });
  //callback();
});


function getAll(user) {
  app.get('/', function(req, res){
    this.user.findAll().then(function(rows) {
      var data = [];
      for(var i = 0; i < rows.length; i++) {
        data.push(rows[i].dataValues);
      }
      res.render('index',{
        users: data
      });
    });
  });
}


  function findById(id, user){
    app.get('/', function(req, res){
    this.user.findAll({
      where: {
        id: 1
      }
    }).then(function(rows) {
       var data = [];
       for(var i = 0; i < rows.length; i++) {
         data.push(rows[i].dataValues);
       }
       res.render('index',{
         users: data
       });
  });
});
}

var PORT = process.env.PORT || 8000;

app.listen(PORT, function(){
	console.log("Listening on PORT " + PORT);
});
