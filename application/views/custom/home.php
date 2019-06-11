
<?php $this->load->view("_layout"); ?>
<?php $x = my_matrix($matrixName); ?>

<pre>

<?php print_r($x) ?>
</pre>

<?php foreach ($x as $key => $value) : ?>

   <div class="a"><?php echo the_field('cccc',$value);  ?></div>


<?php endforeach; ?>


		
<?php $this->load->view("_footer"); ?>