<?php
/* @var $this TicketController */
/* @var $model Ticket */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'ticket-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'created_by'); ?>
		<?php echo $form->dropDownList($model, 'created_by', $userOptions, array('empty' => 'Select a user')); ?>
		<?php echo $form->error($model, 'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'patient_id'); ?>
		<?php echo $form->dropDownList($model, 'patient_id', $patientOptions, array('empty' => 'Select a patient')); ?>
		<?php echo $form->error($model, 'patient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'assigned_to'); ?>
		<?php echo $form->dropDownList($model, 'assigned_to', $employeeOptions, array('empty' => 'Select a employee')); ?>
		<?php echo $form->error($model, 'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'ticket_status'); ?>
		<?php echo $form->dropDownList($model, 'ticket_status', array('Open' => 'Open', 'In Progress' => 'In Progress', 'Closed' => 'Closed')); ?>
		<?php echo $form->error($model, 'ticket_status'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model, 'created_at'); ?>
		<?php echo $form->textField($model, 'created_at'); ?>
		<?php echo $form->error($model, 'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'updated_at'); ?>
		<?php echo $form->textField($model, 'updated_at'); ?>
		<?php echo $form->error($model, 'updated_at'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->