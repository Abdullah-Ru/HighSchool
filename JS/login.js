// const express = require('express');
// const mysql = require('mysql2');
// const session = require('express-session');
// const bodyParser = require('body-parser');
// const bcrypt = require('bcrypt');

// const app = express();
// const port = process.env.PORT || 3000;

// // Create a MySQL connection
// const db = mysql.createConnection({
//   host: 'localhost',
//   user: 'root',
//   password: '',
//   database: 'school',
// });

// // ... (rest of your code)

// // Serve the login page
// app.get('/login', (req, res) => {
//   res.sendFile(__dirname + '/HighSchool/HTML/login.html');
// });

// // Handle login logic
// app.post('/login', (req, res) => {
//     const ID_sa = document.getElementById("ID_sa").value;
//     const password = document.getElementById("password").value;

//   // Query MySQL to check login credentials
//   db.query(
//     'SELECT * FROM school WHERE ID_sa = ?',
//     [ID_sa],
//     (err, results) => {
//       if (err) {
//         console.error('MySQL error:', err);
//         return res.status(500).send('Error connecting to the database.');
//       }

//       if (results.length === 0) {
//         return res.status(401).send('Incorrect ID or password.');
//       }

//       const user = results[0];
//       bcrypt.compare(password, user.password, (bcryptErr, bcryptRes) => {
//         if (bcryptErr || !bcryptRes) {
//           return res.status(401).send('Incorrect ID or password.');
//         }

//         // Set session data for the logged-in user
//         req.session.userID = user.ID_sa;

//         // Redirect to the homepage or another page
//         res.redirect('/homepage'); // Replace '/homepage' with your custom route
//       });
//     }
//   );
// });

// // ... (rest of your routes)

// app.listen(port, () => {
//   console.log(`Server is running on port ${port}`);
// });
