<?php

// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.


$titleTeachers='';
$michelePagani='';
$fabioForghieri= '';

$titlePm='';
$robertoMarazzini='';
$federicoPellegrini= '';


 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


    
    


    
    for($i = 0; $i < count($db) -1 ; $i++){

        
        //attribuisco a una variabile il valore di "teachers"
        $teachers = $db['teachers'];
        
       
        //Michele Papagni
        $michelePagani =  $teachers[0]['name'] .'-' . $teachers[0]['lastname'];
        echo $michelePagani;
        //Fabio Forghieri
        $fabioForghieri =  $teachers[1]['name'] .'-' . $teachers[1]['lastname'];
        echo $fabioForghieri;
        
        //--------------------------------------------------------------------------// 

        //attribuisco a una variabile il valore di "pm"
        $pm = $db['pm'];
        //robertoMarazzini
        $robertoMarazzini =  $pm[0]['name'] .'-' . $pm[0]['lastname'];
        echo$robertoMarazzini;

        //federicoPellegrini
        $federicoPellegrini =  $pm[1]['name'] .'-' . $pm[1]['lastname'];
        echo $federicoPellegrini;
        
         //attribuisco a una variabile la stringa pm
        $titlePm = array_keys($db)[1];
        //attribuisco a una variabile la stringa teachers
        $titleTeachers = array_keys($db)[0];

  
        
    }
     echo $titleTeachers ;
     echo  $titlePm  ;
   
 
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
  <main class='d-flex justify-content-around align-items-center vh-100'>


    <!-- grey card -->
    <div>
      <div class="card text-center text-bg-secondary mb-3" style="max-width: 18rem;">
         <div class="card-header"><?php echo $titleTeachers  ?></div>
           <div class="card-body">
             <h5 class="card-title"><?php echo $michelePagani ?></h5>
             <h5 class="card-title"><?php echo $fabioForghieri?></h5>

           </div>
         </div>
     </div>
    <!-- green card -->
    <div>
     <div class="card text-center text-bg-success mb-3" style="max-width: 18rem;">
       <div class="card-header"><?php echo  $titlePm  ?></div>
        <div class="card-body">
          <h5 class="card-title"><?php echo$robertoMarazzini ?></h5>
          <h5 class="card-title"><?php echo $federicoPellegrini ?></h5>

        </div>
      </div>
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







