<?php 

function formSection($for, $label, $type, $name, $id){
    echo "
        <section>
            <label for=\"$for\">$label</label><br>
            <input type=\"$type\" name=\"$name\" id=\"$id\">
        </section>
    ";
}

function formBtnSection($form, $name, $value){
    echo "
        <section>
            <br>
            <button form=\"$form\" name=\"$name\">$value</button>
        </section>
    ";
}

?>