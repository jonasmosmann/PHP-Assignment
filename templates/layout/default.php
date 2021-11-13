<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php $this->Html->css('bootstrap') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-right: 50px;">WG - Tasklist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      
      <?php if ($authUser) { ?>
        <ul class="navbar-nav me-auto">
               <li class="nav-item"> <?= $this->Html->link('Meine Aufgaben', ['controller' => 'tasks', 'action' => 'index'],['class'=> 'nav-link']); ?></li>
               <li class="nav-item"> <?= $this->Html->link('Benutzer', ['controller' => 'users', 'action' => 'index'],['class'=> 'nav-link']); ?></li>
      </ul>
        <ul class="navbar-nav ms-auto"> <li class="nav-item ms-auto"> <?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout'],['class'=> 'nav-link','confirm' =>'Willst du dich wirklich abmelden?', 'style' => 'margin-right: 50px;']); ?></li></ul>
<?php } else { ?>

  <ul class="navbar-nav ms-auto">
    <li class="nav-item"> <?= $this->Html->link('Registrieren', ['controller' => 'users', 'action' => 'register'],['class'=> 'nav-link']); ?></li>
    <li class="nav-item"> <?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login'],['class'=> 'nav-link','style' => 'margin-right: 50px;']); ?></li>
</ul>
<?php } ?>
        
      

      
     
    </div>
  </div>
</nav>






    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
