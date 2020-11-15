<?php

    function getTable($limit) { 
        $html = '<table>';
        for($f=1;$f<=$limit;$f++){
            $html .= '<tr>';
            for($c=1;$c<=$limit;$c++){
                $html .= '<td>'.($f*$c).'</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }

    function drawHtml($table, $num) {
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>User List</title>
            </head>
            <body>
                <div>
                    <form action="table" method="GET">
                        <label>MULTIPLICATION TABLE OF '.$num.'</label><br>
                        <input type="number" name="limit" placeholder="Limit">
                        <button type="submit">Get table</button>
                    </form>
                </div>
                <div>'
                    .$table.
                '</div>
            </body>
            </html>';

        return $html;

    }