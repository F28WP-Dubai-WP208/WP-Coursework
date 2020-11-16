const http = require('http');
const express = require("express");
const path = require('path');
const mysql = require("mysql");
const dotenv = require('dotenv');
const socketio = require('socket.io');
const cookieParser = require('cookie-parser');


const app = express();

const clientPath = `${__dirname}/../client`;
console.log(`Serving static from ${clientPath}`);

app.use(express.static(clientPath));

const server = http.createServer(app);

const io = socketio(server);
let waitingPlayer = null;

io.on('connection', (sock) => {

    waitingPlayer = sock;
    waitingPlayer.emit('message', 'Waiting for an opponent');
  

  sock.on('message', (text) => {
    io.emit('message', text);
  });
});




dotenv.config({ path: './.env'});



const db = mysql.createConnection({
  host: process.env.DATABASE_HOST,
  user: process.env.DATABASE_USER,
  password: process.env.DATABASE_PASSWORD,
  database: process.env.DATABASE
});

const publicDirectory = path.join(__dirname, './public');
app.use(express.static(publicDirectory));

// Parse URL-encoded bodies (as sent by HTML forms)
app.use(express.urlencoded({ extended: false }));
// Parse JSON bodies (as sent by API clients)
app.use(express.json());
app.use(cookieParser());



app.set('view engine', 'hbs');


db.connect( (error) => {
  if(error) {
    console.log(error)
  } else {
    console.log("MYSQL Connected...")
  }
})



//Define Routes
app.use('/', require('./routes/pages'));
app.use('/auth', require('./routes/auth'));
app.use('/maze',require('./routes/pages'));
app.use('/maze2',require('./routes/pages'));
app.use('/chat', require('./routes/pages'));


app.get('/chat',(req,res) =>{
  res.sendFile(__dirname + '/views/chat.html')
})


app.listen(8081, () => {
  console.log("Server started on Port 8081");
})