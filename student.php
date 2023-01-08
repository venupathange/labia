
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-240e4ee8" data-id="240e4ee8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
		  <section class="elementor-section elementor-inner-section elementor-element elementor-element-2d4e92a0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d4e92a0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	  <div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-516fc74b" data-id="516fc74b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
		  <div class="elementor-element elementor-element-4be71b30 elementor-widget elementor-widget-image" data-id="4be71b30" data-element_type="widget" data-widget_type="image.default">
  <div class="elementor-widget-container">
<style>/*! elementor - v3.7.4 - 31-08-2022 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>												<img width="847" height="79" src="https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-1024x95.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-1024x95.png 1024w, https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-300x28.png 300w, https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-768x71.png 768w, https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-1536x143.png 1536w, https://mitmysore.in/wp-content/uploads/2022/09/logou_ed-2048x190.png 2048w" sizes="(max-width: 847px) 100vw, 847px" data-id="8500">															</div>
  </div>
	</div>
</div>
		</div>
</section>
	</div>
</div>





<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>STUDENT ENTRY FORM</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>USN</label>
  	  <input type="text" name="usn" value="<?php echo $usn; ?>">
  	</div>


      <label for="semester">SEMESTER</label><br>
      <select name="semester" id="semester"></br>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  
</select>
<br>
</br>

<label for="subcode">SUBJECT CODE</label><br>
      <select name="subcode" id="subcode"></br>
  <option value="18cs37">18CS37</option>
  <option value="18cs38">18CS38</option>
  <option value="18cs47">18CS47</option>
  <option value="18cs48">18CS48</option>
  <option value="18cs57">18CS57</option>
  <option value="18cs58">18CS58</option>
  <option value="18cs67">18CS67</option>
  <option value="18cs68">18CS68</option>
  <option value="18cs77">18CS77</option>
  <option value="18cs78">18CS78</option>
  <option value="18cs87">18CS87</option>
  <option value="18cs88">18CS88</option>
  
</select>





  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		TO VIEW click on <a href="studentdetails.php">details</a>
  	</p>
  </form>
</body>
</html>













