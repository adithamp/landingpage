<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Terms Conditions
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container p-4" style="margin-top: 30px ;">
    <?php foreach ($termscondition as $key => $value) { ?>
        <div>
            <p><?= $value['deskripsi'] ?></p>
        </div>
    <?php } ?>
    <?php $this->endsection() ?>