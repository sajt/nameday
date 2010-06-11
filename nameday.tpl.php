<?php
// $Id$
/**
 * @file
 * Name day block
 *
 * Variables:
 * $date boolean Show or not the date
 * $nameday string The current nameday
 * $holiday string The holiday string if any else an empty string
 */

?>
<?php if ($date):?>
<span class="nameday-date"><?php echo format_date(time(), "small"); ?></span>,
<?php endif;?>
<span id="nameday"><?php echo $nameday ?></span><?php if ($holiday):?>, <?php endif;?>
<?php if ($holiday):?>
<span id="holiday"><?php echo $holiday ?></span>
<?php endif;?>