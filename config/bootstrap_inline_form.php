<?php
/**
 * Templates for bootstrap forms
 */
return [
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
    'error' => '<div class="error-message invalid-feedback col-lg-10 offset-lg-2 col-sm-9 offset-sm-3 col-12">{{content}}</div>',
    //'button' => '<button {{attrs}} class="btn" >{{text}}</button>',
    //'checkboxWrapper' => '<div class="form-group"><div class="checkbox form-check">{{label}}</div></div>',
    'file' => '<input {{attrs}} class="custom-file-input" type="file" name="{{name}}">',
    //'input' => '<input class="form-control {{attrs[class]}}" type="{{type}}" name="{{name}}"{{attrs}}/>',
    'inputContainer' => '<div class="input form-group row {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input form-group row {{type}}{{required}} error">{{content}}{{error}}</div>',
    'input' => '<div class="col-lg-10 col-sm-9 col-12"><input type="{{type}}" name="{{name}}"{{attrs}}/></div>',
    'label' => '<label{{attrs}} class="col-lg-2 col-sm-3 col-12 col-form-label">{{text}}</label>',
    'select' => '<div class="col-lg-10 col-sm-9 col-12"><select name="{{name}}"{{attrs}} class="form-control" >{{content}}</select></div>',
    'selectMultiple' => '<div class="col-lg-10 col-sm-9 col-12"><select name="{{name}}[]" multiple="multiple" {{attrs}} class="form-control" >{{content}}</select></div>',
    'radio' => '<div class="col-lg-10 col-sm-9 col-6"><input class="form-check-input" type="radio" name="{{name}}" value="{{value}}"{{attrs}}></div>',
    'textarea' => '<div class="col-lg-10 col-sm-9 col-12"><textarea name="{{name}}"{{attrs}}>{{value}}</textarea></div>',
];