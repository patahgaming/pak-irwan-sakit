const express = require('express');
const { exec } = require('child_process');
const cors = require('cors');
require('dotenv').config();
const Middleware = './middleware.js'
const app = express();

// Middleware
app.use(cors());
app.use(express.json()); // Untuk membaca request body JSON

// Root Endpoint
app.get('/', (req, res) => {
    res.send('Hello World!');
});

// Endpoint untuk menjalankan file PHP dengan validasi
app.get('/php/:file', (req, res) => {
    const file = req.params.file.replace(/[^a-zA-Z0-9_-]/g, '') + '.php'; // Hindari karakter berbahaya
    const phpPath = __dirname + `/src/frontend/${file}`;

    exec(`php ${phpPath}`, (error, stdout, stderr) => {
        if (error) {
            console.error(`Execution Error: ${error.message}`);
            console.error(`stderr: ${stderr}`);
            return res.status(500).json({ 
                message: 'Error executing PHP', 
                error: stderr || error.message 
            });
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
