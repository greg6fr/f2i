
<?php
    function Input ($size,$name,$type,$label,$placeholder) {
        
        $un= '<div class="col-md-'.$size.'"> <div class="mb-3">';
$deux='<label for="'.$name.'" class="form-label">'.$label.'</label>';
$trois='<input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'" placeholder="'.$placeholder.'">
</div>
</div>';
  

    if($type="submit") {
        
        $deux='';
      //  $trois='<input type="'.$type.'" name="'.$name.'" class="form-control col-md-4 bg-success" value="'.$name.'"> </div> </div>';
       
    }

    return $un.$deux.$trois;
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-8">
        <div class="row">
           <?php 
          // $size,$name,$type,$label,$placeholder
        echo'  <form action="result.php" method="get">';
          
          echo Input(4,"nom","text","nom","Votre nom");
          echo Input(4,"prenom","text","prenom","Votre prénom");
          echo Input(4,"email","email","email","Votre email");
          echo Input(4,"Téléphone","tel","telephone","Votre téléphone");
          echo Input(4,"password","password","Votre mot de passe","Votre mot de passe");
          echo Input(4,"password2","password","Confirmation mot de passe","Confirmer mot de passe");
          echo Input(4,"Envoyer","submit","","");
          
          
        echo '</form>';
        
          
           ?>
</div>




       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>