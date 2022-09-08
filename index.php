<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password_Hash Generator</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.0/zephyr/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row mb-5" style="padding: 30px 0 15px 0;">
            <div class="col-12">
                <h1 class="pb-2">PHP password_hash online generator <i class="fa-solid fa-key text-warning"></i></h1>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-10 col-lg-8">
                        <p>Generate password hashes using the PHP <a href="https://www.php.net/manual/en/function.password-hash.php">password_hash()</a> function from your browser. A quick and simple tool that can be useful when you quickly need to generate a password hash for PHP to manually insert to a database, or similar.</p>
                        <p>The default cost of 10 is used. Passwords and generated hashes are not stored by this service.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12" style="font-size: 1.7rem;">
                password_hash(<input id="input" class="form-control" style="width: 300px; margin: 0 7px ;display: inline-block;" type="text" onkeyup="querydebounce()">,<select id="algo" class="form-select" onchange="query()" style="width: 220px; margin:0 7px; display: inline-block;" name="" id="">
                    <option value="PASSWORD_DEFAULT">PASSWORD_DEFAULT</option>
                    <option value="PASSWORD_BCRYPT">PASSWORD_BCRYPT</option>
                    <option value="PASSWORD_ARGON2I">PASSWORD_ARGON2I</option>
                </select>)
            </div>
        </div>
        <div class="row" style="font-family: monospace; margin-bottom: 80px;">
            <div class="col-12" style="font-size: 1.7rem;">
                = <code id="result" style="font-size: 95%;">null</code> <button id="copybtn" onclick="copyToClipboard()" class="btn btn-sm btn-outline-dark" style="display: none;"><i class="fa-solid fa-clipboard"></i> Copy</button>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <span class="text-muted">&copy; <?php echo date('Y'); ?></span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>