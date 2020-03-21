<h1>Příspěvky</h1>
<ul>
    <?php
        foreach($prispevky as $prispevek)
        {
            echo "<li><a href=?c=prispevky&a=detail&id=" . $prispevek->id . ">"
                 . $prispevek->nadpis . "</a> <a href=?c=prispevky&a=smazat&id=" . $prispevek->id . "> Smazat</a></li>";
                 
        }
    ?>
</ul>