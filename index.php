<?php
   
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <div>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col ">
                            <div class="text-center pt-3">
                                <h1>
                                    STRONG PASSWORD GENERATOR
                                </h1>
                                <h2>
                                    Crea la tua password sicura!
                                </h2>
                            </div>

                        </div>

                    </div>

                </div>

            </header>
            <main >
            <div class="container bg-light">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="mt-3">
                            <?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>
            
                        </h5>
                        <div class="form-group p-5">
                            <form action="showPassword.php" class="form-control d-flex justify-content-around" method="get">
                                <label for="password">Lunghezza password</label>
                                <input class="form-control w-25" type="number" id="password" name="passwordLength">
                                <button class="btn btn-primary" type="submit">Invia</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            </main>
        <div>
        
        </div>
        
    </body>
</html>