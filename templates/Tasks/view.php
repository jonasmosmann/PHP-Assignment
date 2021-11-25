
<h3 style="margin: 50px 0;"><?= $task->Title?></h3>
  


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Beschreibung</th>
      <th scope="col">Besitzer</th>
      <th scope="col">Erstelldatum</th>
    </tr>
  </thead>

  <tbody>
    <tr>
        <td width="40%"><?= $task->Description ?></td>
        <td width="20%"><?=  $task->Owner ?></td>
        <td width="20%"><?= ($task->EntryTime->format('d.m.Y ')) ?></td>
        <td width="10%">
          <?=$this->Html->image("edit.png", ["alt" => "edit",'url' => ['action' => 'edit', $task->TaskId],'style' =>'width:30%; height:auto;'])?>
          <?= $this->Form->postLink($this->Html->image("trash.png", ["alt" => 'Mülleimer','style' =>'width:25%; height:auto;']), 
					['action' => 'delete', $task->TaskId],
					['escape' => false, 'confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId] )?> 
    </tr>
  </tbody>
</table>



