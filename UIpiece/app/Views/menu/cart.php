<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <?= $this->include('templates/navdash'); ?>

    <div>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <header class="text-center">
                    <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Keranjang Belanja</h1>
                </header>

                <?php if (isset($cart) && !empty($cart)): ?>
                    <div class="mt-8">
                        <ul class="space-y-4">
                            <?php foreach ($cart as $id => $item): ?>
                                <li class="items-center bg-gray-200 gap-4 p-4 rounded-lg">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-gray-900"><?= $item['name']; ?></h3>

                                        <dl class="mt-2 space-y-2 text-sm text-gray-600">
                                            <div class="flex justify-between">
                                                <dt>Price:</dt>
                                                <dd>Rp <?= number_format($item['price'], 2); ?></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt>Quantity:</dt>
                                                <dd><?= $item['quantity']; ?></dd>
                                            </div>
                                        </dl>
                                    </div>

                                    <div class="flex items-center gap-2 mt-3">
                                        <a href="/cart/remove/<?= $item['id']; ?>"
                                            onclick="return confirm('Are you sure you want to remove this item?')"
                                            class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                            Remove
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <p class="text-gray-700">Your cart is empty!</p>
                <?php endif; ?>
            </div>

            <div class="mt-8 flex justify-center border-t border-gray-100 pt-8">
                <div class="w-screen max-w-lg space-y-4">
                    <div class="flex justify-center">
                        <a href="<?= base_url('menu') ?>"
                            class="mr-5 inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none active:text-blue-500">
                            kembali
                        </a>
                        <a href="#"
                            class="inline-block shrink-0 rounded-md border border-yellow-400 bg-yellow-400 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-yellow-600 focus:outline-none active:text-yellow-500">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>