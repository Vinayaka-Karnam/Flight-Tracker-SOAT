var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: false });

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));
app.use('/', express.static(__dirname + '/'));
app.set('view engine', 'html');

var connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "mywebsite"
});

connection.connect();

app.get('/',(req, res) => {
    connection.query("SELECT * FROM chat",(err, result) => {
        if(err) {
            console.log(err); 
            res.json({"error":true});
        }
        else { 
            console.log(result); 
            res.json(result); 
        }
    });
});

app.listen(3000, function () {
    console.log('Connected to port 3000');
});