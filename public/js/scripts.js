// show circles
$(document).ready(function() {
    var circles = $('.square, .feedback');
    delay = 1000;
    $.each(circles, function(i, val) {
      setTimeout(function() {
        $(val).css({'opacity': '1'});
      }, delay);
      delay += 1000;
    });
});

// feedback
$(function() {
  // show feedback
  $('#feedback').on('mouseover', function() {
    $('#feedback').css({'right': '0', 'padding': '5px 10px'});
  });
  // hide feedback
  $('#feedback').on('mouseout', function() {
    $('#feedback').css({'right': '-135px', 'padding': '5px 10px 5px 40px'});
  });
  // send message
  $('#feedback').on('click', function() {
    $('#substrate_feedback').css({'z-index': '50', 'cursor': 'pointer'});
    var circles = $('.square').find('h1').get().reverse();
    var delay = 0;
    $.each(circles, function(i, val) {
      setTimeout(function() {
        $(val).fadeOut();
      }, delay);
      delay += 1000;
    }); 
    var form = $('.feedback_input, .feedback_textarea, .feedback_button');
    console.log(form);
    var delay = 0;
    setTimeout(function() {
      $.each(form, function(i, val) {
        setTimeout(function() {
          $(val).fadeIn();
        }, delay);
        delay += 1000;
      }); 
    }, 3000);
  });
  // cancel send
  $('#substrate_feedback').on('click', function() {
    var form = $('.feedback_input, .feedback_textarea, .feedback_button');
    $.each(form, function(i, val) {
      $(val).fadeOut();
    });
    var circles = $('.square').find('h1');
    $.each(circles, function(i, val) {
      $(val).fadeIn();
    });
    $('#substrate_feedback').css({'z-index': '-100'});
  })
});


// hello circle
$(function() {
// open
  $('#hello').on('click', function() {
    $('#substrate_hello').css({'z-index': '50'});
    $('#contacts').css({'opacity': '0', 'z-index': '-100'});
    $('#projects')
        .delay(700)
        .queue(function(){
            $(this).css({'opacity': '0', 'z-index': '-100'});
            $(this).dequeue();
        });
    $('#hello')
        .delay(1400)
        .queue(function(){
            $(this).css({'transform': 'scale(3)', 'z-index': '100', 'cursor': 'unset'});
            $('h1', this).fadeOut();
            $('#substrate_hello').css({'cursor': 'pointer'});
            $(this).dequeue();
        });
    $('#info_col').delay(1800).css({'z-index': '200'}).fadeIn();
  });

// close
  $('#substrate_hello').on('click', function() {
    $('#info_col').fadeOut();
    $('#hello')
        .delay(500)
        .queue(function(){
            $(this).css({'transform': 'scale(1)', 'z-index': '100', 'cursor': 'pointer'});
            $('h1', this).fadeIn();
            $('#substrate_hello').css({'z-index': '-100', 'cursor': 'unset'});
            $(this).dequeue();
        });
    $('#projects')
        .delay(700)
        .queue(function(){
            $(this).css({'opacity': '1', 'z-index': '100'});
            $(this).dequeue();
        });
    $('#contacts')
        .delay(900)
        .queue(function(){
            $(this).css({'opacity': '1', 'z-index': '100'});
            $(this).dequeue();
            $('#substrate_hello').css({'z-index': '-100'});
        });
  });
});

// project circle
$(function() {
  // open
  $('#projects').on('click', function() {
    $('#substrate_projects').css({'z-index': '50'});
    $('#contacts, #hello').css({'opacity': '0', 'z-index': '-100'});
    $('#projects')
        .delay(200)
        .queue(function(){
            $(this).css({'transform': 'scale(2.3)', 'height': '40vh', 'border-radius': '10px', 'z-index': '100', 'cursor': 'unset', 'width': '100%'});
            $('h1', this).fadeOut();
            $('#substrate_projects').css({'cursor': 'pointer'});
            $(this).dequeue();
        });
  });

  // close
  $('#substrate_projects').on('click', function() {
    $(this).css({'z-index': '-100'});
    $('#projects').css({'transform': 'scale(1)', 'border-radius': '100%', 'z-index': '100', 'cursor': 'pointer', 'width': '400px', 'height': '400px'});
    $('h1').fadeIn();
    $('#contacts, #hello').css({'opacity': '1', 'z-index': '100'});

  });
});

// contact circle
$(function() {
  // open
  $('#contacts').on('click', function() {
    $('#contacts').css({'z-index': '200', 'cursor': 'unset'});
    $('#contacts h1').fadeOut();
    $('#contacts_col').delay(1000).fadeIn();
    $('#substrate_contacts').css({'opacity': '0.7', 'background-color': 'black', 'z-index': '150', 'cursor': 'pointer'}).fadeIn();
  });

  // close
  $('#substrate_contacts').on('click', function() {
    $('#contacts').css({'z-index': '0', 'cursor': 'pointer'});
    $('#contacts_col').fadeOut();
    $('#contacts h1').delay(1000).fadeIn();
    $('#substrate_contacts').fadeOut().css({'opacity': '0', 'background-color': 'black', 'z-index': '-100', 'cursor': 'unset'});
  });
});