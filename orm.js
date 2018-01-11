var Sequelize = require('sequelize');

class Table{
  constructor(tableName, connectionString){
    this.tableName = tableName;
    this.sequelize = this.initiate(connectionString);
    this.table = this.createTable(this.tableName);
    this.authenticate = this.authenticate();
    this.insertIntoTable = this.insertIntoTable(this.tableName);
  }
  initiate(connectionString){
    return new Sequelize(connectionString);
  }

  authenticate(){
    this.table.sync();
      this.sequelize.authenticate()
    .then(() => {
      console.log('Connection to users table has been established successfully.');

    })
    .catch(err => {
      console.error('Unable to connect to the database:', err);
    });
  }

  createTable(tablename) {
    console.log('Database updated with table name ' + tablename);
    return this.sequelize.define(tablename, {
      firstname: Sequelize.STRING,
      lastname: Sequelize.STRING
    }, {
      freezeTableName: true
    });
  }

insertIntoTable(tablename) {
  var tableRef = this.table;
  this.table.sync().then(function() {
    console.log('Adding Members to table' + tablename);
    tableRef.bulkCreate([{
        firstname: 'foo',
        lastname: '123'
      },
      {
        firstname: 'test',
        lastname: 'test'
      },
      {
        firstname: 'hry',
        lastname: 'buddy'
      },
    ], {
      validate: true
    }).catch(errors => {
      console.log(errors)

    })
  });
}


  getAll(cb){
    this.table.findAll().then(function(rows) {
      var data = [];
      for(var i = 0; i < rows.length; i++) {
        data.push(rows[i].dataValues);
      }
      return cb(data);
    });
  }

  findById(id, cb){
    this.table.findAll({
      where: {
        id: id
      }
    }).then(function(rows) {
       var data = [];
       for(var i = 0; i < rows.length; i++) {
         data.push(rows[i].dataValues);
       }
       return cb(data);
    });
  }
}

module.exports = Table;
