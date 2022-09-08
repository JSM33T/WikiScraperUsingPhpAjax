<?php
$date = $_POST["date"];
$month = $_POST["month"];
$dt_string = $month."_".$date; 


    $html = file_get_contents('https://en.wikipedia.org/wiki/'.$dt_string);
    $start = stripos($html, 'id="Births"');

        $end = stripos($html, '<h2>', $offset = $start);
        $length = $end - $start;
        $htmlSection = substr($html, $start, $length);
        preg_match_all('@<li>(.+)</li>@', $htmlSection, $matches);
        $listItems = $matches[1];
        echo '<h5 class="widget-title font-alt">'.$dt_string.'</h5>';
        foreach ($listItems as $item) 
        {
            preg_match('@(\d+)@', $item, $yearMatch);
            $year = (int) $yearMatch[0];
            preg_match('@;\s<a\b[^>]*>(.*?)</a>@i', $item, $nameMatch);
            $name = $nameMatch[1];
            echo '  
            <div class="widget-body">
            <ul class="clearlist widget-menu">
                <li>';
                echo $name;
                   '
                    <small> 
                   ';
                echo      " - ".$year;
            echo '
                    </small>
                </li>
               
            </ul>
        </div>
            
            ';
       ;
        }
 



?>
