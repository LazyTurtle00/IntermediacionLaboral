<?php include '../templates/header.php'; ?>

<main class="py-5">
    <div class="container">
        <section>
            <form action="/intermediacion-laboral-jovenes/controllers/auth.php" method="POST" id="formLoginReal">
                <input type="hidden" name="action" value="login">

                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control mb-3" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control mb-3" required>

                <button type="submit" class="btn-gradiente w-100 ">Ingresar</button>
            </form>
        </section>
    </div>
</main>

<?php include '../templates/footer.php'; ?>