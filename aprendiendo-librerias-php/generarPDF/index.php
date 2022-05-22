hola
<?php
    require '../vendor/autoload.php';
    // invocamos a la libreria 
    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf();

    // buscamos la vista a imprimir
    ob_start();
    require_once 'pdf_para_generar.php';
    $html = ob_get_clean();

    $html2pdf->writeHTML($html);
    // limpiamos cualquier texto anterior
    ob_get_clean();
    $html2pdf->output("pdf2.pdf");


    ?>