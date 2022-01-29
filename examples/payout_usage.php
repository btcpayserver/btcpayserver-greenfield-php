<?

use BTCPayServer\Client\PullPayment;

class PullPayments {

    public function getStorePullPayments()
    {
        $apiKey = '';
        $host = '';
        $storeId = '';
        $includeArchived = TRUE;

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->getStorePullPayments(
                                $storeId, 
                                $includeArchived));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function createPullPayment()
    {
        $apiKey = '';
        $host = '';
        $storeId = '';
        $paymentName = 'TestPayout-' . rand(0,10000000);
        $paymentAmount = '0.000001';
        $paymentCurrency = 'BTC';
        $paymentPeriod = NULL;
        $boltExpiration = 1;
        $startsAt = NULL;
        $expiresAt = NULL;
        $paymentMethods = ['BTC'];

        try {
            $client = new PullPayment($host, $apiKey);
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
    }

    public function archivePullPayment()
    {
        $apiKey = '';
        $host = '';
        $storeId = '';
        $pullPaymentId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->archivePullPayment(
                                $storeId, 
                                $pullPaymentId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function cancelPayout()
    {
        $apiKey = '';
        $host = '';
        $storeId = '';
        $payoutId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->cancelPayout(
                                $storeId, 
                                $payoutId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function markPayoutAsPaid()
    {
        $apiKey = '';
        $host = '';
        $storeId = '';
        $payoutId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->markPayoutAsPaid(
                                $storeId, 
                                $payoutId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


