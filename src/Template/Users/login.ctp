<?= $this->Form->create() ?>
<fieldset>
	<legend><?= __('Login') ?></legend>
	<?= $this->Form->control('username') ?>
	<?= $this->Form->control('password') ?>
	<?= $this->Form->submit(__('Login')) ?>
</fieldset>
<?= $this->Form->end() ?>