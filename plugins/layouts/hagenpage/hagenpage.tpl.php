<div class="drupalhagen <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\"";} ?>>
  <section class="header">
    <?php print $content['header']; ?>
  </section>
  <section class="schedule">
    <?php print $content['schedule']; ?>
  </section>
  <section class="venue">
    <?php print $content['venue']; ?>
  </section>
  <section class="footer">
    <?php print $content['footer']; ?>
  </section>
</div>
