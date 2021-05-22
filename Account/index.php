<form action="logar.php" method="post">
    <input type="text" name="user" placeholder="User">
    <input type="password" name="pass" placeholder="Senha">
    <button>Logar</button>
    <?php
    session_start();
    if(isset($_SESSION['campos_branco'])): ?>
        <span>Verifique os campos!</span>
        <script src="verification.js"></script>
        <?php
            endif;
            unset($_SESSION['campos_branco']);
    ?>

    <?php
    if(isset($_SESSION['logado'])): ?>
        <span>Logado!</span>
        <script src="verification.js"></script>
        <?php
            endif;
            unset($_SESSION['logado']);
    ?>
    <?php
    if(isset($_SESSION["id"])){
        echo "<br>" . $_SESSION["id"]. "<br>";
        echo $_SESSION["user"]. "<br>";
        echo $_SESSION["img"]. "<br>";
        echo $_SESSION["cargo"]. "<br>";
        echo $_SESSION["email"]. "<br>";
    }
    ?>

    

</form>

<form action="register.php" method="post">
    <input type="text" name="user" placeholder="User">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pass1" placeholder="Senha 1">
    <input type="password" name="pass2" placeholder="Senha 2">
    <button>Registrar</button>
</form>
    <?php
    if(isset($_SESSION['campos_branco2'])): ?>
        <span>Verifique os campos!</span>
        <script src="verification.js"></script>
        <?php
            endif;
            unset($_SESSION['campos_branco2']);
    ?>

    <?php
    if(isset($_SESSION['senhaserradas'])): ?>
        <span>Senhas não coincidência</span>
        <script src="verification.js"></script>
        <?php
            endif;
            unset($_SESSION['senhaserradas']);
    ?>

    <?php
    if(isset($_SESSION['erro'])): ?>
        <span>User/pass já existe</span>
        <script src="verification.js"></script>
        <?php
            endif;
            unset($_SESSION['erro']);
    ?>



<form action="exit.php" method="post">
    <button>sair</button>
</form>