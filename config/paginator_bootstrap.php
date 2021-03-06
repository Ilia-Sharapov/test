<?php
/**
 * Bootstrap-pagination
 */
return [
    'nextActive'=> '<li class="page-item next">
            <a class="page-link" href="{{url}}" rel="next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>',
    'nextDisabled'=>'<li class="page-item next disabled">
            <a class="page-link" href="{{url}}" rel="next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>',
    'prevActive'=> '<li class="page-item prev">
            <a class="page-link" rel="prev"  href="{{url}}">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>',
    'prevDisabled'=>'<li class="page-item prev disabled">
            <a class="page-link" rel="prev"  href="{{url}}">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>',
    //'nextActive' => '<li class="next"><a href="{{url}}">{{text}}</a></li>',
    //'nextDisabled' => '<li class="next disabled"><a href="" onclick="return false;">{{text}}</a></li>',
    //'prevActive' => '<li class="prev"><a rel="prev" href="{{url}}">{{text}}</a></li>',
    //'prevDisabled' => '<li class="prev disabled"><a href="" onclick="return false;">{{text}}</a></li>',
    'counterRange' => '{{start}} - {{end}} of {{count}}',
    'counterPages' => '{{page}} of {{pages}}',
    'first' => '<li class="first"><a href="{{url}}">{{text}}</a></li>',
    'last' => '<li class="last"><a href="{{url}}">{{text}}</a></li>',
    'number'=>'<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    //'number' => '<li><a href="{{url}}">{{text}}</a></li>',
    'current'=>'<li class="page-item active disabled"><span class="page-link">{{text}}</span></li>',
    //'current' => '<li class="active"><a href="">{{text}}</a></li>',
    'ellipsis' => '<li class="ellipsis">&hellip;</li>',
    'sort' => '<a href="{{url}}">{{text}}</a>',
    'sortAsc' => '<a class="asc" href="{{url}}">{{text}}</a>',
    'sortDesc' => '<a class="desc" href="{{url}}">{{text}}</a>',
    'sortAscLocked' => '<a class="asc locked" href="{{url}}">{{text}}</a>',
    'sortDescLocked' => '<a class="desc locked" href="{{url}}">{{text}}</a>',
];