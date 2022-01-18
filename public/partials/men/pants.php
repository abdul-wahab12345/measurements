<form method="post" action="">

<section class="measurements-slider-wrapper">
  <div class="measurements-slider-profile-transform">
    <p class="enter-profile-name-p">
      Enter Profile Name:
    </p>
    <input type="text" class="profile_name" name="profile_name" value="">
    <input type="hidden" class="product_type" name="product_type" value="<?= $cat . '_' . $type;?>">
    <input type="hidden" class="gender" value="men">
    <p class="add-your-measurements-p">
      Add Your Measurements for Men-Pants-
    </p>
    <p class="measure-your-self-p">
      Please do not measure yourself on your own, have someone else do it.
    </p>
    <div class="select-unit-of-measurement">
      <span>Select Measurement Units:&nbsp;</span>
      <label for="unit-selector">
        Cm
        <input type="radio" name="unit_selector" value="cm">
      </label>
      <label for="unit-selector">
        Inch
        <input type="radio" name="unit_selector" value="inch">
      </label>
    </div>
  </div>

  <!-- Slider main container -->
  <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/1-men_height.jpg);'>
          </div>
          <div class="pic-form-field-wrapper">
            <div class="pic-form-field-container">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Height
              </p>
              <p style="margin: 0;">
                Your height, without shoes, of course.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[height]" class="form-pic-field men-height-mm-input mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/2-men_pants_waist.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Pants Waist
              </p>
              <p style="margin: 0;">
                This is where you would like the pants to rest on the waist, these pants are mid-rise, so not too high, not too low. This measurement is usually about 1 inch or 2.5 cm below your belly button.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[waist]" class="form-pic-field men-neck-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/4-men_hips.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Hips
              </p>
              <p style="margin: 0;">
                Wrap the measuring tape around the broadest part of the hips, not too tight or too loose.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[hips]" class="form-pic-field men-shoulders-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/4-men_thigh.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Thigh
              </p>
              <p style="margin: 0;">
                This measures the circumference of the broadest part of the thigh, roughly half an inch below the crotch.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[thigh]" class="form-pic-field men-chest-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/5-men_knee.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Knee
              </p>
              <p style="margin: 0;">
                The circumference around the knee, please wrap the tape around knee snuggly.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[knee]" class="form-pic-field men-true-waist-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/6-menpantsoutseam.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Pants Outseam
              </p>
              <p style="margin: 0;">
                Please follow the picture, the tape should start where you would like the pants to rest, all the way down to the ankles, making sure it touches the ankle. Please don't adjust for cropping etc. we will do that.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[pants_outseam]" class="form-pic-field men-hips-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/7-men_pantsinseam.jpg);width: 50%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;'>
          </div>
          <div class="pic-form-field-wrapper" style="width: 50%;
    height: 100%;
    position: relative;">
            <div class="pic-form-field-container" style="max-width: 240px;
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);font-size: 12px;padding: 4px 7px;border: 1px solid #ccc;">
              <p style="margin: 0;font-weight: bold;">
                Instruction for measuring Men Pants Inseam
              </p>
              <p style="margin: 0;">
                Please follow the picture, normally the tape should start about 1.5 inch or 4cm below the crotch down to the ankles. You can also measure a pair of your favorite pants for this by measuring from the joint of the legs down to the end of the cuff.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[pants_inseam]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-button-next">></div>
      <div class="swiper-button-prev"><</div>
    </div>
    <div class="save-mm-btn-container">
      <button type="submit" class="save-mm-btn men shirts" data-gender="men" data-product-type="shirts" name="aw_save_profile">Save Your Measurements</button>
    </div>
</section>
</form>

<script type="text/javascript">
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>

