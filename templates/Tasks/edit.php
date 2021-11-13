<?php $this->Html->css('bootstrap',['block'=>true]); ?>

<h3 style="margin: 50px 0;">Aufgabe bearbeiten</h3>

<?= $this->Form->create($task)?>
  <fieldset>
    
    <div class="form-group">
      <label for="taskTitle" class="form-label mt-4">Titel</label>
      <?= $this->Form->control('Title', ['class'=> 'form-control', 'id'=> 'taskTitle', 'label'=>"",'style'=>"margin-bottom: 40px ;"])?>
    </div>

    <div class="form-group">
      <label for="taskDescription" class="form-label mt-4">Beschreibung</label>
      <?= $this->Form->control('Description', ['class'=> 'form-control', 'id'=> 'taskDescription', 'rows'=> '4','label'=>""])?>
    </div>
  </fieldset>

  <?=$this->Form->button('Aufgabe speichern', ['class'=> 'btn btn-primary', 'style'=>"margin: 30px 0;"])?>

  <?= $this->Form->end()?>