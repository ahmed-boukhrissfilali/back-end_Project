





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="ajouterReg.php" method="POST">
  <div class="mb-3 container">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
   
  </div>
  <div class="mb-3 container">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control"  name="prenom">
  </div>
  <div class="mb-3 container">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="mb-3 container">
    <label for="exampleInputPassword1" class="form-label">Numero de Télephone</label>
    <input type="number" class="form-control"  name="num">
  </div>
  <div class="mb-3 container">
    <label for="exampleInputPassword1" class="form-label">Date de naisance</label>
    <input type="date" class="form-control" name="dateN" >
  </div>
  <div class="mb-3 container">
  <label for="exampleInputPassword1" class="form-label">Genre</label>
  <select class="form-select" aria-label="Default select example" name="genre">
  <option selected>Open this select menu</option>
  <option  name="genre">Homme</option>
  <option  name="genre">Femme</option>
 
</select>
  </div>
  <div class="mb-3 container">
  <label for="exampleInputPassword1" class="form-label">Nationalite</label>
  <select class="form-select" aria-label="Default select example" name="natio">
  <option selected>Open this select menu</option>
  <option  name="natio">Marocain</option>
  <option  name="natio">Etranger</option>
 
</select>
  </div>
 <form action="listeEtudiant.php"> <button type="submit" class="btn btn-primary ">Submit</button></form>
</form>
</body>
</html>