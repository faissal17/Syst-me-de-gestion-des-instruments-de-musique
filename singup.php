    <?php
    require('scripts.php')
    ?>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Regist page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="stylesheet" href="styles.css">
            <!-- parsley -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    </head>

 <body>
 <style>
        body{
  background-image: url(Tumblr.jpg);
}
    </style>
        <div class="form-style">
           <form action="" method="POST" id="form" data-parsley-validate>
                <h3>please regist</h3>
                   <input type="text" name="name"  placeholder="User Name" required>
                     <input type="email" name="email"  placeholder="email" required>
                         <input type="password" name="password" id="pass"  placeholder="password"  data-parsley-minlenght="5" data-parsley-message="set a password more than 5 characters" required>
                         <input type="password"  id="cpass"  placeholder="confirm your password" data-parsley-equalto="#pass" data-parsley-message="confirm the password"  required >
                     <input type="submit" name="submit" value="register now" class="form-btn">
                   <p class="fs-5 m-3 text-light">already have an account? <a class="text-decoration-none text-danger" href="login.php">login now</a></p>
            </form>
        </div>   
</body>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="script.js"></script> -->
    </html>