{extends file="main.tpl"}

{block name=footer}&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a>{/block}

{block name=content}


					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="{$conf->action_root}calcCompute" method="post">
                                            <fieldset>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="text" name="x" id="id_x" placeholder="kwota" value="{$form->x}" />
                                                                <br>
                                                                <input type="text" name="y" id="id_y" placeholder="lata" value="{$form->y}" />
                                                                <br>
                                                                <input type="text" name="z" id="id_z" placeholder="oprocentowanie" value="{$form->z}" />
							</div>
							<div class="col-4 col-12-mobilep">
                                                            <br><br><br>
                                                            <button type="submit" class="button">oblicz</button>
							</div>
						</div>
                                            </fieldset>
					</form>
                                        <br>

				

                                
<div id="result">   
{if ($messages->isError())}
    <h4>wystąpiły błędy:</h4>
    
    {foreach  $messages->getErrors() as $msg}
                 {strip}	
                 
			<li>{$msg}</li>
                 
		{/strip}
		{/foreach}
                
{/if} 


{if isset($rata)}
                                                                                               
<h4>miesięczna rata wynosi: {$rata} </h4>
										
{/if}

 </div>                                
                           
{/block}
	
