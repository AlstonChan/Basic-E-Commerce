<?php

function inputBase($label, $id, $auth_type, $inputType, $inputErrors)
{
    global $input_value;

    $output = '';

    $output .= '<div class="form-control w-full">';
    $output .= '<label class="label font-medium" for="re_pass_';
    $output .= $auth_type;
    $output .= '">';

    $output .= '<span class="label-text">';
    $output .= $label;
    $output .= '</span>';
    $output .= '</label>';

    $output .= '<input type="' . $inputType . '" class="input input-bordered w-full input-md" ';
    if (null === $inputErrors)
        $output .= 'input-bordered input-success" ';
    $output .= 'name="';
    $output .= $id . '_' . $auth_type;
    $output .= '" id="';
    $output .= $id . '_' . $auth_type;
    $output .= '" value="';
    if (isset($input_value))
        $output .= $input_value;
    $output .= '" />';

    $output .= '<label class="label" for="re_pass_';
    $output .= $auth_type;
    $output .= '">';
    $output .= '<span class="label-text-alt">';
    $output .= '</span>';

    $output .= '</div>';

    echo $output;
}
