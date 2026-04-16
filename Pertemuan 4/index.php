<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <style>
    button {
      background-color: #04AA6D;
      border: none;
      color: white;
      padding: 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 12px;
    }
  </style>
</head>

<body>
  <button id="btn-tampil">Tampilkan Profil</button>
  <div id="hasil-profil"></div>
  <script>
    const tombol = document.getElementById("btn-tampil");
    const wadahHasil = document.getElementById("hasil-profil");

    tombol.addEventListener("click", function () {
      fetch("data.php")
        .then((response) => {
          if (!response.ok) {
            throw new Error("Gagal mengambil data");
          }
          return response.json();
        })
        .then((data) => {
          wadahHasil.innerHTML = `Nama: ${data.nama} | Pekerjaan: ${data.pekerjaan} | Lokasi: ${data.lokasi}`;
        })
        .catch((error) => {
          console.error("Error:", error);
          wadahHasil.innerHTML = "Terjadi kesalahan saat mengambil data.";
        });
    });
  </script>
</body>

</html>