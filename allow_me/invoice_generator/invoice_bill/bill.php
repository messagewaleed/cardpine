<?php 

if (isset($_POST['order_id'])) {
    /**
     * HTML2PDF Library - example
     *
     * HTML => PDF convertor
     * distributed under the LGPL License
     *
     * @package   Html2pdf
     * @author    Laurent MINGUET <webmaster@html2pdf.fr>
     * @copyright 2016 Laurent MINGUET
     *
     * isset($_GET['vuehtml']) is not mandatory
     * it allow to display the result in the HTML format
     */

    // get the HTML
    ob_start();
    include('res/bill.php');
    $content = ob_get_clean();

    // convert in PDF
    require_once('../vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('bill_'.$_POST['order_id'].'.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
}
