<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    echo $this->element('header');
?>
	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>		
<?php 
    echo $this->element('footer');
?>
</html>
