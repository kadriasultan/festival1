<style>
    /* Algemene body styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Styling voor het formulier */
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    /* Styling voor de formuliervelden */
    form div {
        margin-bottom: 15px;
    }

    form label {
        display: block;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
    }

    form input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    /* Foutmelding styling */
    form .error {
        color: red;
        font-size: 12px;
    }

    /* Submit button */
    button {
        width: 100%;
        padding: 10px;
        background-color: #9f180b;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: rgba(195, 31, 75, 0.89);
    }

    /* Extra styling voor de tekst onder het formulier (bijvoorbeeld registreren) */
    form p {
        text-align: center;
        font-size: 14px;
        color: #555;
    }

    form p a {
        color: #9f180b;
        text-decoration: none;
    }

    form p a:hover {
        text-decoration: underline;
    }


</style>

<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>  <!-- CSRF-token om beveiliging te waarborgen -->

    <div>
        <label for="email">E-mailadres</label>
        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required autofocus>
    </div>

    <div>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <button type="submit">Inloggen</button>
    </div>
    <!-- resources/views/auth/login.blade.php -->
    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

</form>
<?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/auth/login.blade.php ENDPATH**/ ?>