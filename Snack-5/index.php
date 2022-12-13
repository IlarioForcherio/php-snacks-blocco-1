<?php 


// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.


$paragraph ='Lorem ipsum dolor sit amet consectetur adipisicing elit, Aliquid non ad nam repellat adipisci, Voluptatem tenetur mollitia atque, non, fugiat iusto iure sequi, ea quis repellat rem iste sint accusantium?.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, Dolores pariatur similique quidem ut! Quaerat assumenda laboriosam hic deleniti aliquid quos saepe quod fugiat, soluta ratione enim, molestias fugit similique aut.
Lorem ipsum dolor sit amet consectetur adipisicing elit, Nam dicta voluptatum odio ad necessitatibus vero illum, sunt delectus ullam distinctio ut numquam similique asperiores tempore dolor eum labore consequatur laboriosam.';


$newArray = explode('.', $paragraph,  -1 );

var_dump($newArray);


for($i= 0; $i < count($newArray); $i++ ){
    echo '<p>' . $newArray[$i] . '</p>';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    

<ul>
    
</ul>



</body>
</html>

