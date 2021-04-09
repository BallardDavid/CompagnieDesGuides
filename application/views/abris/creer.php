<h1>Ajouter un abri</h1>

<?php
    $this->load->helper('form');
    echo form_open('abris/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>

  <label for="Nom de l'abris">Nom de l'abris</label>
  <?php echo form_error('nom'); ?>
  <input type="text" name="nom" value="<?php echo set_value('nom'); ?>" />

  <label for="Type d'abris">Type</label>
  <?php echo form_error('type_abris'); ?>
  <select name="type_abris">
    <option value="<?php echo set_value('type_abris'); ?>"selected></option>
    <option value="refuge">Refuge</option>
    <option value="cabane">Cabane</option>
  </select>
  
  <label for="Altitude">Altitude</label>
  <?php echo form_error('altitude'); ?>
  <input type="number" name="altitude" value="<?php echo set_value('altitude'); ?>" />

  <label for="Nombre de places">Nombre de places</label>
  <?php echo form_error('nb_places'); ?>
  <input type="number" name="nb_places" value="<?php echo set_value('nb_places'); ?>"/>

  
  <label for="Prix d'une nuit">Prix d'une nuit</label>
  <?php echo form_error('prix_nuit'); ?>
  <input type="text" name="prix_nuit" value="<?php echo set_value('prix_nuit'); ?>"/>

  <label for="Prix d'un repas">Prix d'un repas</label>
  <?php echo form_error('prix_repas'); ?>
  <input type="text" name="prix_repas" value="<?php echo set_value('prix_repas'); ?>"/>

  <label for="Téléphone du gardien">Téléphone du gardien</label>
  <?php echo form_error('tel_gardien'); ?>
  <input type="number" name="tel_gardien" value="<?php echo set_value('tel_gardien'); ?>"/>

  <label for="Code la Vallée">Code de la Vallée</label>
  <?php echo form_error('code_vallee'); ?>
  <input type="number" name="code_vallee" value="<?php echo set_value('code_vallee'); ?>"/>

  <input type="submit" name="submit" value="Créer !" /><br>
</form>
