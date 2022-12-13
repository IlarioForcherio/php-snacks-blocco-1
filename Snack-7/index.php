<?php 


// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.


$mediaVoti = 0;

$ilario = 

$students = [
      [
        "nome" => "ilario",
        "cognome" => "Forcherio",
        "voti" => [
            "matematica" => 2,
            "scienze" => 4,
            "fisica" => 5,
            ]
        ],
        [
            "nome" => "elsti",
            "cognome" => "shehati",
            "voti" => [
                "matematica" => 10,
                "scienze" => 8,
                "fisica" => 9,
                ]
            ],
            [
                "nome" => "cristiano",
                "cognome" => "altomonte",
                "voti" => [
                    "matematica" => 6,
                    "scienze" => 4,
                    "fisica" => 9,
                    ]
                ],
];


foreach ($students as $value) {
    //var_dump($value['nome']);
    echo $value['nome']  ;
    //var_dump($value['cognome']);
    echo $value['cognome']. '<br>';
    //var_dump($value['nome']);

    echo array_sum($value['voti']) / count($value['voti']) .'<br>' ;
        
    } 
  

?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main >




<div>
   <?php echo $value['nome']  ?>
</div>





  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>