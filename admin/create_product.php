<?php

require '../vendor/autoload.php';

$config = parse_ini_file('../config.ini');

$data_test = [];
$data_test['ten'] = 'product a';
$data_test['mota'] = 'cca';
$data_test['gia'] = 4;


$stripe = new \Stripe\StripeClient(
    $config['stripe_secret_key']
);

// tạo product stripe bằng API
$result_pro = $stripe->products->create([
    'name' => $data_test['ten'],
]);

if ($result_pro) {
    // tạo thành công
    $data_test['product_id'] = $result_pro->id;

    $data_price = [];
    $data_price['product'] = $data_test['product_id'];
    $data_price['currency'] = 'USD';
    //$data_price['type'] = 'one_time';
    $data_price['unit_amount'] = (int)$data_test['gia'] * 100;

    $result_price = $stripe->prices->create($data_price);

    if ($result_price) {
        $data_test['price_id'] = $result_price->id;
    }else {
        $data_test['gia'] = 0;
    }

    // save sản phẩm
    $result_pro = file_put_contents('data.json', json_encode($data_test));
}
