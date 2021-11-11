  <h3>Aufgaben</h3>
  


<?= $this->Html->link("Aufgabe hinzufügen", ['action' => 'add'], ['class'=> 'btn btn-warning'])?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Titel</th>
      <th scope="col">Erstelldatum</th>
      <th scope="col">Besitzer</th>
      
    </tr>
  </thead>
  <tbody>
    
      <?php foreach ($tasks as $task){ ?>
            <tr>
                <th scope="row"><?= $this->Html->link($task->Title, ['action' => 'view', $task->TaskId]) ?></th>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
            
                <td >
                <?= $this->Html->link('Bearbeiten', ['action' => 'edit', $task->TaskId]) ?>
                <?= $this->Form->postLink('Löschen', ['action' => 'delete', $task->TaskId], 
                ['confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId]) ?>  
                </td>
            </tr>
            <?php } ?>

  </tbody>
</table>

<p> Es gibt noch <?= $number ?> Aufgaben zu erledigen!</p>

