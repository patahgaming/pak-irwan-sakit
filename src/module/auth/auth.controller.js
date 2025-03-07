const bcrypt = require("bcryptjs");
const db = require("../../config/db");
const { generateToken } = require("../../utils/jwt");

// Register Pasien
exports.register = async (req, res) => {
    const { email, password, nama_pasien, no_telepon, tanggal_lahir, alamat } = req.body;

    if (!email || !password || !nama_pasien || !tanggal_lahir) {
        return res.status(400).json({ message: "Email, password, nama pasien, dan tanggal lahir wajib diisi" });
    }

    try {
        // Hash password sebelum menyimpan
        const hashedPassword = await bcrypt.hash(password, 10);

        await db.query(
            "INSERT INTO pasien (email, password, nama_pasien, no_telepon, tanggal_lahir, alamat) VALUES (?, ?, ?, ?, ?, ?)", 
            [email, hashedPassword, nama_pasien, no_telepon, tanggal_lahir, alamat]
        );

        res.status(201).json({ message: "Registrasi berhasil!" });
    } catch (error) {
        res.status(500).json({ message: "Gagal registrasi", error });
    }
};

// Login Pasien
exports.login = async (req, res) => {
    const { email, password } = req.body;

    if (!email || !password) {
        return res.status(400).json({ message: "Email dan password wajib diisi" });
    }

    try {
        const [pasien] = await db.query("SELECT * FROM pasien WHERE email = ?", [email]);
        if (pasien.length === 0) {
            return res.status(401).json({ message: "User tidak ditemukan" });
        }

        const user = pasien[0];
        const isMatch = await bcrypt.compare(password, user.password);
        if (!isMatch) {
            return res.status(401).json({ message: "Password salah" });
        }

        const token = generateToken({ id_pasien: user.id_pasien, email: user.email });
        res.json({ token });
    } catch (error) {
        res.status(500).json({ message: "Gagal login", error });
    }
};

// Get Profile Pasien
exports.getProfile = async (req, res) => {
    try {
        const [pasien] = await db.query("SELECT id_pasien, email, nama_pasien, no_telepon, tanggal_lahir, alamat FROM pasien WHERE id_pasien = ?", [req.user.id_pasien]);
        res.json(pasien[0]);
    } catch (error) {
        res.status(500).json({ message: "Gagal mengambil data profil", error });
    }
};
