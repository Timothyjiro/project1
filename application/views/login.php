<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 text-left bg-white shadow-lg w-1/4 rounded-lg">
            <div class="flex justify-center">
                <img src=<?= base_url("assets/img/logofix.png"); ?> width="80px">
            </div>
            <form action="<?= base_url('user/login') ?>" method="post">
                <div class="mt-4">
                <?= validation_errors(); ?>
                    <?= $this->session->flashdata('gagal_login'); ?>
                    <div class="mt-4">
                        <label class="block" for="username">Username<label>
                        <input type="text" name="username" placeholder="Americano123" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                        <input type="password" name="password" placeholder="*******" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600">
                    </div>
                    <div class="flex">
                        <button class="w-full px-6 py-2 mt-4 text-white bg-green-600 rounded-lg transition hover:bg-green-700">Login</button>
                    </div>
                    <div class="mt-6 text-grey-dark">
                        Doesn't have an account?
                        <a class="text-green-600 hover:underline" href="daftar">
                            Sign in
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>