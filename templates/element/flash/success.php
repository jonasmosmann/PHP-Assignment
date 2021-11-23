<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<?php
$this->Html->css('cake',['block'=>true]); 
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>


<div class="alert alert-success text-center" role="alert" onclick="this.classList.add('hidden');">
<?= $message ?>
</div>


