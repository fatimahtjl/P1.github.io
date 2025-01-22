<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <!-- Container -->
    <div class="max-w-md mx-auto p-4">
        <div class="space-y-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-900">Pilih Metode Pembayaran</h2>
            </div>
            <form action="/checkout/payment-info" method="get">
                <div class="space-y-4">
                    <label class="block">
                        <input type="radio" name="payment_method" value="bank_transfer" class="form-radio">
                        <span class="ml-2">Transfer Bank</span>
                    </label>
                    <label class="block">
                        <input type="radio" name="payment_method" value="credit_card" class="form-radio">
                        <span class="ml-2">Kartu Kredit</span>
                    </label>
                    <label class="block">
                        <input type="radio" name="payment_method" value="paypal" class="form-radio">
                        <span class="ml-2">PayPal</span>
                    </label>
                </div>
                <button type="submit"
                    class="w-full mt-6 py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Lanjutkan</button>
            </form>
        </div>
    </div>
</body>

</html>