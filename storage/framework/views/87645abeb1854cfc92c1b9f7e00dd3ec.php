<style>
    /* Algemene styling voor het formulier */
    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    form div {
        margin-bottom: 15px;
    }

    /* Styling voor labels */
    label {
        font-weight: bold;
        font-size: 1rem;
        color: #333;
        display: block;
        margin-bottom: 5px;
    }

    /* Styling voor inputvelden */
    input {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    /* Focus-effecten voor invoervelden */
    input:focus {
        border-color: #9f180b;
        outline: none;
        box-shadow: 0 0 5px rgb(159, 24, 11);
    }

    /* Styling voor de submit knop */
    button {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: white;
        font-size: 1.2rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Hover-effect voor de submit knop */
    button:hover {
        background-color: #45a049;
    }

    /* Styling voor errorberichten */
    div.error {
        color: #ff0000;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    /* Kleine aanpassingen voor de mobiele weergave */
    @media (max-width: 480px) {
        form {
            width: 90%;
            padding: 15px;
        }

        label {
            font-size: 0.9rem;
        }

        input {
            font-size: 1rem;
        }
    }

</style>

    <!-- resources/views/auth/register.blade.php -->
<form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>

    <div>
        <label for="name">Naam</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>

    <div>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <label for="password">Wachtwoord</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Bevestig wachtwoord</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Registreren</button>
    </div>
</form>
<?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/auth/register.blade.php ENDPATH**/ ?>