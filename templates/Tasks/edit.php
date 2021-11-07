
<h1> Bearbeiten </h1>

<?php 

            echo $this->Form->create($task); 
    
            echo $this->Form->control('Title');
            echo $this->Form->control('Description');
            echo $this->Form->button('Änderungen speichern'); 

            echo $this->Form->end() 
            
            
            
?>