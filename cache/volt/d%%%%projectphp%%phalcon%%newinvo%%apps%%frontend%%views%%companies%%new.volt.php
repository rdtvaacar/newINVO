
<form role="form" method="post" action="<?php echo $this->url->get('companies/create'); ?>">

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('companies', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </li>
</ul>

<?php echo $this->getContent(); ?>
<div class="box box-primary">
<div class="box-header">
    <h3 class="box-title">Create companies</h3>
</div><!-- /.box-header -->
<form role="form" method="post" action="<?php echo $this->url->get('companies/search'); ?>">
    <div class="box-body">

        <div class="form-group">
            <label for="name">Name</label>
            <?php echo $form->render('name'); ?>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <?php echo $form->render('telephone'); ?>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <?php echo $form->render('address'); ?>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <?php echo $form->render('city'); ?>
        </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </div>
</form>
</div>