<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css"?>">
    </head>
    <body>
            <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."db.jpeg"?>">    
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username">

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
    </body>
</html> 