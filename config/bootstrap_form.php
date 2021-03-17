<?php
/**
 * Templates for bootstrap forms
 */
return [
    //'checkbox' => '<input type="checkbox" class="form-check-input" name="{{name}}" value="{{value}}"{{attrs}}>',
    'error' => '<div class="error-message invalid-feedback">{{content}}</div>',
    'button' => '<button {{attrs}} class="btn" >{{text}}</button>',
    'checkboxWrapper' => '<div class="form-group"><div class="checkbox form-check">{{label}}</div></div>',
    'file' => '<input{{attrs}} class="custom-file-input" type="file" name="{{name}}">',
    'input' => '<input {{attrs}} class="form-control" type="{{type}}" name="{{name}}"/>',
    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input form-group {{type}}{{required}} error">{{content}}{{error}}</div>',
    //'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
    //'selectMultiple' => '<select class="form-control" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    //'radio' => '<input class="form-check-input" type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
];