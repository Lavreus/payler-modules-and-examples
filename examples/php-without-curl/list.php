<?php

//Список всех тестовых примеров
$example_list = array(
    'OneStep' => array(
                       'id'    => 1,
                       'title' => 'Одностадийный платеж',
                       'url'   => 'onestep_payment.php',
                       'files' => 'onestep_payment.php, result.php, payler_class.php, settings.php',
                       'about' => 'Одностадийный платеж с переходом на сайт Payler для оплаты<br/>После оплаты происходит возврат на страницу<br/>"http://localhost/result.php?order_id=<номер_заказа>"<br/>Там проверяется статус платежа и выводится на экран',
                       ),
    'TwoStep' => array(
                       'id'    => 2, 
                       'title' => 'Двухстадийный платеж',
                       'url'   => 'twostep_payment.php',
                       'files' => 'twostep_payment.php, result.php, payler_class.php, settings.php',
                       'about' => 'Двухстадийный платеж с переходом на сайт Payler для оплаты<br/>После оплаты происходит возврат на страницу<br/>"http://localhost/result.php?order_id=<номер заказа>"<br/>Там проверяется статус платежа, если деньги на карте успешно заблокированы, предлагается выполнить разблокировку средств или их списание (эти действия в магазине должны быть доступны администратору, не пользователю, но для примера вынесены на страницу)<br/>После выполнения любой из этих операций будет показан статус заказа',
                       ),
    'IFramePaym' => array(
                       'id'    => 3, 
                       'title' => 'Загрузка страницы оплаты в iframe',
                       'url'   => 'iframe_payment.php',
                       'files' => 'iframe_payment.php, result.php, payler_class.php, settings.php',
                       'about' => 'Одностадийный платеж с загрузкой страницы оплаты в iframe. После оплаты в iframe будет загружена страница возврата <br/>"http://localhost/result.php?order_id=<номер заказа>"<br/>Там проверяется статус платежа и выводится на экран',
                       ),
    'Recurrent' => array(
                       'id'    => 4.1, 
                       'title' => 'Рекуррентные платежи. Создание шаблона',
                       'url'   => 'recurrent_payment.php',
                       'files' => 'recurrent_payment.php, result.php, payler_class.php, settings.php',
                       'about' => 'Одностадийный платеж, с переходом на сайт Payler для оплаты, по которому будет создан шаблон для рекуррентных платежей<br/>После оплаты происходит возврат на страницу<br/>"http://localhost/result.php?order_id=<номер заказа>"<br/>Там проверяется статус платежа, если шаблон для рекуррентных платежей был успешно создан, выполняется еще один платеж с другой суммой без перехода на страницу оплаты, на экран выводится результат этого платежа',
                       ),
    'RecurrentRepeat' => array(
                       'id'    => 4.2, 
                       'title' => 'Рекуррентные платежи. Проведение',
                       'url'   => 'recurrent_payment_repeat.php',
                       'files' => 'recurrent_payment_repeat.php, payler_class.php, settings.php',
                       'about' => 'На экран выводится список всех шаблонов рекуррентных платежей, внизу поле для ввода id шаблона, по которому можно провести платеж<br/>При нажатии на кнопку "Провести" выполняется платеж без перехода на страницу оплаты по указанном шаблону, на экран выводится результат этого платежа',
                       ),
    'CustomForm' => array(
                       'id'    => 5,
                       'title' => 'Пользовательская страница оплаты',
                       'url'   => 'customform_payment.php',
                       'files' => 'customform_payment.php, result.php, payler_class.php, settings.php',
                       'about' => 'Одностадийный платеж с загрузкой нестандартной страницы оплаты. Так же, при открытии формы оплаты, передается несколько параметров для отображения на форме оплаты - текущее время и небольшой текст. После идет возврат на страницу <br/>"http://localhost/result.php?order_id=<номер заказа>"<br/>Там проверяется статус платежа и выводится на экран',
                       ),

);

?>
