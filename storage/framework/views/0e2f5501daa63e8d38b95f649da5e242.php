<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('/css/homestyles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://github.com/tailwindlabs/tailwindcss-typography.git">
    <title>BancApp</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-title">
            <h2>BANCAPP</h2>
        </div>
    </nav>
    <div class="sm:mx-auto sm:w-full sm:max-w-lg pt-0 pb-20 mt-3 mb-10 rounded bg-gradient-to-b from-blue-500">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg text-center">
            <div class="sm:mx-auto sm:w-full mt-4 py-4 sm:max-w-60 rounded bg-white">
                <p>Bienvenido a Bancapp</p>
            </div>
            <div>
                <p class="mt-2">Estamos aquí para ayudarte a organizar tus finanzas de manera rápida y sencilla</p>
            </div>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm mt-2">
            <form class="space-y-5" action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900"></label>
                    <div class="mt-2 justify-end">
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="Email" required
                               class="block w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                               value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900"></label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               placeholder="Contraseña"
                               class="block w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="grid grid-cols-2 mt-2">
                        <div class="text-sm">
                            <input type="checkbox" id="remember" name="remember" class="font-semibold text-indigo-600 hover:text-indigo-500"></input>
                            <a for="remember">recuerdame</a>
                        </div>
                        <div class="text-sm">
                            <a href="<?php echo e(route('password.forgot')); ?>" class="font-semibold text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            
                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-blue-400 px-0 py-1.5 text-sm/6 font-semibold text-black shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Iniciar sesión
                    </button>
                </div>
            </form>
            <p class="mt-5 text-center text-sm/6 text-gray-500">
                ¿No tienes cuenta?
                <a href="<?php echo e(route('register')); ?>" class="font-semibold text-indigo-600 hover:text-indigo-500">Regístrate</a>
            </p>
            <div class="mt-5 text-center text-sm/6 text-gray-500">
                o conectese con
                <a href="<?php echo e(route('register')); ?>" class="flex justify-center font-semibold text-indigo-600 hover:text-indigo-500 "><img width="48" height="48" src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo"/></a>
            </div>
        </div>
    </div>
    <footer class="footer bg-blue-400 text-black p-4">
        <div class="grid grid-cols-2 items-center">
            <!-- Texto alineado a la izquierda -->
            <div class="justify-self-start">
                <p class="foot-text">&copy; 2024 Bancapp. Todos los derechos reservados.</p>
            </div>
            <!-- Iconos alineados a la derecha -->
            <div class="icons flex justify-end space-x-4">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/instagram-new--v1.png" alt="icono-ig">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/youtube-play--v1.png" alt="icono-youtube">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/facebook-new.png" alt="icono-facebook">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/twitterx--v2.png" alt="icono-x">
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/auth/login.blade.php ENDPATH**/ ?>