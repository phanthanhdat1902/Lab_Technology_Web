<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $input = <<< End
"Albert Einstein said: 'E=MC²'.<p>
End;
        $double = htmlentities($input);
        // &quot;Albert Einstein said: 'E=MC&sup2;'.&lt;p&gt;
        $both = htmlentities($input, ENT_QUOTES);
        // &quot;Albert Einstein said: &#039;E=MC&sup2;&#039;.&lt;p&gt;
        $neither = htmlentities($input, ENT_NOQUOTES);
        // "Albert Einstein said: 'E=MC&sup2;'.&lt;p&gt;
        $output_html_special = htmlspecialchars($input);
        // &quot;Albert Einstein said: 'E=MC²'.&lt;p&gt;
        $input = '<p>Howdy, &quot;Cowboy&quot;</p>';
        $output = strip_tags($input, '<b>');
        // 'Howdy, &quot;Cowboy&quot;'
        $name = "Programming PHP";
        $output = rawurlencode($name);
        // Programming%20PHP
        $encoded = 'Programming%20PHP';
        $decode=rawurldecode($encoded);
        //Programming PHP
        $base_url = 'http://www.google.com/q=';
        $query = 'PHP sessions -cookies';
        $url = $base_url . urlencode($query);
        //http://www.google.com/q=PHP+sessions+-cookies
        ?>
    </body>
</html>