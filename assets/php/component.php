<?php
function inputElement($class1,$class2,$for_name,$label_name,$type,$name,$id,$placeholder,$value,$err_id){
        $ele = "
                <div class=\"form-group row\">
                    <div class=\"$class1\">
                        <label for=\"$for_name\"><b>$label_name</b></label>
                    </div>
                    <div class=\"$class2\">
                        <input type=\"$type\" name=\"$name\" id=\"$id\" class=\"form-control\" placeholder=\"$placeholder\" autocomplete=\"off\" value=\"$value\" >
                        <p id=\"$err_id\" class=\"errmsg text-danger\"></p>
                    </div>
                </div>
        ";
        echo $ele;
        }
function buttonElement($btn_name,$btn_id,$btn_class,$text,$icon){
    $ele = "
                <button  name='$btn_name' id='$btn_id' class='$btn_class'>$icon $text</button>
    ";
    echo $ele;
}
// function errorMsg($err_id){
//     $ele = "
//            <p id=\"$err_id\" class=\"errmsg text-danger\">error</p>
//     ";
//     echo $ele;
// }
// function label($for_name,$label_name){
//     $ele = "
//         <label for=\"$for_name\">$label_name</label> 
//     ";
//     echo $ele;
// }
// function input($type,$name,$id,$placeholder){
//     $ele = "
//     <input type=\"$type\" name=\"$name\" id=\"$id\" class=\"form-control\" placeholder=\"$placeholder\" >
//     ";
//     echo $ele;
// }









// <!-- function inputElement($for_name,$label_name,$type,$name,$id,$placeholder){
//     $ele = "
//         <div class=\"col-md-2\">
//             <label for=\"$for_name\">$label_name</label>
//         </div>
//         <div class=\"col-md-10\">
//             <input type=\"$type\" name=\"$name\" id=\"$id\" class=\"form-control\" placeholder=\"$placeholder\" >
//         </div>
    
//     ";
//     echo $ele;
//     } -->