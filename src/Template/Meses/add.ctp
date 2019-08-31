<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mese $mese
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Meses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="meses form large-9 medium-8 columns content">
    <?= $this->Form->create($mese) ?>
    <fieldset>
        <legend><?= __('Add Mese') ?></legend>
        <?php
            echo $this->Form->control('meses');
            echo $this->Form->control('cuota');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
