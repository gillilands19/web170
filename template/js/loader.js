var value = 1;
var pos = 0;
var progressHidden = false;
var delay = 40;
var progressEl = $('progress');
var loadingEl = $('#loading');

// set interval
var timer = setInterval(progress, 2);

function progress() {
  
  // run counter
  value++;
  if (value < 99) {
    progressEl.val(value);
    pos = 1 - (value/100);
  } else if(value < (delay + 100) ) {
    progressEl.val(99);
    pos = 0;
  }
  
  // update background
  progressEl.css('background-position', '0 '+ pos +'em');
  
  // show/hide progress
  if(!progressHidden && value >= 100) {
    progressEl.addClass("hidden");
    loadingEl.slideUp("#loading");
    progressHidden = true;
      
}
    
  }
  
