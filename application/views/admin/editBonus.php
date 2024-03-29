<?php

// var_dump($bonusInfo);

$id = '';
$title = '';
$description = '';

if(!empty($bonusInfo))
{
    foreach ($bonusInfo as $uf)
    {
        $id = $uf->id;
        $title = $uf->title;
        $description = $uf->description;
    }
}


?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-star"></i> Bonus Management
                <small>Add / Edit</small>
            </h1>
        </section>

        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->



                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Enter Bonus information</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="<?php echo base_url() ?>editBonus" method="post" id="editBonus" role="form">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Bonus Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Bonus Title" name="title" value="<?php echo $title; ?>" maxlength="128">
                                            <input type="hidden" value="<?php echo $id; ?>" name="bonusId" id="bonusId" />
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="desc">Bonus description</label>
                                            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo $description; ?>"
                                                maxlength="128">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Submit" />
                                <input type="reset" class="btn btn-default" value="Reset" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php } ?>
                        <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php } ?>

                        <div class="row">
                            <div class="col-md-12">
                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>