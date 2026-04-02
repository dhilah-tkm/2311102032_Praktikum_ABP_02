<?php
$daftar_mahasiswa = [
    [
        "nama" => "Muhammad Rifki Fadhilah",
        "nim" => "2311102032",
        "tugas" => 100,
        "uts" => 93,
        "uas" => 88
    ],
    [
        "nama" => "Radix Jasjos",
        "nim" => "2311102011",
        "tugas" => 67,
        "uts" => 75,
        "uas" => 69
    ],
    [
        "nama" => "Rifky Simanjuntak",
        "nim" => "2311102331",
        "tugas" => 95,
        "uts" => 70,
        "uas" => 80
    ],
    [
        "nama" => "Kak Gem",
        "nim" => "2111102331",
        "tugas" => 45,
        "uts" => 88,
        "uas" => 10
    ]
];

// Bobot: Tugas 20%, UTS 30%, UAS 50%
function hitungNilaiAkhir($tugas, $uts, $uas)
{
    return ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
}

function tentukanGrade($nilai)
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

// Variable pembantu untuk statistik
$total_nilai_kelas = 0;
$nilai_tertinggi = 0;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Kelulusan Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: sans-serif;
        }

        th,
        td {
            border: 1px solid #709fd4;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightblue;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .gagal {
            color: red;
            font-weight: bold;
        }

        .statistik {
            margin-top: 20px;
            font-family: sans-serif;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h2>Daftar Nilai Mahasiswa</h2>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($daftar_mahasiswa as $mhs):
                $nilai_akhir = hitungNilaiAkhir($mhs['tugas'], $mhs['uts'], $mhs['uas']);
                $grade = tentukanGrade($nilai_akhir);

                $status = ($nilai_akhir >= 60) ? "Lulus" : "Tidak Lulus";
                $class_status = ($nilai_akhir >= 60) ? "lulus" : "gagal";
                $total_nilai_kelas += $nilai_akhir;
                if ($nilai_akhir > $nilai_tertinggi) {
                    $nilai_tertinggi = $nilai_akhir;
                }
                ?>
                <tr>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $nilai_akhir; ?></td>
                    <td><?= $grade; ?></td>
                    <td class="<?= $class_status; ?>"><?= $status; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="statistik">
        <?php
        $rata_rata = $total_nilai_kelas / count($daftar_mahasiswa);
        ?>
        <p><strong>Rata-rata Kelas:</strong> <?= number_format($rata_rata, 2); ?></p>
        <p><strong>Nilai Tertinggi:</strong> <?= $nilai_tertinggi; ?></p>
    </div>
</body>

</html>