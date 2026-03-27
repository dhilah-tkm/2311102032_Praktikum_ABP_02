const express = require("express");
const bodyParser = require("body-parser");
const app = express();

app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Data Dummy
let projects = [
  {
    id: 1,
    matkul: "Visi Komputer",
    tugas: "Laporan YOLOv10",
    deadline: "2026-04-01",
    prioritas: "Tinggi",
  },
  {
    id: 2,
    matkul: "Jaringan Komputer",
    tugas: "Konfigurasi OSPF",
    deadline: "2026-03-30",
    prioritas: "Sedang",
  },
];

// Rute Halaman
app.get("/", (req, res) => res.render("index"));
app.get("/tambah", (req, res) => res.render("form"));

// API READ (Ambil Data)
app.get("/api/projects", (req, res) => res.json({ data: projects }));

// API CREATE (Tambah Data)
app.post("/api/projects", (req, res) => {
  const newProject = { id: Date.now(), ...req.body };
  projects.push(newProject);
  res.json({ success: true });
});

app.put("/api/projects/:id", (req, res) => {
  const id = req.params.id;
  console.log("Mencoba update ID:", id); 

  // Cari index
  const index = projects.findIndex((p) => p.id == id);

  if (index !== -1) {
    projects[index] = {
      id: Number(id),
      matkul: req.body.matkul,
      tugas: req.body.tugas,
      deadline: req.body.deadline,
      prioritas: req.body.prioritas,
    };
    console.log("Update Berhasil!");
    res.json({ success: true });
  } else {
    console.log("Data TIDAK ditemukan untuk ID:", id);
    res.status(404).json({ success: false, message: "ID tidak ditemukan" });
  }
});

// API DELETE (Hapus Data)
app.delete("/api/projects/:id", (req, res) => {
  projects = projects.filter((p) => p.id != req.params.id);
  res.json({ success: true });
});

app.listen(3000, () => console.log("Server running: http://localhost:3000"));
