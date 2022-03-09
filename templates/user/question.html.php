<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>créer question</title>
    <link rel="stylesheet"  href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.question.css"?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    
       <form action="<?=WEB_ROOT?>"  method="POST" >
           <input type="hidden" name="nbr" id="nbr">
           <input type="hidden" name="controlers" id="" value="user">
           <input type="hidden" name="action" id="" value="question">
            <div class="question">
                    <h2> PARAMÉTREZ VOS QUESTIONS</h2>
                    <div class="input1">
                        <label for="question">Questions</label>
                        <input type="text" id="texteara" name="put1"></input>
                    </div>
                    <div class="input2">
                        <label for="question">Nbre de Point</label>
                        <input type="number" id="" name="put2">
                    </div>
                    <div class="input3">
                        <div class="selection">
                        <label for="">Type de Question</label>
                        <select id="selection" name="put3">
                    
                            <option value="choix_simple" placeholder="Donnez votre réponse" > choix simple</option>
                            <option value="choix_multiple" placeholder="Donnez votre réponse"> choix multiple</option>
                            <option value="text" placeholder="Donnez votre réponse">text </option>
                        </select>
                        </div>
                        <div class="addision">
                       <div id="add">Add</div>
                     
                        </div>
                    </div>
                    <div class="input4" id="demo">
                    
                                        
                    </div>
                    <button type="submit" >Enregistrer</button>
            </div>
            
         </form>
                
    
</body>
<script src=" <?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.question.js"?>"></script>
</html>