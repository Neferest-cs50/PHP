
<?php include 'inc/header.php'; ?>
  
  <?php include "Core/Database.php"; ?>
  
  <!-- Start -->
  <?php
    
    $btn = "ajouter";
    

    if (isset($_POST["name"])) {
      
      $op = "";
      $class = "";
      $msg = "";

      extract($_POST); // $name | $Job
      
      if (!isset($id)) {
        $op = "add";
        
        // Add
        $db->add($name, $job);
      } else {
        // Update
        $db->update($name, $job);
      }

      header("location:index.php?op=$op");
    }

  ?>

  <?php 
    // If Get "op" 
    if (isset($_GET['op'])) {
      extract($_GET); // op

      switch ($op) {
        case "add":
          $msg = "Ajout succès!";
          $class = "success";
          break;
        case "del":
          $msg = "Suppression succès!";
          $class = "success";
          break;
        case "upd":
          $msg = "Modification faites avec succès!";
          $class = "warning";
          break;
        default: 
          $msg = "Erreur";
      }
    }
  ?>
  <!-- End -->

  <div class="container">
    <h1>Hello, world!</h1>

    <?php if (isset($op) ): ?>
  		<div class="alert alert-<?=$class ?>" align="center"><?=$msg; ?>
  		</div>
  	<?php endif ?>
    
    <!-- FORMULAIRE -->
    <form class="form-horizontal" style="border:1px solid #ececec; margin: 50px 0; padding: 30px;" method="POST" action="<?php FILEROOT; ?>">
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
          <input id="job" name="job" type="text" placeholder="Emploie" class="form-control input-md">
            
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
    <?php foreach ($db->get_all() as $people) : ?>
      <tr>
        <th scope="row"><?php echo $people['id']; ?></th>
        <td><?php echo $people['name']; ?></td>
        <td><?php echo $people['job']; ?></td>
        <td>
          <a class="btn btn-info btn-xs" href="#">
            <span class="glyphicon glyphicon-edit"></span> Modifier
          </a>
          <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Supprimer
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  </div>
  

<?php include 'inc/footer.php'; ?>