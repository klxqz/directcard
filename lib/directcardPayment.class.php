<?php

/**
 *
 * @author wa-plugins.ru
 * @name DirectCart
 * @description DirectCart Payments
 *
 * @property-read string $userName
 * @property-read string $password
 * @property-read string $sandbox
 */
class directcardPayment extends waPayment implements waIPayment {

    private $currency = array(
        '840' => 'USD',
        '980' => 'UAH',
        '810' => 'RUB',
        '946' => 'RON',
        '398' => 'KZT',
        '417' => 'KGS',
        '392' => 'JPY',
        '826' => 'GBR',
        '978' => 'EUR',
        '156' => 'CNY',
        '974' => 'BYR',
    );

    public function allowedCurrency() {
        return $this->currency;
    }

    public function payment($payment_form_data, $order_data, $auto_submit = false) {
        $order = waOrder::factory($order_data);
        $view = wa()->getView();
        $view->assign('data', $payment_form_data);
        $view->assign('order', $order_data);
        $view->assign('payment_text', $this->payment_text);
        return $view->fetch($this->path . '/templates/payment.html');
    }

}
