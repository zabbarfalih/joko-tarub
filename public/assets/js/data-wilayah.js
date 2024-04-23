let SHEET_ID = "17x_TxPU6Hp8sCC_mmcm-bB6h7wwaX6U7czBjJ5irGm8";
let SHEET_NAME = "Wilayah";
let API_KEY = "AIzaSyBv_9zuNHpq4BG9Y1RCgAynX9WXs5QZ-E4";
let FULL_URL =
    "https://sheets.googleapis.com/v4/spreadsheets/" +
    SHEET_ID +
    "/values/" +
    SHEET_NAME +
    "?key=" +
    API_KEY;

fetch(FULL_URL)
    .then((res) => res.json())
    .then((data) => {
        let rows = data.values;
        let dataWilayah = [];
        if (rows.length > 0) {
            // Mengabaikan baris pertama yang berisi judul kolom
            for (let i = 1; i < rows.length; i++) {
                let row = rows[i];
                dataWilayah.push({
                    wilayah: row[0],
                    x: row[1],
                    y: row[2],
                });
            }
        }

        console.log(dataWilayah);

        const dataIndonesia = dataWilayah.filter(
            (wilayah) => wilayah.wilayah === "Indonesia"
        );
        const dataJawaTimurYogyaJateng = dataWilayah.filter(
            (wilayah) =>
                wilayah.wilayah === "Jawa Timur" ||
                wilayah.wilayah === "DI Yogyakarta" ||
                wilayah.wilayah === "Jawa Tengah"
        );
        const dataProvinsiLainnya = dataWilayah.filter(
            (wilayah) =>
                wilayah.wilayah !== "Indonesia" &&
                wilayah.wilayah !== "Jawa Timur" &&
                wilayah.wilayah !== "DI Yogyakarta" &&
                wilayah.wilayah !== "Jawa Tengah"
        );

        // Lanjutkan dengan skrip yang ada di bawah ini

        const quadrants = {
            id: "quadrants",
            beforeDraw(chart, args, options) {
                const {
                    ctx,
                    chartArea: { left, top, right, bottom },
                    scales: { x, y },
                } = chart;
                ctx.save();

                // Menggambar garis horizontal pada sumbu y (y = 57,72)
                ctx.beginPath();
                ctx.moveTo(left, y.getPixelForValue(57.72));
                ctx.lineTo(right, y.getPixelForValue(57.72));
                ctx.lineWidth = 2;
                ctx.strokeStyle = "black";
                ctx.stroke();

                // Menggambar garis vertikal pada sumbu x (x = 67,61)
                ctx.beginPath();
                ctx.moveTo(x.getPixelForValue(67.61), top);
                ctx.lineTo(x.getPixelForValue(67.61), bottom);
                ctx.lineWidth = 2;
                ctx.strokeStyle = "black";
                ctx.stroke();

                // Mendefinisikan koordinat untuk masing-masing kuadran
                const xLeftRight = x.getPixelForValue(67.61);
                const yBottomTop = y.getPixelForValue(57.72);

                // Menambahkan warna latar belakang ke masing-masing kuadran
                // Kuadran 1 (Atas Kiri)
                ctx.fillStyle = "rgb(150, 214, 172, 0.5)";
                ctx.fillRect(
                    left,
                    yBottomTop,
                    xLeftRight - left,
                    top - yBottomTop
                );

                // Kuadran 2 (Atas Kanan)
                ctx.fillStyle = "rgb(162, 210, 255, 0.5)";
                ctx.fillRect(
                    right,
                    yBottomTop,
                    xLeftRight - right,
                    top - yBottomTop
                );

                // // Kuadran 3 (Bawah Kanan)
                ctx.fillStyle = "rgb(239, 248, 213, 0.5)";
                ctx.fillRect(
                    right,
                    yBottomTop,
                    xLeftRight - right,
                    bottom - yBottomTop
                );

                // // Kuadran 4 (Bawah Kiri)
                ctx.fillStyle = "rgb(248, 225, 255, 0.5)";
                ctx.fillRect(
                    left,
                    yBottomTop,
                    xLeftRight - left,
                    bottom - yBottomTop
                );

                ctx.restore();
            },
        };

        $(document).ready(function () {
            const ctx = document.getElementById("chart").getContext("2d");
            const scatterChart = new Chart(ctx, {
                type: "scatter",
                data: {
                    datasets: [
                        {
                            label: "Indonesia",
                            data: dataIndonesia.map((wilayah) => ({
                                x: wilayah.x,
                                y: wilayah.y,
                                label: wilayah.wilayah,
                            })),
                            pointBackgroundColor: "red",
                            borderWidth: 1,
                            pointRadius: 5,
                            pointHoverRadius: 8,
                            pointBorderColor: "white",
                            pointHoverBorderColor: "white",
                            pointStyle: "circle",
                            hoverBorderWidth: 2,
                            hoverRadius: 8,
                        },
                        {
                            label: "Jawa Timur, DI Yogyakarta, & Jawa Tengah",
                            data: dataJawaTimurYogyaJateng.map((wilayah) => ({
                                x: wilayah.x,
                                y: wilayah.y,
                                label: wilayah.wilayah,
                            })),
                            pointBackgroundColor: "#E7C773",
                            borderWidth: 1,
                            pointRadius: 5,
                            pointHoverRadius: 8,
                            pointBorderColor: "white",
                            pointHoverBorderColor: "white",
                            pointStyle: "circle",
                            hoverBorderWidth: 2,
                            hoverRadius: 8,
                        },
                        {
                            label: "Provinsi Lainnya",
                            data: dataProvinsiLainnya.map((wilayah) => ({
                                x: wilayah.x,
                                y: wilayah.y,
                                label: wilayah.wilayah,
                            })),
                            pointBackgroundColor: "grey",
                            borderWidth: 1,
                            pointRadius: 5,
                            pointHoverRadius: 8,
                            pointBorderColor: "white",
                            pointHoverBorderColor: "white",
                            pointStyle: "circle",
                            hoverBorderWidth: 2,
                            hoverRadius: 8,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            type: "linear",
                            position: "bottom",
                            title: {
                                display: true,
                                text: "Indeks Pembangunan Literasi Masyarakat (Med = 67,61)",
                                color: "black",
                                font: {
                                    size: 14,
                                    weight: "bold",
                                },
                            },
                            grid: {
                                display: false,
                            },
                        },
                        y: {
                            type: "linear",
                            title: {
                                display: true,
                                text: "Dimensi Budaya Literasi (Med = 57,72)",
                                color: "black",
                                font: {
                                    size: 14,
                                    weight: "bold",
                                },
                            },
                            grid: {
                                display: false,
                            },
                        },
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    const label =
                                        context.dataset.data[context.dataIndex]
                                            .label;
                                    const x =
                                        context.dataset.data[context.dataIndex]
                                            .x;
                                    const y =
                                        context.dataset.data[context.dataIndex]
                                            .y;
                                    return `${label}: Indeks Pembangunan Literasi Masyarakat = ${x}, Dimensi Budaya Literasi = ${y}`;
                                },
                            },
                        },
                        quadrants: {},
                    },
                },
                plugins: [quadrants],
            });
        });
    });
