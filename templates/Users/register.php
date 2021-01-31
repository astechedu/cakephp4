<div class="row">
	<div class="col-5 mb-5 mt-5">
		<h1>User Registration</h1>

		<?php 
			echo $this->Form->create(null, ['url'=>['controller'=>'users', 'action'=>'save'],'type'=>'file','id'=>'myForm']);	

			echo $this->Form->control('username', ['id'=>'name','class'=>'form-control','placeholder'=>'Name']);

			echo $this->Form->control('password', ['class'=>'form-control']);

			echo $this->Form->control('approved', ['class'=>'form-control']);		

			echo $this->Form->control('quote', ['class'=>'form-control']);
           
         

            echo $this->Form->button('Add', ['class'=>'form-control btn btn-info', 'type'=>'button']);

			echo $this->Form->end();
        ?>

	</div>
</div>

<script>

	$(function(){
   		$('button').on('click', function(){

   			$('#myForm').submit();
   		});
	});

</script>




