<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    
    <fieldset>
        <legend><?= __('Signup') ?></legend>
        <?php
            //echo $this->Form->control('email');
            //echo $this->Form->control('password');
            //echo $this->Form->control('phone');
        ?>
    </fieldset>
    
  <?= $this->Form->create($user) ?>
  <fieldset>
    <div class="form-group">
      
      <?php echo $this->Form->control('email',['placeholder'=>'Enter your email','class'=>'form-control']); ?>
    </div>
    <div class="form-group">
      
      <?php echo $this->Form->control('phone',['placeholder'=>'Enter your phone','class'=>'form-control']); ?>
    </div>
    
    <div class="form-group">
     
      <?php echo $this->Form->control('password',['label'=>'Password','type'=>'password','placeholder'=>'Enter your password','class'=>'form-control']); ?>
    </div>
    
    <div class="btn-group" role="group" aria-label="Basic example">
      <?= $this->Form->button(__('Signup'),['class'=>'btn btn-primary']) ?>
      <button 
          type="reset" 
          class="btn btn-danger"><?= __('Reset') ?>
      </button>
    </div>
  </fieldset>
  <?= $this->Form->end() ?>

</div>
