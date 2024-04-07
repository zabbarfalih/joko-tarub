$(document).ready(function () {
    // Budaya Literasi
    $("#kalkulator-form-budaya-literasi").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X6_1 = parseFloat($("#budaya-literasi-1").val());
        const X6_2 = parseFloat($("#budaya-literasi-2").val());
        const X6_3 = parseFloat($("#budaya-literasi-3").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X6_1 = 0;
        const max_X6_1 = 70;
        const S6_1 = (X6_1 - min_X6_1) / (max_X6_1 - min_X6_1);

        const min_X6_2 = 0;
        const max_X6_2 = 85;
        const S6_2 = (X6_2 - min_X6_2) / (max_X6_2 - min_X6_2);

        const min_X6_3 = 0;
        const max_X6_3 = 25;
        const S6_3 = (X6_3 - min_X6_3) / (max_X6_3 - min_X6_3);

        // Hitung nilai dimensi (D)
        const D6 = ((S6_1 + S6_2 + S6_3) / 3) * 100;

        console.log("X6_1: " + X6_1);
        console.log("X6_2: " + X6_2);
        console.log("X6_3: " + X6_3);
        console.log("S6_1: " + S6_1);
        console.log("S6_2: " + S6_2);
        console.log("S6_3: " + S6_3);
        console.log("D6: " + D6);

        // Tampilkan nilai D pada input hasil
        $("#budaya-literasi-hasil").val(D6.toFixed(2));
    });

    // Ekonomi Budaya
    $("#kalkulator-form-ekonomi-budaya").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X1_1 = parseFloat($("#ekonomi-budaya-1").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X1_1 = 0;
        const max_X1_1 = 1;
        const S1_1 = (X1_1 - min_X1_1) / (max_X1_1 - min_X1_1);
        // Hitung nilai dimensi (D)
        const D1 = (S1_1 / 1) * 100;

        console.log("X1_1: " + X1_1);
        console.log("S1_1: " + S1_1);
        console.log("D1: " + D1);

        // Tampilkan nilai D pada input hasil
        $("#ekonomi-budaya-hasil").val(D1.toFixed(2));
    });

    // Pendidikan
    $("#kalkulator-form-pendidikan").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X2_1 = parseFloat($("#pendidikan-1").val());
        const X2_2 = parseFloat($("#pendidikan-2").val());
        const X2_3 = parseFloat($("#pendidikan-3").val());
        const X2_4 = parseFloat($("#pendidikan-4").val());
        const X2_5 = parseFloat($("#pendidikan-5").val());
        const X2_6 = parseFloat($("#pendidikan-6").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X2_1 = 0;
        const max_X2_1 = 15;
        const S2_1 = (X2_1 - min_X2_1) / (max_X2_1 - min_X2_1);

        const min_X2_2 = 0;
        const max_X2_2 = 18;
        const S2_2 = (X2_2 - min_X2_2) / (max_X2_2 - min_X2_2);

        const min_X2_3 = 0;
        const max_X2_3 = 100;
        const S2_3 = (X2_3 - min_X2_3) / (max_X2_3 - min_X2_3);

        const min_X2_4 = 0;
        const max_X2_4 = 45;
        const S2_4 = (X2_4 - min_X2_4) / (max_X2_4 - min_X2_4);

        const min_X2_5 = 0;
        const max_X2_5 = 100;
        const S2_5 = (X2_5 - min_X2_5) / (max_X2_5 - min_X2_5);

        const min_X2_6 = 0;
        const max_X2_6 = 100;
        const S2_6 = (X2_6 - min_X2_6) / (max_X2_6 - min_X2_6);

        // Hitung nilai dimensi (D)
        const D2 = ((S2_1 + S2_2 + S2_3 + S2_4 + S2_5 + S2_6) / 6) * 100;

        console.log("X2_1: " + X2_1);
        console.log("X2_2: " + X2_2);
        console.log("X2_3: " + X2_3);
        console.log("X2_4: " + X2_4);
        console.log("X2_5: " + X2_5);
        console.log("X2_6: " + X2_6);
        console.log("S2_1: " + S2_1);
        console.log("S2_2: " + S2_2);
        console.log("S2_3: " + S2_3);
        console.log("S2_4: " + S2_4);
        console.log("S2_5: " + S2_5);
        console.log("S2_6: " + S2_6);
        console.log("D2: " + D2);

        // Tampilkan nilai D pada input hasil
        $("#pendidikan-hasil").val(D2.toFixed(2));
    });

    // Ketahanan Sosial Budaya
    $("#kalkulator-form-ketahanan-sosial-budaya").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X3_1 = parseFloat($("#ketahanan-sosial-budaya-1").val());
        const X3_2 = parseFloat($("#ketahanan-sosial-budaya-2").val());
        const X3_3 = parseFloat($("#ketahanan-sosial-budaya-3").val());
        const X3_4 = parseFloat($("#ketahanan-sosial-budaya-4").val());
        const X3_5 = parseFloat($("#ketahanan-sosial-budaya-5").val());
        const X3_6 = parseFloat($("#ketahanan-sosial-budaya-6").val());
        const X3_7 = parseFloat($("#ketahanan-sosial-budaya-7").val());
        const X3_8 = parseFloat($("#ketahanan-sosial-budaya-8").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X3_1 = 0;
        const max_X3_1 = 100;
        const S3_1 = (X3_1 - min_X3_1) / (max_X3_1 - min_X3_1);

        const min_X3_2 = 0;
        const max_X3_2 = 100;
        const S3_2 = (X3_2 - min_X3_2) / (max_X3_2 - min_X3_2);

        const min_X3_3 = 0;
        const max_X3_3 = 100;
        const S3_3 = (X3_3 - min_X3_3) / (max_X3_3 - min_X3_3);

        const min_X3_4 = 0;
        const max_X3_4 = 100;
        const S3_4 = (X3_4 - min_X3_4) / (max_X3_4 - min_X3_4);

        const min_X3_5 = 0;
        const max_X3_5 = 100;
        const S3_5 = (X3_5 - min_X3_5) / (max_X3_5 - min_X3_5);

        const min_X3_6 = 0;
        const max_X3_6 = 100;
        const S3_6 = (X3_6 - min_X3_6) / (max_X3_6 - min_X3_6);

        const min_X3_7 = 0;
        const max_X3_7 = 50;
        const S3_7 = (X3_7 - min_X3_7) / (max_X3_7 - min_X3_7);

        const min_X3_8 = 0;
        const max_X3_8 = 100;
        const S3_8 = (X3_8 - min_X3_8) / (max_X3_8 - min_X3_8);

        // Hitung nilai dimensi
        const D3 =
            ((S3_1 + S3_2 + S3_3 + S3_4 + S3_5 + S3_6 + S3_7 + S3_8) / 8) * 100;

        console.log("X3_1: " + X3_1);
        console.log("X3_2: " + X3_2);
        console.log("X3_3: " + X3_3);
        console.log("X3_4: " + X3_4);
        console.log("X3_5: " + X3_5);
        console.log("X3_6: " + X3_6);
        console.log("X3_7: " + X3_7);
        console.log("X3_8: " + X3_8);
        console.log("S3_1: " + S3_1);
        console.log("S3_2: " + S3_2);
        console.log("S3_3: " + S3_3);
        console.log("S3_4: " + S3_4);
        console.log("S3_5: " + S3_5);
        console.log("S3_6: " + S3_6);
        console.log("S3_7: " + S3_7);
        console.log("S3_8: " + S3_8);
        console.log("D3: " + D3);

        // Tampilkan nilai D pada input hasil
        $("#ketahanan-sosial-budaya-hasil").val(D3.toFixed(2));
    });

    // Warisan Budaya
    $("#kalkulator-form-warisan-budaya").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X4_1 = parseFloat($("#warisan-budaya-1").val());
        const X4_2 = parseFloat($("#warisan-budaya-2").val());
        const X4_3 = parseFloat($("#warisan-budaya-3").val());
        const X4_4 = parseFloat($("#warisan-budaya-4").val());
        const X4_5 = parseFloat($("#warisan-budaya-5").val());
        const X4_6 = parseFloat($("#warisan-budaya-6").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X4_1 = 0;
        const max_X4_1 = 50;
        const S4_1 = (X4_1 - min_X4_1) / (max_X4_1 - min_X4_1);

        const min_X4_2 = 0;
        const max_X4_2 = 50;
        const S4_2 = (X4_2 - min_X4_2) / (max_X4_2 - min_X4_2);

        const min_X4_3 = 0;
        const max_X4_3 = 100;
        const S4_3 = (X4_3 - min_X4_3) / (max_X4_3 - min_X4_3);

        const min_X4_4 = 0;
        const max_X4_4 = 100;
        const S4_4 = (X4_4 - min_X4_4) / (max_X4_4 - min_X4_4);

        const min_X4_5 = 0;
        const max_X4_5 = 30;
        const S4_5 = (X4_5 - min_X4_5) / (max_X4_5 - min_X4_5);

        const min_X4_6 = 0;
        const max_X4_6 = 95;
        const S4_6 = (X4_6 - min_X4_6) / (max_X4_6 - min_X4_6);

        // Hitung nilai dimensi (D)
        const D4 = ((S4_1 + S4_2 + S4_3 + S4_4 + S4_5 + S4_6) / 6) * 100;

        console.log("X4_1: " + X4_1);
        console.log("X4_2: " + X4_2);
        console.log("X4_3: " + X4_3);
        console.log("X4_4: " + X4_4);
        console.log("X4_5: " + X4_5);
        console.log("X4_6: " + X4_6);
        console.log("S4_1: " + S4_1);
        console.log("S4_2: " + S4_2);
        console.log("S4_3: " + S4_3);
        console.log("S4_4: " + S4_4);
        console.log("S4_5: " + S4_5);
        console.log("S4_6: " + S4_6);
        console.log("D4: " + D4);

        // Tampilkan nilai D pada input hasil
        $("#warisan-budaya-hasil").val(D4.toFixed(2));
    });

    // Ekspresi Budaya
    $("#kalkulator-form-ekspresi-budaya").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X5_1 = parseFloat($("#ekspresi-budaya-1").val());
        const X5_2 = parseFloat($("#ekspresi-budaya-2").val());
        const X5_3 = parseFloat($("#ekspresi-budaya-3").val());
        const X5_4 = parseFloat($("#ekspresi-budaya-4").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X5_1 = 0;
        const max_X5_1 = 30;
        const S5_1 = (X5_1 - min_X5_1) / (max_X5_1 - min_X5_1);

        const min_X5_2 = 0;
        const max_X5_2 = 20;
        const S5_2 = (X5_2 - min_X5_2) / (max_X5_2 - min_X5_2);

        const min_X5_3 = 0;
        const max_X5_3 = 7;
        const S5_3 = (X5_3 - min_X5_3) / (max_X5_3 - min_X5_3);

        const min_X5_4 = 0;
        const max_X5_4 = 45;
        const S5_4 = (X5_4 - min_X5_4) / (max_X5_4 - min_X5_4);

        // Hitung nilai dimensi (D)
        const D5 = ((S5_1 + S5_2 + S5_3 + S5_4) / 4) * 100;

        console.log("X5_1: " + X5_1);
        console.log("X5_2: " + X5_2);
        console.log("X5_3: " + X5_3);
        console.log("X5_4: " + X5_4);
        console.log("S5_1: " + S5_1);
        console.log("S5_2: " + S5_2);
        console.log("S5_3: " + S5_3);
        console.log("S5_4: " + S5_4);
        console.log("D5: " + D5);

        // Tampilkan nilai D pada input hasil
        $("#ekspresi-budaya-hasil").val(D5.toFixed(2));
    });

    // Gender
    $("#kalkulator-form-gender").submit(function (event) {
        event.preventDefault(); // Mencegah perilaku bawaan form

        // Ambil nilai Xi dari input
        const X7_1 = parseFloat($("#gender-1").val());
        const X7_2 = parseFloat($("#gender-2").val());
        const X7_3 = parseFloat($("#gender-3").val());

        // Hitung nilai Si untuk setiap Xi
        const min_X7_1 = 0;
        const max_X7_1 = 100;
        const S7_1 = (X7_1 - min_X7_1) / (max_X7_1 - min_X7_1);

        const min_X7_2 = 0;
        const max_X7_2 = 100;
        const S7_2 = (X7_2 - min_X7_2) / (max_X7_2 - min_X7_2);

        const min_X7_3 = 0;
        const max_X7_3 = 100;
        const S7_3 = (X7_3 - min_X7_3) / (max_X7_3 - min_X7_3);

        // Hitung nilai dimensi (D)
        const D7 = ((S7_1 + S7_2 + S7_3) / 3) * 100;

        console.log("X7_1: " + X7_1);
        console.log("X7_2: " + X7_2);
        console.log("X7_3: " + X7_3);
        console.log("S7_1: " + S7_1);
        console.log("S7_2: " + S7_2);
        console.log("S7_3: " + S7_3);
        console.log("D7: " + D7);

        // Tampilkan nilai D pada input hasil
        $("#gender-hasil").val(D7.toFixed(2));
    });
});
