 <div class="widget">
	<h2>Utilizatori</h2>
        <div class="inner">
        	<?php
        		$user_count=user_count();
        		if ($user_count != 1) {
        			$suffix = 'i';
                                $este = 'sunt';
                                $inregistrat = 'inregistrati';
                        }
        		else
                        {
        			$suffix = '';
                                $este = 'este';
                                $inregistrat = 'inregistrat';
                        }
        	?>
                <div class="alert alert-info user-count" role="alert">
        	Momentan <?php echo $este; ?> <?php echo $user_count; ?>  utilizator<?php echo $suffix; ?> <?php echo $inregistrat; ?>.
                </div>
        </div>
</div>