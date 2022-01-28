<?

use BTCPayServer\Client\Payout;

$apiKey = '';
$host = '';
$storeId = '';
$invoiceId = '';
$paymentName = 'TestPayout-' . rand(0,10000000);
$paymentAmount = '0.000001';
$paymentCurrency = 'BTC';
$paymentPeriod = NULL;
$boltExpiration = 1;
$startsAt = NULL;
$expiresAt = NULL;
$paymentMethods = ['BTC', 'BTC-LightningNetwork']; 

// Create a Payout
try {
    $client = new Payout($host, $apiKey);
    var_dump($client->createPullPayment(
                        $storeId, 
                        $paymentName, 
                        $paymentAmount, 
                        $paymentCurrency, 
                        $paymentPeriod, 
                        $boltExpiration, 
                        $startsAt, 
                        $expiresAt, 
                        $paymentMethods)
    );
} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage();
}
