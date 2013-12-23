<?php

return array(
    'card' => array(
        'value' => '',
        'title' => 'Номер банковской карты',
        'description' => '',
        'control_type' => waHtmlControl::INPUT,
    ),
    'recipient' => array(
        'value' => '',
        'title' => 'Имя получателя платежа',
        'description' => '',
        'control_type' => waHtmlControl::INPUT,
    ),
    'percent' => array(
        'value' => '5',
        'title' => 'Наценка в процентах',
        'description' => '',
        'control_type' => waHtmlControl::INPUT,
    ),
    'payment_text' => array(
        'value' => 'После подтверждения заказа, вам будет выслано письмо с реквизитами для оплаты',
        'title' => 'Текст уведомления ',
        'description' => '',
        'control_type' => waHtmlControl::TEXTAREA,
    ),
);
