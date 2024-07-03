<?php
// Set timezone jika diperlukan
date_default_timezone_set('Asia/Jakarta');

// Array untuk hari dalam bahasa Indonesia
$days = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
];

// Array untuk bulan dalam bahasa Indonesia
$months = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

// Mengambil timestamp saat ini
$timestamp = time();

// Mendapatkan nama hari dan bulan dalam bahasa Inggris
$dayName = date('l', $timestamp);
$monthName = date('F', $timestamp);

// Menerjemahkan nama hari dan bulan ke dalam bahasa Indonesia
$dayNameIndonesian = $days[$dayName];
$monthNameIndonesian = $months[$monthName];

// Menampilkan tanggal dan waktu dalam format yang disesuaikan dengan bahasa Indonesia
echo $dayNameIndonesian . ', ' . date('j', $timestamp) . ' ' . $monthNameIndonesian . ' ' . date('Y', $timestamp) . ' ' . date('g:i A', $timestamp);
?>
