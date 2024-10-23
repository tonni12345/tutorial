<!DOCTYPE html>
<html lang="en">
<?php require_once APPPATH . 'Views/Template/head.php'; ?>

<body>
    <?php require_once APPPATH . 'Views/Template/nav.php'; ?>
    <div class="d-flex flex-column vh-90 justify-content-center align-items-center">
        <h1 class="text-center">Total Buku Per Penerbit</h1>
        <h3 class="text-center"><?= $title ?></h3>
        <div class="w-75">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        // data dari php akan di encode menjadi JSON agar dapat digunakan oleh Javascript
        const data = <?php print_r(json_encode($penerbit)) ?>;
        // melakukan mapping agar hanya variabel “nama” saja yang digunakan
        const labesl = data.map((item) => item.nama);
        // melakukan mapping agar hanya variable “jumlah” saja yang digunakan
        const values = data.map((item) => item.jumlah);
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labesl,
                datasets: [{
                    label: '# dari Buku',
                    data: values,
                    borderWidth: 1
                }]
            },
            // agar koordinat dimulai dari nol
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                // menghilangkan decimal pada chart
                ticks: {
                    precision: 0
                },
                // agar chart tidak gepeng saat resolusi berubah
                maintainAspectRatio: true
            }
        });
    </script>
    <?php require_once APPPATH . 'Views/Template/footers.php'; ?>
</body>

</html>