<?php
foreach ($ListMaker as $maker)
{
    echo
    "
        <option value='$maker->id'>$maker->name</option>
    ";
}
?>