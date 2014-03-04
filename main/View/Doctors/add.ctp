<form action="/doctors/add" method="post">
    <input name="data[Doctor][name]" id="DoctorMobile">
    <?php echo $this->Form->input('Doctor.mobile');?>
    <?php echo $this->Form->submit();?>
    <?php echo $this->Form->end();?>
</form>