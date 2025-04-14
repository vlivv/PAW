{if ($messages->isError())} 
   
                <h4>wystąpiły błędy: </h4>
                {foreach  $messages->getErrors() as $msg}
                <li>{$msg}</li>
                {/foreach}
            {/if}
            
            {if ($messages->isInfo())}
	            <h4>informacje: </h4>
	            {foreach $messages->getInfos() as $inf}
		            <li>{$inf}</li>
	            {/foreach}
            {/if}


