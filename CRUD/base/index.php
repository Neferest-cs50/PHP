
<?php include 'inc/header.php'; ?>
  
  

  <div class="container">
    <h1>Hello, world!</h1>
    
    <!-- FORMULAIRE -->
    <form class="form-horizontal" style="border:1px solid #ececec; margin: 50px 0; padding: 30px;">
      <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Nom complet</label>  
          <div class="col-md-4">
          <input id="name" name="name" type="text" placeholder="Nom complet" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Job">Emploie</label>  
          <div class="col-md-4">
          <input id="Job" name="Job" type="text" placeholder="Emploie" class="form-control input-md">
            
          </div>
        </div>

        <!-- Button - Ajouter - Modifier -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button class="btn btn-primary">Ajouter</button>
          </div>
        </div>

      </fieldset>
    </form>


    <!-- table -->

    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Job</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>
          <a class="btn btn-info btn-xs" href="#">
            <span class="glyphicon glyphicon-edit"></span> Modifier
          </a>
          <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Supprimer
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  

<?php include 'inc/footer.php'; ?>