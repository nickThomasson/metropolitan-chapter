<?php
if (is_child('13')) { ?>
  <div id="content_left">
    <ul>
      <?php
      global $id;
      wp_list_pages("title_li=&child_of=13&show_date=modified
  &date_format=$date_format&depth=-1"); ?>
    </ul>
  </div>
<?php } elseif (is_child('14')) { ?>
  <div id="content_left">
    <ul>
      <?php
      global $id;
      wp_list_pages("title_li=&child_of=14&show_date=modified
  &date_format=$date_format&depth=-1"); ?>
    </ul>
  </div>
<?php } elseif (is_child('15')) { ?>
  <div id="content_left">
    <ul>
      <?php
      global $id;
      wp_list_pages("title_li=&child_of=15&show_date=modified
  &date_format=$date_format&depth=-1"); ?>
    </ul>
  </div>
<?php } else { ?>
  <div id="content_left">
    <ul>
      <?php
      global $id;
      wp_list_pages("title_li=&child_of=$id&show_date=modified
  &date_format=$date_format&depth=-1"); ?>
    </ul>
  </div>
<?php } ?>