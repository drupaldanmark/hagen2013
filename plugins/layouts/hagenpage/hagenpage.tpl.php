<div class="topbar">
  <div class="container">
    <?php print $content['topbar']; ?>
  </div>
</div>
<div class="drupalhagen <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\"";} ?>>
  <section class="header" id="header">
    <div class="container">
      <?php print $content['header']; ?>
    </div>
  </section>
  <section class="schedule" id="schedule">
    <div class="container">
      <?php print $content['schedule']; ?>
    </div>
  </section>
  <section class="venue" id="venue">
    <?php print $content['venue']; ?>
  </section>
  <section class="footer" id="footer">
    <div class="container">
      <?php print $content['footer']; ?>
    </div>
  </section>
</div>
