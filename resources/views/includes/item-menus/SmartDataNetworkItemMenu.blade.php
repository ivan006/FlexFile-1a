<?php function SmartDataNetworkItemMenu($SmartDataID, $SmartDataItemM_ShowActions){ ?>
  <span class="" style="  ">
    <button class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="<?php echo $SmartDataID ?>[<?php echo $SmartDataItemM_ShowActions['SelectedSmartDataItem'] ?>]" value="1">
      Update
    </button>
    <button class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
      <del>Delete</del>
    </button>
    <label>
      <input class="f-toggle" type="checkbox" name="checkbox" value="value" style="display:none;" >
      <span class="f-toggle w3-button w3-theme-d1 w3-margin-bottom" >
        Create
      </span>
      <div class="content g-bor-gre g-pad-1em" style="margin-left:6em;">
        <div class="">
          <input class="g-bor-gre f-width-270px"  type="text" name="" value="">
          <button style="" class="w3-button w3-theme-d1 w3-margin-bottom f-width-200px" type="submit" name="create" value="1">
            Submit
          </button>
        </div>
      </div>
    </label>
  </span>
<?php } ?>