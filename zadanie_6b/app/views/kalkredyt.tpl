{extends file="main.tpl"}



{block name=content}
<div id="page-wrapper">

				<header id="header" class="alt">
					<h1><a href="index.php">Kalkulator</a> kredytowy</h1>
					<nav id="nav">
						<ul>
							<li><a href="{$conf->app_url}/index.php">Home</a></li>
                                                        <li><a href="{$conf->action_url}logout" class="button">Wyloguj się</a></li>
						
						</ul>
					</nav>
				</header>


				<section id="banner">
					<h2>Kalkulator</h2>
					<p>{$page_description|default:"Opis domyślny"}</p>
					<ul class="actions special">
						<li><a href="https://pl.wikipedia.org/wiki/Kalkulator" class="button">Dowiedz się więcej</a></li>
                                          
					</ul>
				</section>


				<section id="cta">

					<h2>Kalkulator kredytowy</h2>
                                        <p>użytkownik: {$user->login}, rola: {$user->role}</p>
					<p>Oblicz miesięczną ratę.</p>

					<form action="{$conf->action_url}kalkCompute" method="post">
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
                                               <br>
                                                 
                                            </fieldset>
					</form>
                                        <br>

				             
<div id="result">   
    
   {include file='messages.tpl'} 
  {if isset($rata->rata)}
    <h4>miesięczna rata wynosi: {$rata->rata}</h4>
{/if}

</div>
  </section>                                                                   
{/block}
	
