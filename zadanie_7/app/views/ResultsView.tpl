{extends file="main.tpl"}




{block name=content}
<div id="page-wrapper">
    <header id="header" class="alt">
        <h1><a href="index.php">Wyniki</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="{$conf->app_url}/index.php">Home</a></li>
                <li><a href="{$conf->action_url}logout" class="button">Wyloguj się</a></li>
            </ul>
        </nav>
    </header>

    <section id="banner">
        <div style="text-align: center;">
            <div class="row gtr-50 gtr-uniform" style="justify-content: center;">
                <div class="col-10 col-12-mobilep">
                    <br>

                    <table class="result-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kwota</th>
                                <th>Oprocentowanie (%)</th>
                                <th>Lata</th>
                                <th>Rata</th>
                                <th>Data</th>
                                <th>Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $records as $r}
                                <tr>
                                    <td>{$r.id}</td>
                                    <td>{$r.kwota}</td>
                                    <td>{$r.oprocentowanie}</td>
                                    <td>{$r.lata}</td>
                                    <td>{$r.rata}</td>
                                    <td>{$r.data}</td>
                                    <td>
                                        <form action="{$conf->action_url}delete" method="post" onsubmit="return confirm('Czy na pewno chcesz usunąć ten rekord?');">
                                            <input type="hidden" name="id" value="{$r.id}" />
                                            <button type="submit" class="button small">Usuń</button>
                                        </form>
                                    </td>
                                </tr>
                                
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
                        
                     


            <br><br>
            {include file='messages.tpl'}
        </div>
    </section>
</div>
{/block}
