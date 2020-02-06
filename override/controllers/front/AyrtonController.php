<?php
class AyrtonControllerCore extends FrontController
{
public $php_self = 'ayrton';

    public function initContent(){
        $this->context->smarty->assign(
        array(
        'variableSmarty1' => 'Prueba 1',
        'variableSmarty2' => 'Prueba 2',
        )
    );

    parent::initContent();

        if(isset($_GET['delivry'])){
            $this->generateDeliverySlipPDFByIdOrder((int) $_GET['delivry']);
        }
        if(isset($_GET['invoice'])){
            $this->generateInvoicePDFByIdOrder((int) $_GET['invoice']);
        }
        $this->setTemplate('frontpdf');
    }

    public function generateDeliverySlipPDFByIdOrder($id_order)
    {
        $order = new Order((int) $id_order);
        if (!Validate::isLoadedObject($order)) {
            throw new PrestaShopException('Can\'t load Order object');
        }

        $order_invoice_collection = $order->getInvoicesCollection();
        $this->generatePDF($order_invoice_collection, PDF::TEMPLATE_DELIVERY_SLIP);
    }

    public function generateInvoicePDFByIdOrder($id_order)
    {
        $order = new Order((int) $id_order);
        if (!Validate::isLoadedObject($order)) {
            die($this->trans('The order cannot be found within your database.', array(), 'Admin.Orderscustomers.Notification'));
        }

        $order_invoice_list = $order->getInvoicesCollection();
        Hook::exec('actionPDFInvoiceRender', array('order_invoice_list' => $order_invoice_list));
        $this->generatePDF($order_invoice_list, PDF::TEMPLATE_INVOICE);
    }


    public function generatePDF($object, $template)
    {
        $pdf = new PDF($object, $template, Context::getContext()->smarty);
        $pdf->render();
    }

}