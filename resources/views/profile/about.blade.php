<?php echo $data->header; ?>  
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="<?php echo $data->avatar_g; ?>" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="<?php echo $data->me2; ?>" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <hr>
    
    <h4>Technical Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Photography</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:95%"></div>
    </div>
    <p>Web Design</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:85%"></div>
    </div>
    <p>Photoshop</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:80%"></div>
    </div>
  </div>
<?php echo $data->footer; ?>