<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>

<div class='col-lg-12 page-title'>
<h1 class="title pull-left"><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>
</div>

<div class="col-lg-12">
<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>
</div>