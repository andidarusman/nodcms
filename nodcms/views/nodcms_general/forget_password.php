<div class="container">
    <div class="panel">
        <h1 class="panel-heading bio-graph-heading"><?=_l("Forget password",$this)?></h1>
        <div class="panel-body">
            <h3><?=_l("Return password",$this)?></h3>
            <?php if($this->session->flashdata('message_success')){ ?>
            <div class="alert alert-success"><?=$this->session->flashdata('message_success')?></div>
            <p class="text-center">
                <a class="btn btn-danger" href="<?=base_url().$lang?>/login"><span class="fa fa-key"></span> <?=_l("Login now",$this)?></a>
                <a class="btn btn-primary" href="<?=base_url().$lang?>"><span class="fa fa-home"></span> <?=_l("Back to home",$this)?></a>
            </p>
            <?php }else{ ?>
            <p><?=_l("If you forgot your password, you can enter the email address you used to register below. You'll receive an email from us which you can use to retrieve your password.",$this)?></p>
            <form class="" action="" method="post" id="post_form">
                <div class="form-group <?=$this->session->flashdata('message_error')?"has-error":""?>">
                    <label for="email" class="control-label text-center"><?=_l("Enter your email address",$this)?></label>
                    <input name="email" id="email" type="email" class="form-control input-lg" placeholder="example@webmail.com">
                    <?php if($this->session->flashdata('message_error')){ ?><p class="help-block"><?=$this->session->flashdata('message_error')?></p><?php } ?>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-lg"><?=_l("Submit",$this)?></button>
                </div>
                <?php if(isset($submit_error)){ ?>
                <div class="alert alert-danger"><?=$submit_error?></div>
                <?php } ?>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/flatlab/js/jquery.validate.min.js"></script>
<script>
    $("#post_form").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email:{
                required: "<?=_l("Please enter a valid email address.",$this)?>",
                email: "<?=_l("Please enter a valid email address.",$this)?>"
            }
        }
    });
</script>