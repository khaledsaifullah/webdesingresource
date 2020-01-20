const express = require('express')
const app = express()
const cors = require('cors')
const port = 9000

app.use(cors())

app.get('/hello', (req, res) => res.send('Hello World 7777'))
app.listen(port, () => console.log(`Example app listening on port ${port}!`))


var mysql = require('mysql')
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'react'
})


var getBanner = function (req, res) {
    connection.query("SELECT * FROM wc_banner", function (err, result, fields) {
        if (err) throw err;
        res.json(result)

    });
}


app.get('/banner', getBanner)

connection.connect((err) => {
    if(err) throw err;
    console.log("Connected!");

// connection.query("SELECT * FROM wc_banner", function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
//
// });
})


app.get('/images/:fileName', (req, res) => {
    const filePath = `./images/${req.params.fileName}`
    return res.sendFile(filePath, { root: __dirname } )
})

