<!DOCTYPE html>
<html lang="en">

<head>

    <title>Connexion BRS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="connexion.css">

</head>

<body>

    <div class="login">

        <h1 class="text-center">BIENVENUE!</h1>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <a href="AjoutEleve"><input class="btn btn-success w-100" type="submit" value="Connexion">cli</a>
        </form>

    </div>
    <div class="cote_droite">
        <img src="open-book-g8467f6ec0_1280.jpg" alt="education" class="image">
    </div>

</body>

</html>