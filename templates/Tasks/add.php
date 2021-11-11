<?php $this->Html->css('bootstrap',['block'=>true]); ?>



<?= $this->Form->create($task)?>
  <fieldset>
    <legend>Legend</legend>

    <div class="form-group">
      <label for="taskTitle" class="form-label mt-4">Titel</label>
      <?= $this->Form->control('Title', ['class'=> 'form-control', 'id'=> 'taskTitle'])?>
    </div>

    <div class="form-group">
      <label for="taskDescription" class="form-label mt-4">Titel</label>
      <?= $this->Form->control('Description', ['class'=> 'form-control', 'id'=> 'taskDescription', 'rows'=> '4'])?>
    </div>
  </fieldset>

  <?=$this->Form->button('Aufgabe speichern', ['class'=> 'btn btn-primary'])?>

  <?= $this->Form->end()?>