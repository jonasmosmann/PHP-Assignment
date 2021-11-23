<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  
  
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
            <td><button type="button" class="btn btn-warning"> hallo</button></td>


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
  <?php if($number==0){ ?>
    <div class="col-md-4 offset-md-4" style="background-color:  #f4bd61;"><p style="text-align: center; margin: 10px 0;"> Du hast keine Aufgaben, gönn dir eine Pause!</p></div>
    <?php }else {?>
      <div class="col-md-4 offset-md-4" style="border-top: 2px solid black;"><p style="text-align: center; margin: 10px 0;"> Es gibt noch <?= $number ?> Aufgaben zu erledigen!</p></div>
      <?php } ?>
    </div>
</div>
<script>

$(document).ready(function(){
  $('.btn btn-warning').click(function(){

    alert($(this).text());
  });

});

</script>
