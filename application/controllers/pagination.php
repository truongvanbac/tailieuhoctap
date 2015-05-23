<?php
    class Pagination_Bootstrap {
        public $config = array(
            'base_url' => '',
            'total_rows' => '',
            'per_page' => '6',
            'uri_segment'=>'',
            'next_link' => 'Next',
            'prev_link' => 'Prev',
            'full_tag_open'=>'<div><ul class="pagination pagination-small pagination-centered">',
            'full_tag_close'=>'</ul></div>',
            'num_tag_open'=>"<li>",
            'num_tag_close'=>"</li>",
            'cur_tag_open'=>"<li class='disabled'><li class='active'><a href='#'>",
            'cur_tag_close'=>"<span class='sr-only'></span></a></li>",
            'next_tag_open'=>"<li>",
            'next_tagl_close'=>"</li>",
            'prev_tag_open'=>"<li>",
            'prev_tag_close'=>"</li>",
            'first_tag_open'=>"<li>",
            'first_tagl_close'=>"</li>",
            'last_tag_open'=>"<li>",
            'last_tag_close'=>"</li>"
        );
    }