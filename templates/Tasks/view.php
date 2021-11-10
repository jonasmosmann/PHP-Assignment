
<h2><?= $task->Title?> </h2>
<table>

            <tr>
            <td><?= $task->Description ?></td>
                <td><?= $task->Completed ?></td>
                <td><?= $task->Deleted ?></td>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
                
            </tr>

</table>

<?= $this->Form->postLink('Löschen', ['action' => 'delete', $task->TaskId], 
                ['confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId]); ?>