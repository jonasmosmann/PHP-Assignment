
<h3><?= $task->Title?></h3>
  


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Beschreibung</th>
      <th scope="col">Besitzer</th>
      
    </tr>
  </thead>
  <tbody>
 
    <tr>
        <td width="50%"><?= $task->Description ?></td>
        <td width="36%"><?=  $task->Owner ?></td>
        <td >
                <?= $this->Html->link('Bearbeiten', ['action' => 'edit', $task->TaskId]) ?>
                <?= $this->Form->postLink('Löschen', ['action' => 'delete', $task->TaskId], 
                ['confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId]) ?>  
                </td>   
    </tr>

  </tbody>
</table>



