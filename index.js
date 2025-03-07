const express = require('express');
const { exec } = require('child_process');
const cors = require('cors');
const path = require('path');
require('dotenv').config();
const app = express();
const authRoutes = require("./src/module/auth/auth.route"); // Pastikan path benar
// Middleware
app.use(cors());
app.use(express.json()); // Untuk membaca request body JSON

// Root Endpoint
app.get('/', (req, res) => {
    return res.redirect('/home');
});
// Endpoint gambar static
app.use('/gambar', express.static(path.join(__dirname, 'src','public','img')));

app.use("/api/auth", authRoutes);
// Endpoint untuk menjalankan file PHP dengan validasi
app.get('/:file', (req, res) => {
    const file = req.params.file.replace(/[^a-zA-Z0-9_-]/g, '') + '.php'; // Hindari karakter berbahaya
    const phpPath = __dirname + `/src/module/frontend/${file}`;

    exec(`php ${phpPath}`, (error, stdout, stderr) => {
        if (error) {
            console.error(`Execution Error: ${error.message}`);
            console.error(`stderr: ${stderr}`);
            return res.redirect('/'); // Redirect to home page on error
        }
        res.send(stdout);
    });
});

// Handle 404
app.use((req, res) => {
    res.status(404).json({ message: 'TYPO banggggggg' });
});

// Server
const port = process.env.PORT || 3000;
app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
