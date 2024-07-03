<?php
require('fpdf.php');
include('../function.php');

if(isset($_POST['cetak'])){

    $query = "SELECT group_name, negara, win, draw, lose, point FROM data_group";
    $result = mysqli_query($conn, $query);

    // Membuat instance FPDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    
    $title = "Data Klasemen Group A";
    $pdf->Cell(0, 10, $title, 0, 1, 'C');
    $pdf->Ln(10);

    // Lebar kolom
    $column_widths = [40, 40, 40, 40, 40];
    
    // Lebar total tabel
    $table_width = array_sum($column_widths);
    
    // Menghitung margin kiri agar tabel berada di tengah
    $margin_left = ($pdf->GetPageWidth() - $table_width) / 2;
    
    // Mengatur posisi X awal
    $pdf->SetX($margin_left);
    
    // Header tabel
    $pdf->Cell($column_widths[0], 10, 'Negara', 1);
    $pdf->Cell($column_widths[1], 10, 'Menang', 1);
    $pdf->Cell($column_widths[2], 10, 'Seri', 1);
    $pdf->Cell($column_widths[3], 10, 'Kalah', 1);
    $pdf->Cell($column_widths[4], 10, 'Poin', 1);
    $pdf->Ln();

    // Mengisi tabel dengan data dari database
    while ($row = $result->fetch_assoc()) {
        // Mengatur posisi X awal setiap kali menambahkan baris baru
        $pdf->SetX($margin_left);
        
        $pdf->Cell($column_widths[0], 10, $row['negara'], 1);
        $pdf->Cell($column_widths[1], 10, $row['win'], 1);
        $pdf->Cell($column_widths[2], 10, $row['draw'], 1);
        $pdf->Cell($column_widths[3], 10, $row['lose'], 1);
        $pdf->Cell($column_widths[4], 10, $row['point'], 1);
        $pdf->Ln();
    }

    // Output file PDF
    $pdf->Output();
}
?>

