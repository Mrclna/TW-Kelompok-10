const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');
const app = express();

app.use(bodyParser.json());

// API untuk menangani pendaftaran user
app.post('/register', (req, res) => {
  const { name, email, password } = req.body;

  // Membaca file users.json jika sudah ada
  let users = [];
  if (fs.existsSync('users.json')) {
    users = JSON.parse(fs.readFileSync('users.json'));
  }

  // Tambahkan user baru
  const newUser = { name, email, password };
  users.push(newUser);

  // Simpan kembali ke file users.json
  fs.writeFileSync('users.json', JSON.stringify(users));

  res.status(201).send({ message: 'User registered successfully!' });
});

// Jalankan server
const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
