<h2 class='text-center'>Ajouter un abri</h2 class='text-center'>

<?php
    $this->load->helper('form');
    echo form_open('abris/creer');
?>
<div class="form-row container">

<div class="col-md-12 mb-1">
  <label for="Nom de l'abris" class="col-form-label">Nom de l'abris</label>
  <input type="text" name="nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
  <div class="text-danger"><small><?php echo form_error('nom'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
  <label for="Type d'abris" class="col-form-label">Type</label>
  <select name="type_abris" class="form-control">
    <option value="<?php echo set_value('type_abris'); ?>"selected></option>
    <option value="refuge">Refuge</option>
    <option value="cabane">Cabane</option>
  </select>
 <div class="text-danger"><small><?php echo form_error('type_abris'); ?></small></div>
 </div>

<div class="col-md-6 mb-3">
  <label for="Altitude" class="col-form-label">Altitude</label>
  <input type="number" name="altitude" class="form-control" value="<?php echo set_value('altitude'); ?>" />
  <div class="text-danger"><small><?php echo form_error('altitude'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
  <label for="Nombre de places" class="col-form-label">Nombre de places</label>
  <input type="number" name="nb_places" class="form-control" value="<?php echo set_value('nb_places'); ?>"/>
  <div class="text-danger"><small><?php echo form_error('nb_places'); ?></small></div>
</div>

<div class="col-md-6 mb-3"> 
  <label for="Prix d'une nuit" class="col-form-label">Prix d'une nuit</label>
  <input type="text" name="prix_nuit" class="form-control" value="<?php echo set_value('prix_nuit'); ?>"/>
  <div class="text-danger"><small><?php echo form_error('prix_nuit'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
  <label for="Prix d'un repas" class="col-form-label">Prix d'un repas</label>
  <input type="text" name="prix_repas" class="form-control" value="<?php echo set_value('prix_repas'); ?>"/>
  <div class="text-danger"><small><?php echo form_error('prix_repas'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
  <label for="Téléphone du gardien" class="col-form-label">Téléphone du gardien</label>
  <input type="number" name="tel_gardien" class="form-control" value="<?php echo set_value('tel_gardien'); ?>"/>
  <div class="text-danger"><small><?php echo form_error('tel_gardien'); ?></small></div>
</div>

<div class="col-md-12 mb-3">
  <label for="Code de la Vallée" class="col-form-label">Code de la Vallée</label>
  <select name="code_vallee" class="form-control">
    <option value="<?php echo set_value('code_vallee'); ?>"><?php echo set_value('code_vallee'); ?></option>
    <?php 
    foreach ($vallees as $v){
        echo "<option value=".$v->code_Vallees.">".$v->code_Vallees."</option>";
    }
    ?>
  </select>
  <div class="text-danger"><small><?php echo form_error('code_vallee'); ?></small></div>
</div>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" /><br>
</form>
