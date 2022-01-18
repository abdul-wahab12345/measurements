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
      Add Your Measurements for Men-Overshirts-
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
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/10-men_neck-1.jpg);width: 50%;
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
                Instruction for measuring Men Neck
              </p>
              <p style="margin: 0;">
                This measures the circumference of your neck. Please keep a finger between the tape and the neck for a little ease.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[neck]" class="form-pic-field men-neck-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/6-men_shoulders.jpg);width: 50%;
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
                Instruction for measuring Men Shoulders
              </p>
              <p style="margin: 0;">
                This is the distance between your shoulder joints. Please have someone measure you from behind, as shown. Ideally, you could take this from a shirt/jacket of yours that you think fits nicely (if you do, make sure to lay it flat and measure it from the back).
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[shoulders]" class="form-pic-field men-shoulders-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/2-men_chest-1.jpg);width: 50%;
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
                Instruction for measuring Men Chest
              </p>
              <p style="margin: 0;">
                Please bring the measure tape under your armpits onto the bust, lower your arms. We want the measurement of the broadest part, the full chest. Please don't keep the tape taut, just a normal comfortable level. Please keep any undergarment on that you would normally wear under a shirt or a blouse.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[chest]" class="form-pic-field men-chest-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/3-men_true_waist.jpg);width: 50%;
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
                Instruction for measuring Men True Waist
              </p>
              <p style="margin: 0;">
                This is your waist at its thinnest, usually about 1 to 1.5 inches or 3 to 4 cm above your belly button.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[waist]" class="form-pic-field men-true-waist-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/3-men_hips.jpg);width: 50%;
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
              <input type="text" name="aw_measurement[hips]" class="form-pic-field men-hips-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/7-men_shoulder_roundness-1.jpg);width: 50%;
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
                Instruction for measuring Men Shoulder Roundness
              </p>
              <p style="margin: 0;">
                A rough measurement around your armpit, please don't keep the tape too tight or too loose.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[shoulder_roundness]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/8-men_biceps-1.jpg);width: 50%;
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
                Instruction for measuring Men Biceps
              </p>
              <p style="margin: 0;">
                This measures your bicep, roughly the mid part between the shoulder and the elbow.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[biceps]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/9-men_sleeves_length-1.jpg);width: 50%;
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
                Instruction for measuring Men Sleeves Length
              </p>
              <p style="margin: 0;">
                The length from your shoulder to the wrist bone. This is best done in two steps as the arm is never straight. First measure from shoulder to elbow, continue to measure from elbow to the wrist bone.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[sleeves_length]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/5-men_wrist.jpg);width: 50%;
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
                Instruction for measuring Men Wrist
              </p>
              <p style="margin: 0;">
                This is the circumference of your wrist, please place the tape where you normally button the cuff.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[wrist]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="body-pic" style='background-image: url(<?= MEASUREMENTS_URL;?>public/images/07/11-men_shirt_length.jpg);width: 50%;
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
                Instruction for measuring Men Shirt Length
              </p>
              <p style="margin: 0;">
                This simply indicates how long you want the shirt to be. Place the tape on the middle part of your neck and shoulder. Follow the contours of the body when bringing the tape down. Please don't let it hang freely. Decide where you'd like the shirt to end, that's the length of your shirt. This can be copied from an existing shirt as well. When measuring a shirt, start from the front joint of the shirt's yoke, between the shoulder and neck, and measure down to the hem of the shirt.
              </p>
              <p style="margin: 0;font-weight: bold;">
                Enter Your Measurements
              </p>
              <input type="text" name="aw_measurement[shirt_length]" class="form-pic-field men-shoulder-roundness-input-mm mm-input" value="">
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

