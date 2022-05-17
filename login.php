<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets2/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets2/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets2/assets/css/styles.css">
</head>

<body style="color: var(--bs-green);background: var(--bs-light);">
    <h3 style="text-align:center;background: rgb(133,189,241);">Admin</h3>
    <section class="login-clean" style="margin-top:-5%;background: rgb(133,189,241);height: 650px;border-right-style: none;">
        <div class="ttsstt" style="margin-top:-10%;">
        <form method="post" action="traitLogin.php" style="transform: translateY(90px);height: 388px;box-shadow: 1px 1px 9px var(--bs-green);">
            <div class="mb-3" style="transform: translateY(20px);box-shadow: 1px 1px 0px var(--bs-green);"><input class="form-control" type="text" name="nom" placeholder="Nom" style="transform: translateY(0px);"></div>
            <div class="mb-3" style="transform: translateY(70px);box-shadow: 0px 0px var(--bs-green);"><input class="form-control" type="password" name="mdp" placeholder="Mot de passe" style="transform: translateY(0px);border-left-style: none;"></div>
            <div class="mb-3" style="transform: translateY(100px);"><button class="btn btn-primary d-block w-100" type="submit" style="transform: translateY(0px);background: var(--bs-green);">Se Connecter</button></div>
        </form>
        </div>
    </section>
    <form method="post" action="loginUser.php" style="background: rgb(133,189,241);margin-top:-55%">
        <button class="btn btn-primary" type="submit">User mode</button>
    </form>
    <script src="assets2/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>