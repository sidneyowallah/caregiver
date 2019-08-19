// import Stepper from 'bs-stepper'

export default {
  init() {
    // JavaScript to be fired on the Assessment page

  },
  finalize() {
    // JavaScript to be fired on the Assessment page, after the init JS
    //$sixty = $dementia = $caregiving = $veteran = $employed = $healthcare = $legal = $finance = $finance = $support = $selfcare = 'no';


  $('form').submit(function(e){
    setTimeout(function() {
      $('#assesment-select').hide();
      e.preventDefault();
  }, 1000);

    // Or with: return false;
  });


    $('#short').click(function(){
      $('#short-assesment-form').show();
      $('#long-assesment-form').hide();
    });
    $('#long').click(function(){
      $('#short-assesment-form').hide();
      $('#long-assesment-form').show();
    });



  $('input[type=radio][name ="sixty"]').change(function () {
    if ($(this).is(':checked')) {
      $('.sixty-next-btn').prop('disabled', false);
    }
  });


  $('.show-form-error').hide();
  $('input[type=radio][name ="dementia"]').change(function () {
    if ($(this).filter(':checked').val() == 'no') {
      $('.dementia-next-btn').prop('disabled', true);
      $('.show-form-error').show();
    } else if ($(this).filter(':checked').val() == 'yes' &&  $('input[type=radio][name ="sixty"]:checked').val() == 'yes') {
      $('.show-form-error').hide();
      $('.dementia-next-btn').prop('disabled', false);
    }
  });


  // $(function () {
  //   $('.show-form-error').hide();
  //   $('input[type=radio]').change(function () {
  //     if($('input[type=radio][name ="sixty"]:checked').val() == 'yes' && $('input[type=radio][name ="dementia"]:checked').val() == 'yes'){
  //       $('.show-form-error').hide();
  //       $('.dementia-next-btn').prop('disabled', false);
  //       console.log('yes clicked')
  //     }else if($('input[type=radio][name ="sixty"]:checked').val() == 'no' && $('input[type=radio][name ="dementia"]:checked').val() == 'no'){
  //       $('.show-form-error').show();
  //       $('.dementia-next-btn').prop('disabled', true);
  //       console.log('no clicked')
  //     }else if($('input[type=radio][name ="sixty"]:checked').val() == 'yes' && $('input[type=radio][name ="dementia"]:checked').val() == 'no'){
  //       $('.show-form-error').show();
  //       $('.dementia-next-btn').prop('disabled', true);
  //       console.log('no clicked')
  //     }
  //   });
  // });


  $('input[type=radio][name ="caregiving"]').change(function () {
    if ($(this).is(':checked')) {
      $('.caregiving-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="veteran"]').change(function () {
    if ($(this).is(':checked')) {
      $('.veteran-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="employed"]').change(function () {
    if ($(this).is(':checked')) {
      $('.employed-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="healthcare"]').change(function () {
    if ($(this).is(':checked')) {
      $('.healthcare-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="legal"]').change(function () {
    if ($(this).is(':checked')) {
      $('.legal-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="finance"]').change(function () {
    if ($(this).is(':checked')) {
      $('.finance-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="support"]').change(function () {
    if ($(this).is(':checked')) {
      $('.support-next-btn').prop('disabled', false);
    }
  });
  $('input[type=radio][name ="selfcare"]').change(function () {
    if ($(this).is(':checked')) {
      $('.selfcare-next-btn').prop('disabled', false);
    }
  });

}};
