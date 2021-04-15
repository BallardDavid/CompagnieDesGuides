<?php
foreach ($abris as $c){
  echo '<h2>'.$c->nom_Abris.'</h2>';
    echo form_open('abris/modifier/'.$c->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer
    $this->load->helper('form');
?>
<div class="form-row container">

<div class="col-md-12 mb-1">
  <label for="Nom de l'abris" class="col-form-label" >Nom de l'abris</label>
  <input type="text" name="nom" class="form-control" value="<?php echo $c->nom_Abris; ?>" />
  <div class="text-danger"><small><?php echo form_error('nom'); ?></small></div>
</div>

<div class="col-md-6 mb-3">

  <label for="Type d'abris" class="col-form-label">Type</label>

  <select name="type_abris" class="form-control">
    <option value=""></option>
    <option value="refuge" <?php if ($c->type_Abris == "refuge"){echo "selected";}?>>Refuge</option>
    <option value="cabane" <?php if ($c->type_Abris == "cabane"){echo "selected";}?>>Cabane</option>
  </select>  

  <div class="text-danger"><small><?php echo form_error('type_abris'); ?></small></div>

</div>

<div class="col-md-6 mb-3">

  <label for="Altitude" class="col-form-label">Altitude</label>
  
  <input type="number" name="altitude" class="form-control" value="<?php echo $c->altitude_Abris; ?>" />
  
  <div class="text-danger"><small><?php echo form_error('altitude'); ?></small></div>

</div>

<div class="col-md-6 mb-3">

  <label for="Nombre de places" class="col-form-label">Nombre de places</label>

  <input type="number" name="nb_places" class="form-control" value="<?php echo $c->places_Abris; ?>"/>

  <div class="text-danger"><small><?php echo form_error('nb_places'); ?></small></div>

</div>

<div class="col-md-6 mb-3">

  <label for="Prix d'une nuit" class="col-form-label">Prix d'une nuit</label>
  
  <input type="text" name="prix_nuit" class="form-control" value="<?php echo $c->prixNuit_Abris; ?>"/>
  
  <div class="text-danger"><small><?php echo form_error('prix_nuit'); ?></small></div>

</div>

<div class="col-md-6 mb-3">

  <label for="Prix d'un repas" class="col-form-label">Prix d'un repas</label>

  <input type="text" name="prix_repas" class="form-control" value="<?php echo $c->prixRepas_Abris; ?>"/>

  <div class="text-danger"><small><?php echo form_error('prix_repas'); ?></small></div>

</div>

<div class="col-md-6 mb-3">

  <label for="Téléphone du gardien" class="col-form-label">Téléphone du gardien</label>

  <input type="number" name="tel_gardien" class="form-control" value="<?php echo $c->telGardien_Abris; ?>"/>

  <div class="text-danger"><small><?php echo form_error('tel_gardien'); ?></small></div>

</div>

<div class="col-md-12 mb-3">

  <label for="Code de la Vallée" class="col-form-label">Code de la Vallée</label>

    <select name="code_vallee" class="form-control">
      <option value="<?php echo $c->code_Vallees; ?>"><?php echo $c->code_Vallees; ?></option>
      <?php 
      foreach ($vallees as $v){
          echo "<option value=".$v->code_Vallees.">".$v->code_Vallees."</option>";
      }
      ?>
    </select>
    
    <div class="text-danger"><small><?php echo form_error('code_vallee'); ?></small></div>
</div>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Modifier !" />
  </div>
</form>
   <?php
    }
?>
  
