  <div class="container" style="margin: 50px 0;">
  <div class="row">
    <div class="col-sm-6"><h3 >Deine Aufgaben</h3></div>
    <div class="col-sm-6"><?= $this->Html->link("Aufgabe hinzufügen", ['action' => 'add'], ['class'=> 'btn btn-warning', 'style'=>"float:right;" ])?> </div>
    </div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Erledigt?</th>
      <th scope="col">Titel</th>
      <th scope="col">Erstelldatum</th>
      <th scope="col">Besitzer</th>
      
    </tr>
  </thead>
  <tbody>
    
      <?php foreach ($tasks as $task){ ?>
            <tr>

            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> </td>




                <th scope="row"><?= $this->Html->link($task->Title, ['action' => 'view', $task->TaskId], ['style' => 'text-decoration:none;']) ?></th>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
            
                <td width="10%">
                <?=$this->Html->image("edit.png", ["alt" => "edit",'url' => ['action' => 'edit', $task->TaskId],'style' =>'width:30%; height:auto;'])?>
              
                
<?= $this->Form->postLink($this->Html->image("trash.png", ["alt" => 'Mülleimer','style' =>'width:25%; height:auto;']), 
					    ['action' => 'delete', $task->TaskId],
					    ['escape' => false, 'confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId] )?>

        </td>
            </tr>
            <?php } ?>

  </tbody>
</table>

<div class="container" style="margin: 50px 0;">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="border: 2px solid #3459e6;"><p style="text-align: center; margin: 10px 0;"> Es gibt noch <?= $number ?> Aufgaben zu erledigen!</p></div>
    <div class="col-md-4"></div>
    </div>
</div>

